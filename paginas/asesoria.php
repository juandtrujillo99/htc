<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';


$titulo = "Asesoría ".$nombreEmpresa;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/Email-marketing.webp";


include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
?>


<?php //body ?>

<div class="container-fluid" style="background-color: #000;">    

    <div class="row" align="center">
        <div class="col-2 col-md-5"></div>
        <div class="col-8 col-md-2">
            <div class="d-block d-sm-none"><br></div>            
            <br><br>
            <img itemprop="image" loading="lazy" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/instructor-harold.webp" class="imagen-2">
        </div>
        <div class="col-2 col-md-5"></div>


        <div class="col-12" style="background-color:white;width: 100%;">
            <div class="col-2 col-md-5"></div>
            <div class="col-8 col-md-2">
                <img itemprop="image" loading="lazy" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal.webp" class="imagen" style="padding: 1em 0;">                
            </div>
            <div class="col-2 col-md-5"></div>   
        </div> <?php ///bien?>

        <div class="d-none d-sm-block col-md-3"></div>
        <div class="anime-1 row col-12 col-md-6">
            <div class="col-12">
                <div class="d-block d-sm-none"><br><br></div>
                <br>
                <a class="btn btn-secundario  modal-trigger" style="width: 90%;" href="<?php echo RUTA_ASESORIA_COLOMBIA;?>"><p class="textoBookBold" style="padding: 1em 0.5em;" itemprop="name">Asesoría online</p></a>
            </div>
            <div class="col-12">
                <br>
                <a class="btn btn-secundario  modal-trigger" style="width: 90%;" href="<?php echo $whatsappEmpresa."?text=Hola%2C%20deseo%20obtener%20asesoría%20personalizada%20en%20Cali";?>"><p class="textoBookBold" style="padding: 1em 0.5em;" itemprop="name">Asesoría presencial</p></a>       

            </div>
            <div class="col-12">
                <br>
                <a class="btn btn-secundario  modal-trigger" style="width: 90%;" href="<?php echo RETO_90DIAS;?>"><p class="textoBookBold" style="padding: 1em 0.5em;" itemprop="name">Reto 90 días</p></a>
            </div> 
        </div> 
        <div class="d-none d-sm-block col-md-3"></div>     


        <div id="contacto" class="row social2-pc" align="center">
            <div class="col-12">
                <div class="d-block d-sm-none"><br><br></div>
                <p>&#64;<font class="textoBold textoParrafo1">haroldtcoach</font></p>
                <?php include 'seccion/social.inc.php'; ?>
                <div class="d-block d-sm-none"><br><br></div>
            </div>
        </div>
    </div>
</div>

<?php //body ?>


<?php

include_once 'seccion/doc-terminacion.inc.php';

?>