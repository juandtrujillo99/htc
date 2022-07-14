<?php //enlaces hacia formulario de inscripcion
$basicPlan=RUTA_FORMULARIO_BASIC_RDM;
$standardPlan=RUTA_FORMULARIO_STANDARD_RDM;
$advancedPlan=RUTA_FORMULARIO_ADVANCED_RDM;
$proPlan=RUTA_FORMULARIO_PRO_RDM;
?>


<div class="row">
  <img style="margin-top: 4em;margin-bottom:.5em;" src="<?php echo RUTA_IMG;?>fondo/plan3.png" class="imagen">
  <div class="col-12">
    <ul class="tabs textoBlack black-text tabs-fixed-width tab-demo">
      <li class="tab"><a href="#basic">BASIC</a></li>
      <li class="tab"><a href="#standard">STANDARD</a></li>
      <li class="tab"><a href="#advanced">ADVANCED</a></li>
      <li class="tab"><a href="#pro">PRO</a></li>
    </ul>
    <div id="basic" class="col-12 planBg">
      <?php $planName="basic"; $cantidad="29.99"; $total="59.99"; ?>
      <div align="center" class="titlePlan">
        <p class="textoBlack white-text textoTitulo1"><?php echo $planName; ?> training</p>
        <p class="textoBold textoSubtitulo1 textoColorMarca1a">Plan</p>
      </div>      
      <div class="pricePlan">
        <?php include 'planPriceUs.inc.php';?>
      </div>  
      <?php include 'planDescription1.inc.php'; ?>
      <div class="buyPlan">
        <div class="row">
            <div class="col-1"></div>
            <div class="anime-1 col-10">
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
      <div align="center" class="titlePlan">
        <p class="textoBlack white-text textoTitulo1"><?php echo $planName; ?> training</p>
        <p class="textoBold textoSubtitulo1 textoColorMarca1a">Plan</p>
      </div>
      <div class="pricePlan">
        <?php include 'planPriceUs.inc.php';?>
      </div>  
      <?php include 'planDescription2.inc.php'; ?>
      <div class="buyPlan">
        <div class="row">
            <div class="col-1"></div>
            <div class="anime-1 col-10">
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
      <div align="center" class="titlePlan">
        <p class="textoBlack white-text textoTitulo1"><?php echo $planName; ?> training</p>
        <p class="textoBold textoSubtitulo1 textoColorMarca1a">Plan</p>
      </div>
      <div class="pricePlan">
        <?php include 'planPriceUs.inc.php';?>
      </div>  
      <?php include 'planDescription3.inc.php'; ?>
      <div class="buyPlan">
        <div class="row">
            <div class="col-1"></div>
            <div class="anime-1 col-10">
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
        <?php include 'planPriceUs.inc.php';?>
      </div>  
      <?php include 'planDescription4.inc.php'; ?>
      <div class="buyPlan <?php echo $agotado; ?>">
        <div class="row">
            <div class="col-1"></div>
            <div class="anime-1 col-10">
              <div align="center">
                <a class="btn btn-secundario-animado" href="<?php echo $proPlan; ?>"><p class="textoBold">Comprar</p></a>
              </div>
              <br>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php 
include_once 'generalExplication.inc.php'; 
?>

