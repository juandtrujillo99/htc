<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/admin/RepositorioAdmin.inc.php';
include_once 'app/admin/ControlSesionAdmin.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';



if (ControlSesionAdmin::sesion_iniciada()) {
    Redireccion :: redirigir(RUTA_PERFIL_ADMIN);
}
elseif (ControlSesion::sesion_iniciada()) {
    Redireccion :: redirigir(RUTA_INICIO_USUARIO);
}


$titulo = "Inicio ".$nombreEmpresa;
$descripcionPagina = $descripcionNegocio;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/portada-inicio-haroldtcoach.webp";


include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>



<?php //body ?>

<div class="container-fluid">
		<?php
		include_once 'seccion/inicio/portada.inc.php';
		include_once 'seccion/inicio/objetivos.inc.php';
		include_once 'seccion/inicio/faq.inc.php';
		include_once 'seccion/footer.inc.php';
		include_once 'seccion/copyright.inc.php';
		include_once 'seccion/modales.inc.php';
		?>	
</div>

<?php //body ?>



<?php
include_once 'seccion/doc-terminacion.inc.php';
?>