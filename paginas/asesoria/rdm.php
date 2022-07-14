<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

/*
include_once 'app/usuario/RepositorioUsuario.inc.php';

		Conexion :: abrir_conexion();

include_once 'app/entrada/EscritorEntradas.inc.php';*/


$titulo = "Planes ".$nombreEmpresa;
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

<div class="container">
		

		<?php //enlaces hacia formulario de inscripcion
		$basicPlan=RUTA_FORMULARIO_BASIC_RDM;
		$standardPlan=RUTA_FORMULARIO_STANDARD_RDM;
		$advancedPlan=RUTA_FORMULARIO_ADVANCED_RDM;
		$proPlan=RUTA_FORMULARIO_PRO_RDM;

		//Euro: planPriceEu.inc.php
		//COP: planPriceCo.inc.php
		//USD: planPriceUs.inc.php
		$divisa= "seccion/asesoria/planPriceUs.inc.php";
		?>



		<div class="row">
		  <div class="col-1 col-md-4"></div>
		  <div class="anime-1 col-10 col-md-4"> 
		      <div class="d-none d-sm-block" align="center">
		          <br><br><br><br>
		          <p class="textoBlack textoTitulo1" style="font-size: 3em;">planes de</p>
		          <p class="textoBold textoColorMarca textoSubtitulo1">De entrenamiento</p>
		      </div>
		      <br><br>                
		  </div>    
		  <div class="col-1 col-md-4"></div>


		  <div class="col-12 col-md-1"></div>
		  <div class="col-12 col-md-3 bg-image" style="background-image: url(<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/1.webp) ;">
		      <div class="row">
		          <div class="d-block d-sm-none" style="height: 30vh;"></div>
		      </div>
		  </div>
		  <div class="col-12 col-md-1"></div>

		  
		  <div class="col-12 col-md-6">
		    <ul class="tabs textoBlack black-text tabs-fixed-width tab-demo">
		      <li class="tab"><a href="#basic">BASIC</a></li>
		      <li class="tab"><a href="#standard">STANDARD</a></li>
		      <li class="tab"><a href="#advanced">ADVANCED</a></li>
		      <li class="tab"><a href="#pro">PRO</a></li>
		    </ul>
		    <div id="basic" class="col-12 planBg">
		      <?php $planName="basic"; $cantidad="29.99"; $total="59.99"; ?>
		      <div align="center" class="titlePlan">
		        <p class="textoBlack white-text textoTitulo1"><?php echo $planName;?> training</p>
		        <p class="textoBold textoSubtitulo1 textoColorMarca1a">Plan</p>
		      </div>      
		      <div class="pricePlan">
		        <?php include "$divisa";?>
		      </div>  
		      <?php include 'seccion/asesoria/planDescription1.inc.php'; ?>
		      <div class="buyPlan">
		        <div class="row">
		            <div class="col-1"></div>
		            <div class="col-10">
		              <div align="center">
		                <a class="btn btn-secundario-animado" href="<?php echo $basicPlan; ?>"><p class="textoBold">Comprar</p></a>
		              </div>
		              <br>
		            </div>
		        </div>
		      </div>
		    </div>
		    <div id="standard" class="col-12 planBg">
		      <?php $planName="standard"; $cantidad="49.99"; $total="110.95"; ?>
		      <div class="ribbon ribbon-top-right"><span>AGOTADO</span></div>
		      <div align="center" class="titlePlan <?php echo $agotado; ?>">
		        <p class="textoBlack white-text textoTitulo1"><?php echo $planName; ?> training</p>
		        <p class="textoBold textoSubtitulo1 textoColorMarca1a">Plan</p>
		      </div>
		      <div class="pricePlan <?php echo $agotado; ?>">
		        <?php include "$divisa";?>
		      </div>  
		      <?php include 'seccion/asesoria/planDescription2.inc.php'; ?>
		      <div class="buyPlan <?php echo $agotado; ?>">
		        <div class="row">
		            <div class="col-1"></div>
		            <div class="col-10">
		              <div align="center">
		                <a class="btn btn-secundario-animado" href="<?php echo $standardPlan; ?>"><p class="textoBold">Comprar</p></a>
		              </div>
		              <br>
		            </div>
		        </div>
		      </div>
		    </div>
		    <div id="advanced" class="col-12 planBg">
		      <?php $planName="advanced"; $cantidad="72.99"; $total="149.50"; ?>
		      <div class="ribbon ribbon-top-right"><span>AGOTADO</span></div>
		      <div align="center" class="titlePlan <?php echo $agotado; ?>">
		        <p class="textoBlack white-text textoTitulo1"><?php echo $planName; ?> training</p>
		        <p class="textoBold textoSubtitulo1 textoColorMarca1a">Plan</p>
		      </div>
		      <div class="pricePlan <?php echo $agotado; ?>">
		        <?php include "$divisa";?>
		      </div>  
		      <?php include 'seccion/asesoria/planDescription3.inc.php'; ?>
		      <div class="buyPlan <?php echo $agotado; ?>">
		        <div class="row">
		            <div class="col-1"></div>
		            <div class="col-10">
		              <div align="center">
		                <a class="btn btn-secundario-animado" href="<?php echo $advancedPlan; ?>"><p class="textoBold">Comprar</p></a>
		              </div>
		              <br>
		            </div>
		        </div>
		      </div>
		    </div>
		    <div id="pro" class="col-12 planBg">
		      <?php $planName="pro"; $cantidad="149.99"; $total="210.99"; ?>
		      <div class="ribbon ribbon-top-right"><span>AGOTADO</span></div>
		      <div align="center" class="titlePlan <?php echo $agotado; ?>">
		        <p class="textoBlack white-text textoTitulo1"><?php echo $planName; ?> training</p>
		        <p class="textoBold textoSubtitulo1 textoColorMarca1a">Plan</p>
		      </div>
		      <div class="pricePlan <?php echo $agotado; ?>">
		        <?php include "$divisa";?>
		      </div>  
		      <?php include 'seccion/asesoria/planDescription4.inc.php'; ?>
		      <div class="buyPlan <?php echo $agotado; ?>">
		        <div class="row">
		            <div class="col-1"></div>
		            <div class="col-10">
		              <div align="center">
		                <a class="btn btn-secundario-animado" href="<?php echo $proPlan; ?>"><p class="textoBold">Comprar</p></a>
		              </div>
		              <br>
		            </div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="col-12 col-md-1"></div>
		</div>


		<?php 
		include_once 'seccion/asesoria/generalExplication.inc.php'; 
		?>

	


</div>

<?php //body ?>



<?php

include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';

?>