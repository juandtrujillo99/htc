<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';

include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/admin/ControlSesionAdmin.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/tienda/EscritorEntradas.inc.php';

if(!ControlSesion::sesion_iniciada() && !ControlSesionAdmin::sesion_iniciada()) {
    Conexion :: abrir_conexion();
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


$titulo = "Tienda Online ".$nombreEmpresa;



include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>



<?php //body ?>

<div class="container">

	<?php //previas ?>
	<div class="row" style="padding: 4em 0 2.5em 0;" align="center">
	    <div class="col-1 col-md-4"></div>
	    <div class="col-10 col-md-4">
	        <br><br>     
	        <p class="textoBlack textoTitulo1" style="font-size: 3em;">Tienda online</p>       
	    </div>    
	    <div class="col-1 col-md-4"></div>	        
	    <div class="col-1"></div>
        <div class="col-10">
        	<br>
            <p class="textoBookBold textoParrafo">
            	En esta sección encontrarás los productos que recomiendo para ayudarte a potenciar tu rendimiento.
            </p>
        </div>  
        <div class="col-1"></div>
        <div class="col-1 col-md-3"></div>
        <div class="col-9 col-md-6">
        	<br><br>
            <form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
				<div class="input-field">
					<i class="material-icons prefix">search</i>
					<input type="text" id="autocomplete-input" name="termino-buscar-tienda" required class="autocomplete">
					<label for="autocomplete-input">¿Buscas un producto específico?</label>					
					<input type="hidden" name="buscar-tienda">
				</div>
            </form>	
        </div> 
	</div>
	<div class="col-12 row">
		<?php EscritorEntradasTienda::escribir_entradas(); ?>
	</div>
</div>

<?php //body ?>

<?php
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>