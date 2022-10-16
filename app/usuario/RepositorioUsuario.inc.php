<?php



//RepositorioUsuario: Es la clase donde se almacenan todas las funciones para el tratamiento de datos del usuario en la base de datos 

class RepositorioUsuario{

	public static function obtener_todos($conexion){//esta funcion se encarga de saber cuales y cuantos usuarios hay registrados
		$usuarios = array();
		if (isset($conexion)){
			try{
				include_once 'Usuario.inc.php';
				$sql = "SELECT * FROM usuarios";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();
				$resultado = $sentencia -> fetchAll();


				if (count($resultado)){
					foreach ($resultado as $fila) {
						$usuarios[] = new Usuario(
							$fila['id'], $fila['nombre'], $fila['apellido'], $fila['email'], $fila['password'], 
							$fila['fecha_nacimiento'], $fila['pais'], $fila['telefono'], $fila['dieta'],
							$fila['objetivo'], $fila['altura'], $fila['peso'], $fila['lugar_entreno'],
							$fila['restricciones'], $fila['plan'], $fila['dias_entreno'], $fila['fecha_registro'], $fila['activo']
						);
					}
				} else{
					print 'No hay usuarios';
				}
			} catch(PDOException $ex){
				print "ERROR" . $ex -> getMessage();
			}
		}
		return $usuarios;
	}


	//obtener_numero_usuarios: esta encargada de contar cuantos usuarios hay registrados en la base de datos 

	public static function obtener_numero_usuarios($conexion){
		$total_usuarios = null;
		if (isset($conexion)){
			try{
				$sql = "SELECT COUNT(*) as total FROM usuarios";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();
				$resultado = $sentencia -> fetch();
				$total_usuarios = $resultado['total'];
			}
			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $total_usuarios;
	}



	//insertar_usuario: esta encargada de agregar nuevos usuarios a la base de datos

	public static function insertar_usuario($conexion, $usuario){
		$usuario_insertado = false;
		if (isset($conexion)) {
			try{
				$sql = "INSERT INTO usuarios(nombre, apellido, email, password, fecha_nacimiento, pais, telefono, dieta, objetivo, altura, peso, lugar_entreno, restricciones, plan, dias_entreno, fecha_registro, activo) VALUES(:nombre, :apellido, :email, :password, :fecha_nacimiento, :pais, :telefono, :dieta, :objetivo, :altura, :peso, :lugar_entreno, :restricciones, :plan, :dias_entreno, NOW(), 0)";

				$sentencia = $conexion -> prepare($sql);

				$sentencia->bindParam(':nombre', $usuario -> obtener_nombre(), PDO::PARAM_STR);
				$sentencia->bindParam(':apellido', $usuario -> obtener_apellido(), PDO::PARAM_STR);
				$sentencia->bindParam(':email', $usuario -> obtener_email(), PDO::PARAM_STR);
				$sentencia->bindParam(':password', $usuario -> obtener_password(), PDO::PARAM_STR);
				$sentencia->bindParam(':fecha_nacimiento', $usuario -> obtener_fecha_nacimiento(), PDO::PARAM_STR);
				$sentencia->bindParam(':pais', $usuario -> obtener_pais(), PDO::PARAM_STR);
				$sentencia->bindParam(':telefono', $usuario -> obtener_telefono(), PDO::PARAM_STR);
				$sentencia->bindParam(':dieta', $usuario -> obtener_dieta(), PDO::PARAM_STR);
				$sentencia->bindParam(':objetivo', $usuario -> obtener_objetivo(), PDO::PARAM_STR);
				$sentencia->bindParam(':altura', $usuario -> obtener_altura(), PDO::PARAM_STR);
				$sentencia->bindParam(':peso', $usuario -> obtener_peso(), PDO::PARAM_STR);
				$sentencia->bindParam(':lugar_entreno', $usuario -> obtener_lugar_entreno(), PDO::PARAM_STR);
				$sentencia->bindParam(':restricciones', $usuario -> obtener_restricciones(), PDO::PARAM_STR);
				$sentencia->bindParam(':plan', $usuario -> obtener_plan(), PDO::PARAM_STR);
				$sentencia->bindParam(':dias_entreno', $usuario -> obtener_dias_entreno(), PDO::PARAM_STR);

				$usuario_insertado = $sentencia -> execute();
			}

			catch(PDOException $ex){
				print 'ERROR' . $ex->getMessage();
			}
		}
		return $usuario_insertado;
	}


	public static function eliminar_usuario($conexion, $usuario_id) {
        if (isset($conexion)) {
            try {
                $conexion -> beginTransaction();

                $sql = "DELETE FROM usuarios WHERE id=:usuario_id";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':usuario_id', $usuario_id, PDO::PARAM_STR);
                $sentencia -> execute();

                $conexion -> commit();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
                $conexion -> rollBack();
            }
        }
    }



	//nombre_existe: esta funcion se encargara de verificar que los nombres de usuario no se repitan en la base de datos

	public static function nombre_existe($conexion, $nombre){
		$nombre_existe = true;

		if (isset($conexion)) {
			try{
				$sql = "SELECT * FROM usuarios WHERE nombre = :nombre";

				$sentencia = $conexion -> prepare($sql);
				$sentencia -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
				$sentencia -> execute();

				$resultado = $sentencia -> fetchAll();

				if(count($resultado)){
					$nombre_existe = true;
				}
				else{
					$nombre_existe = false;
				}
			}

			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $nombre_existe;
	}



	//email_existe: esta encargada de verificar que los correos no se repitan en la base de datos (un email puede ser utilizado solo una vez por usuario)
	public static function email_existe($conexion, $email){
		$email_existe = true;

		if (isset($conexion)) {
			try{
				$sql = "SELECT * FROM usuarios WHERE email = :email";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
				$sentencia -> execute();
				$resultado = $sentencia -> fetchAll();

				if(count($resultado)){
					$email_existe = true;
				}
				else{
					$email_existe = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $email_existe;
	}



	//obtener_usuario_por_email: ayuda a identificar a cada usuario con su email
	public static function obtener_usuario_por_email($conexion, $email){
		$usuario = null;

		if (isset($conexion)){
			try{
				include_once 'Usuario.inc.php';

				$sql = "SELECT * FROM usuarios WHERE email = :email";

				$sentencia = $conexion -> prepare($sql);
				$sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
				$sentencia -> execute();

				$resultado = $sentencia -> fetch();

				if (!empty($resultado)) {
					$usuario = new Usuario($resultado['id'],
						$resultado['nombre'],
						$resultado['apellido'],
						$resultado['email'],
						$resultado['password'],
						
						$resultado['fecha_nacimiento'],
						$resultado['pais'],
						$resultado['telefono'],
						$resultado['dieta'],
						
						$resultado['objetivo'],
						$resultado['altura'],
						$resultado['peso'],
						$resultado['lugar_entreno'],
						
						$resultado['restricciones'],
						$resultado['plan'],
						$resultado['dias_entreno'],

						$resultado['fecha_registro'],
						$resultado['activo']);
				}
			}

			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $usuario;
	}



	//obtener_usuario_por_id: ayuda a identificar a cada usuario con su id
	public static function obtener_usuario_por_id($conexion, $id){
		$usuario = null;

		if (isset($conexion)){
			try{
				include_once 'Usuario.inc.php';

				$sql = "SELECT * FROM usuarios WHERE id = :id";

				$sentencia = $conexion -> prepare($sql);
				$sentencia -> bindParam(':id', $id, PDO::PARAM_STR);
				$sentencia -> execute();

				$resultado = $sentencia -> fetch();

				if (!empty($resultado)) {
					$usuario = new Usuario($resultado['id'],
						$resultado['nombre'],
						$resultado['apellido'],
						$resultado['email'],
						$resultado['password'],
						
						$resultado['fecha_nacimiento'],
						$resultado['pais'],
						$resultado['telefono'],
						$resultado['dieta'],
						
						$resultado['objetivo'],
						$resultado['altura'],
						$resultado['peso'],
						$resultado['lugar_entreno'],
						
						$resultado['restricciones'],
						$resultado['plan'],
						$resultado['dias_entreno'],

						$resultado['fecha_registro'],
						$resultado['activo']);
				}
			}

			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $usuario;
	}



	//actualizar_password: ayuda a actualizar las contraseñas de cada usuario
	public static function actualizar_password($conexion, $id_usuario, $nueva_clave){
		$actualizacion_correcta = false;

		if (isset($conexion)) {
			try{
				$sql = "UPDATE usuarios SET password = :password WHERE id = :id";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> bindParam(':password', $nueva_clave, PDO::PARAM_STR);
				$sentencia -> bindParam(':id', $id_usuario, PDO::PARAM_STR);
				$sentencia -> execute();

				$resultado = $sentencia -> rowCount();

				if (count((array)$resultado)) {
					$actualizacion_correcta = true;
				}
				else{
					$actualizacion_correcta = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR'.$ex -> getMessage();
			}
		}
		return $actualizacion_correcta;
	}


	//esta funcion actualiza el nombre del usuario
	public static function actualizar_nombre($conexion, $id_usuario, $nuevo_nombre){
		$actualizacion_correcta = false;

		if (isset($conexion)) {
			try{
				$sql = "UPDATE usuarios SET nombre = :nombre WHERE id = :id";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> bindParam(':nombre', $nuevo_nombre, PDO::PARAM_STR);
				$sentencia -> bindParam(':id', $id_usuario, PDO::PARAM_STR);
				$sentencia -> execute();

				$resultado = $sentencia -> rowCount();

				if (count((array)$resultado)) {
					$actualizacion_correcta = true;
				}
				else{
					$actualizacion_correcta = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR'.$ex -> getMessage();
			}
		}
		return $actualizacion_correcta;
	}


	//esta funcion actualiza el apellido del usuario
	public static function actualizar_apellido($conexion, $id_usuario, $nuevo_apellido){
		$actualizacion_correcta = false;

		if (isset($conexion)) {
			try{
				$sql = "UPDATE usuarios SET apellido = :apellido WHERE id = :id";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> bindParam(':apellido', $nuevo_apellido, PDO::PARAM_STR);
				$sentencia -> bindParam(':id', $id_usuario, PDO::PARAM_STR);
				$sentencia -> execute();

				$resultado = $sentencia -> rowCount();

				if (count((array)$resultado)) {
					$actualizacion_correcta = true;
				}
				else{
					$actualizacion_correcta = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR'.$ex -> getMessage();
			}
		}
		return $actualizacion_correcta;
	}


	//esta funcion actualiza el telefono del usuario
	public static function actualizar_telefono($conexion, $id_usuario, $nuevo_telefono){
		$actualizacion_correcta = false;

		if (isset($conexion)) {
			try{
				$sql = "UPDATE usuarios SET telefono = :telefono WHERE id = :id";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> bindParam(':telefono', $nuevo_telefono, PDO::PARAM_STR);
				$sentencia -> bindParam(':id', $id_usuario, PDO::PARAM_STR);
				$sentencia -> execute();

				$resultado = $sentencia -> rowCount();

				if (count((array)$resultado)) {
					$actualizacion_correcta = true;
				}
				else{
					$actualizacion_correcta = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR'.$ex -> getMessage();
			}
		}
		return $actualizacion_correcta;
	}
}





