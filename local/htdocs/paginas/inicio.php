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