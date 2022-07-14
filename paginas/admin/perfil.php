<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: ". gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';

include_once 'app/admin/RepositorioAdmin.inc.php';
include_once 'app/admin/ControlSesionAdmin.inc.php';

if (!ControlSesionAdmin::sesion_iniciada()) {
	Redireccion::redirigir(RUTA_LOGIN_ADMIN);	
}else {
	Conexion :: abrir_conexion();
	$id = $_SESSION['id_admin'];
	$admin = RepositorioAdmin :: obtener_admin_por_id(Conexion::obtener_conexion(), $id);
}


$titulo = "Administración | $nombreEmpresa";
$navbar = "position: absolute;";
include_once 'seccion/admin/perfil/subir_foto.inc.php';
include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<script type="text/javascript" src="<?php echo RUTA_JS; ?>desaparecer-automaticamente.js"></script>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'scripts/formatoFecha.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>



<?php //body ?>

<div class="container">
	<?php
	include_once 'seccion/admin/perfil/portada.inc.php';
	?>
  
	<div class="row" style="padding: 2em;">
	    <div class="col-12 col-md-6 row textoTitulo center-align valign-wrapper">
	        <a href="<?php echo RUTA_REGISTRO; ?>" class="col-6 col-md-4 tooltipped" data-position="top" data-tooltip="Registrar nuevo usuario" style="padding:.5em">
	            <p style="background-color: #A60303;color: white;"><i style="padding:.5em" class="fa-solid fa-user-pen"></i></p>
	        </a>
	        <a href="<?php echo RUTA_GESTOR_RUTINA_EJERCICIOS; ?>" class="col-6 col-md-4 tooltipped" data-position="top" data-tooltip="Subir rutina de ejercicios" style="padding:.5em">
	            <p style="background-color: #A60303;color: white;"><i style="padding:.5em" class="fa-solid fa-dumbbell"></i></p>
	        </a>
	        <a href="<?php echo RUTA_GESTOR_GUIA_ALIMENTACION; ?>" class="col-6 col-md-4 tooltipped" data-position="top" data-tooltip="Subir guía de alimentación" style="padding:.5em">
	            <p style="background-color: #A60303;color: white;"><i style="padding:.5em" class="fa-solid fa-carrot"></i></p>
	        </a>
	        <a href="<?php echo RUTA_GESTOR_GUIA_SUPLEMENTACION; ?>" class="col-6 col-md-4 tooltipped" data-position="top" data-tooltip="Subir guía de suplementación" style="padding:.5em">
	            <p style="background-color: #A60303;color: white;"><i style="padding:.5em" class="fa-solid fa-bolt"></i></p>
	        </a>
	        <a href="<?php echo RUTA_GESTOR_ENTRADAS_BLOG; ?>" class="col-6 col-md-4 tooltipped" data-position="top" data-tooltip="Gestionar blog" style="padding:.5em">
	            <p style="background-color: #A60303;color: white;"><i style="padding:.5em" class="fa-solid fa-pen-to-square"></i></p>
	        </a>
	        <a href="<?php echo RUTA_GESTOR_ENTRADAS_ENTRENAMIENTO; ?>" class="col-6 col-md-4 tooltipped" data-position="top" data-tooltip="Gestionar ejercicios" style="padding:.5em">
	            <p style="background-color: #A60303;color: white;"><i style="padding:.5em" class="fa-solid fa-video"></i></p>
	        </a>
	        <a href="<?php echo RUTA_GESTOR_ENTRADAS_TIENDA;?>" class="col-6 col-md-4 tooltipped" data-position="top" data-tooltip="Gestionar tienda" style="padding:.5em">
	            <p style="background-color: #A60303;color: white;"><i style="padding:.5em" class="fa-solid fa-tag"></i></p>
	        </a>
	        <a href="<?php echo RUTA_GESTOR_USUARIOS; ?>" class="col-6 col-md-4 tooltipped" data-position="top" data-tooltip="Gestionar usuarios" style="padding:.5em">
	            <p style="background-color: #A60303;color: white;"><i style="padding:.5em" class="fa-solid fa-users"></i></p>
	        </a>
	    </div>
   	 	<div class="d-none d-sm-block col-md-1"></div>
	    <div class="col-12 col-md-5">
   	 		<div class="col-12"><br></div>	    	
	        <?php include_once 'seccion/admin/perfil/datos.inc.php';?>
	    </div>
	</div>

</div>


<?php //cuerpo 
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>
