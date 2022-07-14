
  <div class="col-12 row">
    <div class="col-1"></div>  
    <div align="center" class="col-2" style="margin-top: .8em;">
      <!-- Dropdown Trigger -->
      <a class='dropdown-trigger btn-floating white btn-large pulse' href='#' data-target='drop<?php echo $planName; ?>'><img src="<?php echo RUTA_IMG;?>bandera/us.png" class="imagen-2"></a>
      <!-- Dropdown Structure -->
      <ul id='drop<?php echo $planName; ?>' class='dropdown-content'>
        <li><a href="<?php echo RUTA_ASESORIA_RDM."#". $planName; ?>"><img src="<?php echo RUTA_IMG;?>bandera/us.png" class="imagen-2"> USD</a></li>
        <li><a href="<?php echo RUTA_ASESORIA_SPAIN."#". $planName; ?>"><img src="<?php echo RUTA_IMG;?>bandera/eu.png" class="imagen-2"> EUR</a></li>
        <li><a href="<?php echo RUTA_ASESORIA_COLOMBIA."#". $planName; ?>"><img src="<?php echo RUTA_IMG;?>bandera/co.png" class="imagen-2"> COP</a></li>
      </ul>
    </div>
    <p align="center" class="col-7 textoBlack textoTitulo1">$<?php echo nl2br(number_format($cantidad,2)); ?></p>
    <p class="col-2 textoColorMarca" style="margin-top: 2em;">/<font class="textoBold">Mes</font></p>
    <?php
    $porcentaje = round($cantidad/$total*100);         
    if ($porcentaje<=100){  
    ?>
    <div class="col-2"></div>
    <div class="col-8">
      <p align="center"><b>Dólares americanos</b></p>
      <p align="center" class="discountPlan"><b><?php echo $porcentaje-100 ."% OFF"; ?></b></p>
    </div>
    <div class="col-2"></div>       
    <?php
    }
    ?>
    <p align="center" class="col-12 grey-text textoParrafo lastPricePlan">$<?php echo nl2br(number_format($total,2)); ?></p>       
    <div class="col-1"></div>        
  </div>