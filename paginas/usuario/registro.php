<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';


include_once 'app/admin/Admin.inc.php';
include_once 'app/usuario/Usuario.inc.php';
include_once 'app/admin/RepositorioAdmin.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/usuario/ValidadorRegistro.inc.php';
include_once 'app/admin/ControlSesionAdmin.inc.php';


if (!ControlSesionAdmin::sesion_iniciada()) {
	Redireccion::redirigir(RUTA_404);
}

if (isset($_POST['enviar'])) {
	Conexion :: abrir_conexion();

	$validador = new ValidadorRegistro($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['clave1'], /*$_POST['clave2'], */
		$_POST['fecha_nacimiento'], $_POST['pais'], $_POST['telefono'], $_POST['dieta'],
		$_POST['objetivo'], $_POST['altura'], $_POST['peso'], $_POST['lugar_entreno'],
		$_POST['restricciones'], $_POST['plan'], Conexion :: obtener_conexion());


	if($validador -> registro_valido()){
		$usuario = new Usuario('', 
			$validador-> obtener_nombre(), 
			$validador-> obtener_apellido(), 
			$validador-> obtener_email(), 
			password_hash($validador-> obtener_clave(), PASSWORD_DEFAULT), 
			$validador-> obtener_fecha_nacimiento(), 
			$validador-> obtener_pais(), 
			$validador-> obtener_telefono(), 
			$validador-> obtener_dieta(),
			$validador-> obtener_objetivo(), 
			$validador-> obtener_altura(), 
			$validador-> obtener_peso(),
			$validador-> obtener_lugar_entreno(),
			$validador-> obtener_restricciones(),
			$validador-> obtener_plan(),     
			'',
			'');


		$usuario_insertado = RepositorioUsuario :: insertar_usuario(Conexion :: obtener_conexion(), $usuario);
		if ($usuario_insertado) {
			//redirigir a REGISTRO CORRECTO
			Redireccion::redirigir(RUTA_REGISTRO_CORRECTO . '/' . $usuario -> obtener_nombre());
			
		}
		else{
			echo "madafaca no sirve";
		}
	}
}



$titulo = "Nuevo Usuario | $nombreEmpresa";



include_once 'seccion/cabecera-inicio.inc.php';
include_once 'scripts/paises.php';
include_once 'scripts/mostrarPass.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';


//El registro se adapta a moviles como lo hace el login
?>


<?php //body ?>
<div class="container-fluid">
	<?php //inicio ?>
	<div class="row">
	    <?php //registro de admin?>
	    <div class="col-12 center-align valign-wrapper" style="background-color: #A60303; color: white;">
	        <div class="row">
	        	<h1 class="textoBlack" style="margin-top: 2em;margin-bottom: .5em;">Registro de nuevo usuario</h1>
	        </div>
	    </div>
	    <div class="row col-12 center-align valign-wrapper">
	    	<div class="col-1 d-block d-sm-none"></div>
	    	<div class="col-10 col-md-12">
	    		<form role="form" method="post" class="row" action="<?php echo RUTA_REGISTRO; ?>">
					<?php
					if (isset($_POST['enviar'])) {
						include 'seccion/usuario/registro_validado.inc.php';
					}
					else{
						include 'seccion/usuario/registro_vacio.inc.php';
					}
					?>
				</form>	    		
	    	</div>
	    	<div class="col-1 d-block d-sm-none"></div>	    	
	    </div>
	</div>
	<?php //fin del formulario 
	include_once 'seccion/copyright.inc.php';
	?>
</div>
<?php //body ?>






<?php
include_once 'seccion/doc-terminacion.inc.php';
?>