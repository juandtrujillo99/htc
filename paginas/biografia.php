<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

/*
Conexion :: abrir_conexion();
include_once 'app/entrada/EscritorEntradas.inc.php';*/



$titulo = "Acerca de ".$nombreEmpresa;
$descripcionPagina = $descripcionNegocio;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/instructor-harold2.webp";



include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>video-js.php">
<script async='async' src="<?php echo RUTA_JS; ?>video.js"></script>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>video.php">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>



<?php //body ?>

<div class="container-fluid">
		<?php
		include_once 'seccion/haroldtcoach/previas.inc.php';
		include_once 'seccion/haroldtcoach/demo-guias-ejercicio.inc.php';
		include_once 'seccion/haroldtcoach/biografia.inc.php';
		include_once 'seccion/footer.inc.php';
		include_once 'seccion/copyright.inc.php';
		?>
</div>

<?php //body ?>


<script>
	var reproductor = videojs('fm-video', {
		fluid: true
	});
</script>
<?php

include_once 'seccion/doc-terminacion.inc.php';

?>