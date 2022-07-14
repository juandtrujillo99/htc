<div class="row section">
    <?php //portada?>
    <div class="col-12 col-md-6 valign-wrapper" style="background-color: #000; color: white;margin-top: 4em;">
        <div class="row">
        	<div class="col-1 col-md-2"></div>
        	<div class="col-10 col-md-8">
	        	<p class="textoBlack textoTitulo1">PLAN DE EJERCICIOS</p>
	        	<p class="textoBookBold textoParrafo1">Para: <?php echo $usuario -> obtener_nombre(); ?></p>
	        	<br><br>
	        	<p class="textoBook textoParrafo1 mayusculas">
	        		Esta Rutina es elaborada según los objetivos específicos: 
	        		<font class="textoBookBold"><?php echo $usuario -> obtener_objetivo(); ?></font>.</p>
	        	<br>
	        	<p class="textoParrafo1">Puede tener variaciones en el orden de la rutina y los pesos, esto dependerá de la adaptación corporal.</p>
	        	<br><br>
	        	<a href="#recomendaciones" class="textoBold btn btn-principal-animado">Comenzar</a>
	        </div>
	    </div>
    </div>
    <div class="col-md-6 center-align valign-wrapper">
    	<div class="col"><img src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp" class="imagen-2"></div> 	
    </div>
</div>
