<?php

include_once 'app/config.inc.php';

include_once 'app/Conexion.inc.php';

/*
include_once 'app/usuario/RepositorioUsuario.inc.php';



		Conexion :: abrir_conexion();



include_once 'app/entrada/EscritorEntradas.inc.php';*/



$titulo = $nombreEmpresa;


include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';

$formularioGoogle="https://docs.google.com/forms/d/e/1FAIpQLScqVhZDxChi3yUcRpzARWwF2Awjpc_cn6klvRtIIgO71YnyeQ/viewform?embedded=true";
$paymentMethod="";

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