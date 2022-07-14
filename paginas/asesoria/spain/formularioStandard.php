<?php

include_once 'app/config.inc.php';

include_once 'app/Conexion.inc.php';

/*
include_once 'app/usuario/RepositorioUsuario.inc.php';



		Conexion :: abrir_conexion();



include_once 'app/entrada/EscritorEntradas.inc.php';*/



$titulo = "Formulario Standard Europa ".$nombreEmpresa;


include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';

$formularioGoogle="https://docs.google.com/forms/d/e/1FAIpQLSfLDtQeMX0c2XXFgqku4W8AfB5Mmqzj0HaHiHezIfOb45gXwQ/viewform?embedded=true";
$paymentMethod= $consultarInscripcion."?text=Hola%2C%20deseo%20pagar%20el%20Standard%20Training%20Plan";

?>

<div class="container-fluid">	
	<?php
	include_once 'seccion/asesoria/formulario.inc.php';
	include_once 'seccion/copyright.inc.php';
	?>
</div>

<?php //body ?>



<?php

include_once 'seccion/doc-terminacion.inc.php';

?>