<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

/*
include_once 'app/usuario/RepositorioUsuario.inc.php';
        Conexion :: abrir_conexion();
include_once 'app/entrada/EscritorEntradas.inc.php';*/

$titulo = "Asesoria ".$nombreEmpresa;

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
?>


<?php //body ?>

<div class="container-fluid" style="background-color: #000;">    

    <?php //inicio ?>
    <div class="row">
        <div align="center">
            <br><br>
            <img src="<?php echo RUTA_IMG;?>fondo/instructor-harold.png" class="imagen-3">
            <div style="background-color:white;">
                <a href="<?php echo SERVIDOR;?>">
                    <img src="<?php echo RUTA_IMG;?>logo/png/horizontal.png" style="width: 65%;padding: 1em 0;">                
                </a>
            </div>
            <br><br><br>
            <a class="anime-1 btn btn-secundario  modal-trigger" style="width: 90%;" href="<?php echo RUTA_ASESORIA_COLOMBIA;?>"><p class="textoBlack" style="padding: 1em 0.5em;">Asesoría personalizada Colombia</p></a>
            <br><br>
            <a class="anime-1 btn btn-secundario  modal-trigger" style="width: 90%;" href="<?php echo RUTA_ASESORIA_SPAIN;?>"><p class="textoBlack" style="padding: 1em 0.5em;">Asesoría personalizada España</p></a>
            <br><br>
            <a class="anime-1 btn btn-secundario  modal-trigger" style="width: 90%;" href="<?php echo RUTA_ASESORIA_RDM;?>"><p class="textoBlack" style="padding: 1em 0.5em;">Asesoría personalizada Resto del mundo</p></a>
        </div>
        <div id="contacto" class="row social2-m" align="center">
            <div class="col-12">
                <br><br>
                <p>&#64;<font class="textoBold textoParrafo1">haroldtcoach</font></p>
                <?php include_once 'seccion/social.inc.php'; ?>
                <br><br>
            </div>
        </div>

    </div>
    <?php //inicio ?>

</div>

<?php //body ?>



<?php

include_once 'seccion/doc-terminacion.inc.php';

?>