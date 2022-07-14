<?php

include_once 'app/config.inc.php';

include_once 'app/Conexion.inc.php';

/*
include_once 'app/usuario/RepositorioUsuario.inc.php';



		Conexion :: abrir_conexion();



include_once 'app/entrada/EscritorEntradas.inc.php';*/



$titulo = $nombreEmpresa;
$navbar = "position: absolute;";

// se agregara la clase .agotado a algunos planes y para ello se crea esta variable
if(!isset($agotado) || empty($agotado)){
	$agotado = "agotado";
}



include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>ribbon.php">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';

?>



<?php //body ?>

<div class="container-fluid">
		<?php

		include_once 'seccion/asesoria/rdm.inc.php';
		include_once 'seccion/copyright.inc.php';

		?>		


</div>

<?php //body ?>



<?php

include_once 'seccion/doc-terminacion.inc.php';

?>