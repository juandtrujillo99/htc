<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';

include_once 'app/usuario/Usuario.inc.php';
include_once 'app/admin/Admin.inc.php';
include_once 'app/tienda/Entrada.inc.php';
include_once 'app/tienda/Comentario.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/tienda/RepositorioEntrada.inc.php';
include_once 'app/tienda/RepositorioComentario.inc.php';



$titulo = $entrada -> obtener_titulo();
$url = RUTA_ENTRADA_TIENDA . '/' .$entrada -> obtener_url();
$descripcionPagina = $descripcionNegocio;
$imagenCompartida = RUTA_TIENDA_COVER.$entrada -> obtener_imagen();

include_once 'seccion/cabecera-inicio.inc.php';
?>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=625b4e8e85d62e001964c39a&product=sop' async='async'></script>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<link rel="canonical" href="<?php echo $url; ?>">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
?>
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
<?php
include_once 'seccion/doc-navbar.inc.php';

//entrada.php es el archivo encargado de crear las entradas, es una plantilla
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 row entrada" style="padding: 6em 0 1.5em 0;">  
            <div class="col-md-6 col-12">
                <a class="col modal-trigger textoColorMarca" href="#mostrarDetalle">
                    <img loading="lazy" itemprop="image" src="<?php echo RUTA_TIENDA_COVER.$entrada -> obtener_imagen(); ?>" class="imagen" alt="<?php echo $entrada -> obtener_titulo(); ?>" >
                </a>
            </div>
            <div class="col-1 d-none d-sm-block"></div>
            <div class="col-md-5 col-12">
                <br><br>
                <h1 class="textoBlack"><?php echo $entrada -> obtener_titulo(); ?></h1>
                <div class="textoBookBold chip"><?php echo $entrada -> obtener_etiqueta(); ?></div>
                <br><br>
                <div class="textoParrafo"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></div>
                <br>
                <div class="textoBookBold textoSubtitulo" title="Pesos colombianos">$<?php echo $entrada -> obtener_precio(); ?> COP</div>  
                <br>
                <a class="btn btn-secundario-animado" href="<?php echo $whatsappCompra."%20".RUTA_ENTRADA_TIENDA."/".$entrada -> obtener_url(); ?>"><p>Comprar</p></a>
                <br><br>         
            </div>
            <div class="col-12">
                <hr><br>
                <p class="tienda">
                    <?php echo nl2br($entrada -> obtener_texto()); ?>
                </p>
                <br><br>
                <div class="sharethis-inline-share-buttons"></div>
                <br><br>
                <script async src="https://comments.app/js/widget.js?3" data-comments-app-website="-69nWccB" data-limit="5" data-color="000"></script>
                <br><br>
                <?php
                    include_once 'seccion/tienda/entradas_al_azar.inc.php';
                ?>
            </div>            
        </div>
        <div class="col-1"></div>
    </div>
</div>




<!-- Modal para cambio de nombre y apellido -->
<div id="mostrarDetalle" class="modal">
    <div class="modal-content">
        <div class="row col-12">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-12">
                <?php echo $entrada -> obtener_url_externa(); ?>                          
            </div>
            <div class="col-md-3"></div>
        </div>        
    </div>
</div>


<?php
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
