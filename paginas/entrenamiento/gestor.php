<?php
include_once 'app/Conexion.inc.php';
include_once 'app/admin/ControlSesionAdmin.inc.php';
include_once 'app/admin/RepositorioAdmin.inc.php';
include_once 'app/entrenamiento/EscritorEntradas.inc.php';
include_once 'app/entrenamiento/RepositorioComentario.inc.php';
include_once 'app/Redireccion.inc.php';



if (!ControlSesionAdmin::sesion_iniciada()) {
	Redireccion::redirigir(RUTA_LOGIN_ADMIN);	
}else {
	Conexion :: abrir_conexion();
	$id = $_SESSION['id_admin'];
	$admin = RepositorioAdmin :: obtener_admin_por_id(Conexion::obtener_conexion(), $id);
}

$titulo = "Gestor de contenido exclusivo";

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'scripts/formatoFecha.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
include_once 'seccion/panel_control_declaracion.inc.php';

switch($gestor_actual) {
	case '':
		$cantidad_entradas_activas = RepositorioEntrada :: contar_entradas_activas_admin(Conexion::obtener_conexion(), $_SESSION['id_admin']);
		$cantidad_entradas_inactivas = RepositorioEntrada :: contar_entradas_inactivas_admin(Conexion::obtener_conexion(), $_SESSION['id_admin']);
	
		$cantidad_comentarios = RepositorioComentario :: contar_comentarios_usuario(Conexion::obtener_conexion(), $_SESSION['id_usuario']);
	
		include_once 'seccion/entrenamiento/gestor-generico.inc.php';
		break;
	case 'entradas-entrenamiento':
		$array_entradas = RepositorioEntrada :: obtener_entradas_admin_fecha_descendente(Conexion::obtener_conexion(), $_SESSION['id_admin']);
	
		include_once 'seccion/entrenamiento/gestor-entradas.inc.php';
		break;
	case 'comentarios':
		include_once 'seccion/entrenamiento/gestor-comentarios.inc.php';
		break;
	case 'favoritos':
		include_once 'seccion/entrenamiento/gestor-favoritos.inc.php';
		break;
}

include_once 'seccion/panel_control_cierre.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>
