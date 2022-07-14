<?php

include_once 'app/config.inc.php';

include_once 'app/Conexion.inc.php';

/*
include_once 'app/usuario/RepositorioUsuario.inc.php';



		Conexion :: abrir_conexion();



include_once 'app/entrada/EscritorEntradas.inc.php';*/



$titulo = "Reto 90 Días ".$nombreEmpresa;
$descripcionPagina = "Demuestra que eres capaz de alcanzar tus objetivos";


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
		include_once 'seccion/reto/portada.inc.php';
		include_once 'seccion/reto/que-es.inc.php';
		include_once 'seccion/reto/general-explication.inc.php';
		include_once 'seccion/reto/fechas.inc.php';
		include_once 'seccion/reto/pagos.inc.php';
		include_once 'seccion/reto/beneficios.inc.php';
		include_once 'seccion/footer.inc.php';
		include_once 'seccion/copyright.inc.php';

		?>
</div>

<?php include_once 'seccion/doc-terminacion.inc.php';?>