<?php
header($_SERVER['SERVER_PROTOCOL'] . "404 Not Found", true, 404);

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
/*
include_once 'app/usuario/Usuario.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
*/
$titulo = "Página no encontrada";

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container section center-align valign-wrapper" align="center">
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8">
			<p class="textoBlack textoTitulo1">
				Esta página no existe
			</p>
			<p class="textoBookBold textoParrafo">
				o no se encuentra disponible
			</p>
			<br><br>
			<p class="textoBook textoParrafo">
				Parece que no encontraste lo que buscabas, mientras tanto, ¿Quieres saber 7 consejos para aplanar tu abdomen?
			</p>
			<br><br>
			<a class="btn btn-secundario-animado" href="<?php echo SERVIDOR; ?>">Sí, quiero saber</a>
		</div>
	</div>
</div>


<?php
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
