<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/admin/ControlSesionAdmin.inc.php';

include_once 'app/usuario/Usuario.inc.php';
include_once 'app/admin/Admin.inc.php';
include_once 'app/entrenamiento/Entrada.inc.php';
include_once 'app/entrenamiento/Comentario.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/entrenamiento/RepositorioEntrada.inc.php';
include_once 'app/entrenamiento/RepositorioComentario.inc.php';


if(!ControlSesion::sesion_iniciada() && !ControlSesionAdmin::sesion_iniciada()) {
    Redireccion :: redirigir(RUTA_LOGIN);
} else {

    if (ControlSesionAdmin::sesion_iniciada()) {
        Conexion :: abrir_conexion();
        $id = $_SESSION['id_admin'];
        $admin = RepositorioAdmin :: obtener_admin_por_id(Conexion::obtener_conexion(), $id);
    }
    elseif (ControlSesion::sesion_iniciada()) {
        Conexion :: abrir_conexion();
        $id = $_SESSION['id_usuario'];
        $usuario = RepositorioUsuario :: obtener_usuario_por_id(Conexion::obtener_conexion(), $id);
    }
}



$titulo = $entrada -> obtener_titulo();
$url = RUTA_ENTRADA_ENTRENAMIENTO . '/' .$entrada -> obtener_url();

include_once 'seccion/cabecera-inicio.inc.php';
?>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=625b4e8e85d62e001964c39a&product=sop' async='async'></script>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<link rel="canonical" href="<?php echo $url; ?>">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';

//entrada.php es el archivo encargado de crear las entradas, es una plantilla
?>

<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 entrada" style="padding: 6em 0 1.5em 0;">           
            <h1 class="textoBlack"><?php echo $entrada -> obtener_titulo(); ?></h1>
            <div class="textoBookBold chip"><?php echo $entrada -> obtener_etiqueta(); ?></div>
            <?php if ((($entrada -> obtener_url_externa()) == "")) {
                ?><br><br><?php
            }else{
                ?><br><br>
                <div class="video-container">
                    <?php echo $entrada -> obtener_url_externa(); ?>
                </div>
                <br><br><?php
            }
            ?>     
            <p><?php echo nl2br($entrada -> obtener_texto()); ?></p>      
            <br><br>
            <div class="sharethis-inline-share-buttons"></div>
            <br><br>
            <script async src="https://comments.app/js/widget.js?3" data-comments-app-website="-69nWccB" data-limit="5" data-color="000"></script>
            <br><br>
            <?php
            	include_once 'seccion/entrenamiento/entradas_al_azar.inc.php';
            ?>
        </div>
    </div>
</div>

<?php
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
