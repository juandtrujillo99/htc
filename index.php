<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'app/admin/Admin.inc.php';
include_once 'app/admin/RepositorioAdmin.inc.php';


include_once 'app/usuario/Usuario.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';


include_once 'app/entrenamiento/RepositorioEntrada.inc.php';
include_once 'app/entrenamiento/Entrada.inc.php';
include_once 'app/entrenamiento/RepositorioComentario.inc.php';
include_once 'app/entrenamiento/Comentario.inc.php';


include_once 'app/blog/RepositorioEntrada.inc.php';
include_once 'app/blog/Entrada.inc.php';
include_once 'app/blog/RepositorioComentario.inc.php';
include_once 'app/blog/Comentario.inc.php';


include_once 'app/tienda/RepositorioEntrada.inc.php';
include_once 'app/tienda/Entrada.inc.php';
include_once 'app/tienda/RepositorioComentario.inc.php';
include_once 'app/tienda/Comentario.inc.php';

/*
include_once 'app/control-medidas/ControlMedida.inc.php';
include_once 'app/rutina/Rutina.inc.php';


include_once 'app/control-medidas/RepositorioControlMedida.inc.php';
include_once 'app/rutina/RepositorioRutina.inc.php';
*/
$componentes_url = parse_url($_SERVER['REQUEST_URI']);

$ruta = $componentes_url['path'];

$partes_ruta = explode("/", $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'paginas/404.php';//siempre se redigirá a esta pagina en caso de que la url no se escriba correctamente o la redireccion se haga mal

if($partes_ruta[0] == 'htc'){
	if (count($partes_ruta) == 1) {
		$ruta_elegida = 'paginas/inicio.php';
	}
	else if (count($partes_ruta) == 2) {
		switch($partes_ruta[1]){


			//asesoria
			case 'asesoria':
			$ruta_elegida = 'paginas/asesoria.php';
			break;

			//asesoria colombia
			case 'asesoria-colombia':
			$ruta_elegida = 'paginas/asesoria/colombia.php';
			break;
			//formulario inscripcion basic plan colombia
			case 'inscripcion-basic-colombia':
			$ruta_elegida = 'paginas/asesoria/colombia/formularioBasic.php';
			break;
			//formulario inscripcion standard plan colombia
			case 'inscripcion-standard-colombia':
			$ruta_elegida = 'paginas/asesoria/colombia/formularioStandard.php';
			break;
			//formulario inscripcion advanced plan colombia
			case 'inscripcion-advanced-colombia':
			$ruta_elegida = 'paginas/asesoria/colombia/formularioAdvanced.php';
			break;
			//formulario inscripcion pro plan colombia
			case 'inscripcion-pro-colombia':
			$ruta_elegida = 'paginas/asesoria/colombia/formularioPro.php';
			break;


			//asesoria españa
			case 'asesoria-spain':
			$ruta_elegida = 'paginas/asesoria/spain.php';
			break;
			//formulario inscripcion basic plan spain
			case 'inscripcion-basic-spain':
			$ruta_elegida = 'paginas/asesoria/spain/formularioBasic.php';
			break;
			//formulario inscripcion standard plan spain
			case 'inscripcion-standard-spain':
			$ruta_elegida = 'paginas/asesoria/spain/formularioStandard.php';
			break;
			//formulario inscripcion advanced plan spain
			case 'inscripcion-advanced-spain':
			$ruta_elegida = 'paginas/asesoria/spain/formularioAdvanced.php';
			break;
			//formulario inscripcion pro plan spain
			case 'inscripcion-pro-spain':
			$ruta_elegida = 'paginas/asesoria/spain/formularioPro.php';
			break;


			//asesoria resto del mundo
			case 'asesoria-personalizada-online':
			$ruta_elegida = 'paginas/asesoria/rdm.php';
			break;
			//formulario inscripcion basic plan resto del mundo
			case 'inscripcion-basic-personalizada-online':
			$ruta_elegida = 'paginas/asesoria/rdm/formularioBasic.php';
			break;
			//formulario inscripcion standard plan resto del mundo
			case 'inscripcion-standard-personalizada-online':
			$ruta_elegida = 'paginas/asesoria/rdm/formularioStandard.php';
			break;
			//formulario inscripcion advanced plan resto del mundo
			case 'inscripcion-advanced-personalizada-online':
			$ruta_elegida = 'paginas/asesoria/rdm/formularioAdvanced.php';
			break;
			//formulario inscripcion pro plan resto del mundo
			case 'inscripcion-pro-personalizada-online':
			$ruta_elegida = 'paginas/asesoria/rdm/formularioPro.php';
			break;


			//asesoria pantalla inicial
			case 'harold-trujillo':
			$ruta_elegida = 'paginas/biografia.php';
			break;
			//asesoria pantalla inicial
			case 'reto-90-dias':
			$ruta_elegida = 'paginas/reto.php';
			break;
			//pagina donde llegan los usuarios despues de logearse
			case 'inicio':
			$ruta_elegida = 'paginas/home.php';
			break;
			//pagina donde estan todas las vistas prvias de ejercicios
			case 'entrenamiento':
			$ruta_elegida = 'paginas/entrenamiento.php';
			break;
			//pagina donde estan todas las vistas prvias del blog
			case 'blog':
			$ruta_elegida = 'paginas/blog.php';
			break;
			//pagina donde estan todas las vistas prvias de la tienda
			case 'tienda':
			$ruta_elegida = 'paginas/tienda.php';
			break;
			//terminos y condiciones
			case 'terminos-condiciones':
			$ruta_elegida = 'paginas/legal.php';
			break;


			//paginas tercer nivel
				//rutina personlizada no disponible
				case 'rutina-ejercicios-no-disponible':
				$ruta_elegida = 'paginas/tercer-nivel/rutina-no-disponible.php';
				break;
				//guia de alimentacion saludable no disponible
				case 'guia-alimentacion-no-disponible':
				$ruta_elegida = 'paginas/tercer-nivel/guia-alimentacion-no-disponible.php';
				break;
				//guia de suplementacion saludable no disponible
				case 'guia-suplementacion-no-disponible':
				$ruta_elegida = 'paginas/tercer-nivel/guia-suplementacion-no-disponible.php';
				break;



			
			//Esta es la pestaña del gestor para subir rutinas personalizadas
			case 'gestor-rutina-ejercicios':
			$ruta_elegida = 'paginas/guias/rutina/gestor.php';
			break;
			//Esta es la pestaña que ve el usuario
			case 'rutina-ejercicios':
			$ruta_elegida = 'paginas/guias/rutina/ejercicios.php';
			break;
			//Esta es la pestaña del gestor para subir guias de alimentacion saludables
			case 'gestor-guia-alimentacion':
			$ruta_elegida = 'paginas/guias/alimentacion/gestor.php';
			break;
			//Esta es la pestaña que ve el usuario
			case 'guia-alimentacion':
			$ruta_elegida = 'paginas/guias/alimentacion/alimentacion.php';
			break;
			//Esta es la pestaña del gestor para subir guias de alimentacion saludables
			case 'gestor-guia-suplementacion':
			$ruta_elegida = 'paginas/guias/suplementacion/gestor.php';
			break;
			//Esta es la pestaña que ve el usuario
			case 'guia-suplementacion':
			$ruta_elegida = 'paginas/guias/suplementacion/suplementacion.php';
			break;



			case 'panel-entrada-entrenamiento':
			$ruta_elegida = 'paginas/entrenamiento/gestor.php';
			$gestor_actual = '';
			break;
			case 'nueva-entrada-entrenamiento':
			$ruta_elegida = 'paginas/entrenamiento/nueva-entrada.php';
			break;
			case 'editar-entrada-entrenamiento':
			$ruta_elegida = 'paginas/entrenamiento/editar-entrada.php';
			break;
			case 'borrar-entrada-entrenamiento':
			$ruta_elegida = 'scripts/entrenamiento/borrar-entrada.php';
			break;
			//Buscar ejercicio
			case 'buscar-entrenamiento':
            $ruta_elegida = 'paginas/entrenamiento/buscar.php';
            break;
			//Buscar entrada
			case 'buscar-entrada-entrenamiento':
            $ruta_elegida = 'paginas/entrenamiento/buscar-entrada.php';
            break;




            case 'panel-entrada-blog':
			$ruta_elegida = 'paginas/blog/gestor.php';
			$gestor_actual = '';
			break;
			case 'nueva-entrada-blog':
			$ruta_elegida = 'paginas/blog/nueva-entrada.php';
			break;
			case 'editar-entrada-blog':
			$ruta_elegida = 'paginas/blog/editar-entrada.php';
			break;
			case 'borrar-entrada-blog':
			$ruta_elegida = 'scripts/blog/borrar-entrada.php';
			break;
			//Buscar entrada
			case 'buscar-blog':
            $ruta_elegida = 'paginas/blog/buscar.php';
            break;
			//Buscar entrada
			case 'buscar-entrada-blog':
            $ruta_elegida = 'paginas/blog/buscar-entrada.php';
            break;



            case 'panel-entrada-tienda':
			$ruta_elegida = 'paginas/tienda/gestor.php';
			$gestor_actual = '';
			break;
			case 'nueva-entrada-tienda':
			$ruta_elegida = 'paginas/tienda/nueva-entrada.php';
			break;
			case 'editar-entrada-tienda':
			$ruta_elegida = 'paginas/tienda/editar-entrada.php';
			break;
			case 'borrar-entrada-tienda':
			$ruta_elegida = 'scripts/tienda/borrar-entrada.php';
			break;
			//Buscar producto
			case 'buscar-tienda':
            $ruta_elegida = 'paginas/tienda/buscar.php';
            break;
			//Buscar entrada
			case 'buscar-entrada-tienda':
            $ruta_elegida = 'paginas/tienda/buscar-entrada.php';
            break;


			/*
			//USUARIO
				
				//Panel de control de medidas del usuario
				case 'gestor-control-medidas':
				$ruta_elegida = 'paginas/control-medidas/gestor.php';
				$gestor_actual = '';
				break;
				case 'nueva-medida':
				$ruta_elegida = 'paginas/control-medidas/nueva-medida.php';
				break;
				case 'borrar-medida':
				$ruta_elegida = 'scripts/control-medidas/borrar-medida.php';
				break;
				case 'editar-medida':
				$ruta_elegida = 'paginas/control-medidas/editar-medida.php';
				break;


*/

			//USUARIO
				//registro de usuarios
				case 'gestor-usuarios':
				$ruta_elegida = 'paginas/usuario/gestor.php';
				break;	
				case 'borrar-usuario':
				$ruta_elegida = 'scripts/usuario/borrar.php';
				break;			
				//registro de usuarios
				case 'registro':
				$ruta_elegida = 'paginas/usuario/registro.php';
				break;
				//login de usuario
				case 'iniciar-sesion':
				$ruta_elegida = 'paginas/usuario/login.php';
				break;
				case 'logout':
				$ruta_elegida = 'paginas/usuario/logout.php';
				break;

				//Perfil de usuario
				case 'perfil':
				$ruta_elegida = 'paginas/usuario/perfil.php';
				break;
				//editar datos usuario
				case 'editar-datos-usuario':
				$ruta_elegida = 'paginas/usuario/editar-datos.php';
				break;
				case 'generar-peticion-edicion-datos':
				$ruta_elegida = 'scripts/usuario/editar-datos.php';
				break;

				//recuperacion de contraseña para usuario
				case 'recuperar-clave':
				$ruta_elegida = 'paginas/usuario/recuperar-clave.php';
				break;
				case 'generar-url-secreta':
				$ruta_elegida = 'scripts/generar-url-secreta.php';
				break;
				case 'enviar-email':
				$ruta_elegida = 'scripts/enviar-mail.php';
				break;
				//pagina de redireccion antes de entregar url_personal para recuperar clave
				case 'email-recuperacion-clave-enviado':
				$ruta_elegida = 'paginas/usuario/email-recuperacion-clave-enviado.php';
				break;
				//pagina de redireccion antes de entregar url_personal para recuperar clave
				case 'clave-actualizada':
				$ruta_elegida = 'paginas/usuario/clave-actualizada.php';
				break;




			//ADMINISTRADOR
				//registro de admin
				case 'registro-colaborador':
				$ruta_elegida = 'paginas/admin/registro.php';
				break;
				
				//login de admin		
				case 'login-colaborador':
				$ruta_elegida = 'paginas/admin/login.php';
				break;
				case 'logout-admin':
				$ruta_elegida = 'paginas/admin/logout.php';
				break;

				//Perfil de admin
				case 'perfil-colaborador':
				$ruta_elegida = 'paginas/admin/perfil.php';
				break;

				//editar datos admin
				case 'editar-datos-colaborador':
				$ruta_elegida = 'paginas/admin/editar-datos.php';
				break;
				case 'generar-peticion-edicion-datos-colaborador':
				$ruta_elegida = 'scripts/admin/editar-datos.php';
				break;

				//recuperacion de contraseña para colaborador
				case 'recuperar-clave-colaborador':
				$ruta_elegida = 'paginas/admin/recuperar-clave.php';
				break;
				case 'generar-url-secreta-colaborador':
				$ruta_elegida = 'scripts/generar-url-secreta-admin.php';
				break;	
		}
	}


	else if (count($partes_ruta) == 3) {

		//usuario registro correcto
		if($partes_ruta[1] == 'registro-correcto-usuario'){
			$nombre = $partes_ruta[2];
			$ruta_elegida = 'paginas/usuario/registro-correcto.php';
		}


		//rutas para medidas del usuario
		if ($partes_ruta[1] == 'medida') {
			$url = $partes_ruta[2];

			Conexion::abrir_conexion();
			$medida = RepositorioControlMedida :: obtener_medida_por_url(Conexion::obtener_conexion(), $url);

			if ($medida != null) {
				$autor = RepositorioUsuario::obtener_usuario_por_id(Conexion::obtener_conexion(), $medida -> obtener_autor_id());
				$medidas_azar = RepositorioControlMedida::obtener_medidas_al_azar(Conexion::obtener_conexion(), 3);


				$ruta_elegida = 'paginas/control-medidas/medida.php';
			}
		}
		//panel de control de las medidas
		if ($partes_ruta[1] == 'gestor-control-medidas') {
			switch ($partes_ruta[2]) {
				case 'medidas':
					$gestor_actual = 'medidas';
					$ruta_elegida = 'paginas/control-medidas/gestor.php';
					break;
			}
		}

		
		//Recuperacion de contraseña de usuario (no tocar)
		if ($partes_ruta[1] == 'recuperacion-clave') {
			$url_personal = $partes_ruta[2];
			$ruta_elegida = 'paginas/usuario/recuperacion-clave.php';
		}
		//edicion de datos del usuario
		if ($partes_ruta[1] == 'editar-datos-usuario') {
			$url_personal = $partes_ruta[2];
			$ruta_elegida = 'paginas/usuario/editar-datos.php';
		}



		//admin registro correcto
		if($partes_ruta[1] == 'registro-correcto-colaborador'){
			$nombre = $partes_ruta[2];
			$ruta_elegida = 'paginas/admin/registro-correcto.php';
		}



		//rutas para entradas de ejercicios
		if ($partes_ruta[1] == 'entrada-entrenamiento') {
			$url = $partes_ruta[2];

			Conexion::abrir_conexion();
			$entrada = RepositorioEntrada :: obtener_entrada_por_url(Conexion::obtener_conexion(), $url);

			if ($entrada != null) {
				$autor = RepositorioAdmin::obtener_admin_por_id(Conexion::obtener_conexion(), $entrada -> obtener_autor_id());
				$comentarios = RepositorioComentario::obtener_comentarios(Conexion::obtener_conexion(), $entrada -> obtener_id());
				$entradas_azar = RepositorioEntrada::obtener_entradas_al_azar(Conexion::obtener_conexion(), 3);//aqui se cambia el numero de entradas que se va a mostrar


				$ruta_elegida = 'paginas/entrenamiento/entrada.php';
			}
		}
		//panel de control de las entradas, favoritos y comentarios, sirve como referencia (no tocar)
		if ($partes_ruta[1] == 'panel-entrada-entrenamiento') {
			switch ($partes_ruta[2]) {
				case 'entradas-entrenamiento'://Debe modificarse esta direccion porque con esto es que se visualizan las entradas en el gestor
					$gestor_actual = 'entradas-entrenamiento';
					$ruta_elegida = 'paginas/entrenamiento/gestor.php';
					break;
				case 'comentarios':
        			$gestor_actual = 'comentarios';
        			$ruta_elegida = 'paginas/entrenamiento/gestor.php';
        			break;
			}
		}	


		//rutas para entradas de blog
		if ($partes_ruta[1] == 'entrada-blog') {
			$url = $partes_ruta[2];

			Conexion::abrir_conexion();
			$entrada = RepositorioEntradaBlog :: obtener_entrada_por_url(Conexion::obtener_conexion(), $url);

			if ($entrada != null) {
				$autor = RepositorioAdmin::obtener_admin_por_id(Conexion::obtener_conexion(), $entrada -> obtener_autor_id());
				$comentarios = RepositorioComentarioBlog::obtener_comentarios(Conexion::obtener_conexion(), $entrada -> obtener_id());
				$entradas_azar = RepositorioEntradaBlog::obtener_entradas_al_azar(Conexion::obtener_conexion(), 3);//aqui se cambia el numero de entradas que se va a mostrar


				$ruta_elegida = 'paginas/blog/entrada.php';
			}
		}
		//panel de control de las entradas, favoritos y comentarios, sirve como referencia (no tocar)
		if ($partes_ruta[1] == 'panel-entrada-blog') {
			switch ($partes_ruta[2]) {
				case 'entradas-blog'://Debe modificarse esta direccion porque con esto es que se visualizan las entradas en el gestor
					$gestor_actual = 'entradas-blog';
					$ruta_elegida = 'paginas/blog/gestor.php';
					break;
				case 'comentarios':
        			$gestor_actual = 'comentarios';
        			$ruta_elegida = 'paginas/blog/gestor.php';
        			break;
			}
		}	


		//rutas para entradas de la tienda
		if ($partes_ruta[1] == 'entrada-tienda') {
			$url = $partes_ruta[2];

			Conexion::abrir_conexion();
			$entrada = RepositorioEntradaTienda::obtener_entrada_por_url(Conexion::obtener_conexion(), $url);

			if ($entrada != null) {
				$autor = RepositorioAdmin::obtener_admin_por_id(Conexion::obtener_conexion(), $entrada -> obtener_autor_id());
				$comentarios = RepositorioComentarioTienda::obtener_comentarios(Conexion::obtener_conexion(), $entrada -> obtener_id());
				$entradas_azar = RepositorioEntradaTienda::obtener_entradas_al_azar(Conexion::obtener_conexion(), 3);//aqui se cambia el numero de entradas que se va a mostrar


				$ruta_elegida = 'paginas/tienda/entrada.php';
			}
		}
		//panel de control de las entradas, favoritos y comentarios, sirve como referencia (no tocar)
		if ($partes_ruta[1] == 'panel-entrada-tienda') {
			switch ($partes_ruta[2]) {
				case 'entradas-tienda'://Debe modificarse esta direccion porque con esto es que se visualizan las entradas en el gestor
					$gestor_actual = 'entradas-tienda';
					$ruta_elegida = 'paginas/tienda/gestor.php';
					break;
				case 'comentarios':
        			$gestor_actual = 'comentarios';
        			$ruta_elegida = 'paginas/tienda/gestor.php';
        			break;
			}
		}	



		if ($partes_ruta[1] == 'recuperacion-clave-colaborador') {
			$url_personal = $partes_ruta[2];
			$ruta_elegida = 'paginas/empleado/recuperacion-clave.php';
		}
		//edicion de datos del empleado
		if ($partes_ruta[1] == 'editar-datos-empleado') {
			$url_personal = $partes_ruta[2];
			$ruta_elegida = 'paginas/empleado/editar-datos.php';
		}
	}
}

include_once $ruta_elegida;