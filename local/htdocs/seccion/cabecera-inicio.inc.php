<!DOCTYPE html>
<html lang="es">
	<head>
        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>
		<meta charset="UTF-8">
		<meta name="theme-color" content="#A60303">
		<meta name="viewport" content="width=device-width, user-scalable=no, inicial-scale=1.0, maximun-scale=1.0, Mminimun-scale=1.0">
		<script src="https://kit.fontawesome.com/b7d9edf076.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="<?php echo RUTA_IMG; ?>logo/png/icono.png" type="imagen/x-icon" rel="ahortcut icon" />
		<meta name="distribution" content="global" />


		<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>fuentes.css">
		<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>materialize.php">
        <link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>bootstrap.css">
        <link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>estilos.php">
        <link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>menu.php">
        <link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>aparecer.css">


		
		<?php
		/*
		include_once 'app/usuario/ControlSesion.inc.php';
		include_once 'app/empleado/ControlSesion.inc.php';
		*/
		// el titulo se convirtio en una variable, por lo tanto, cada pagina puede tener su propio titulo
		if(!isset($titulo) || empty($titulo)){
			$titulo = $nombreEmpresa;
		}
		echo "<title>$titulo</title>" . PHP_EOL;

		// la descripcion de la Pagina se convirtio en una variable, por lo tanto, cada pagina puede tener su propia descripcion
		if(!isset($descripcionPagina) || empty($descripcionPagina)){
			$descripcionPagina = ' ' . PHP_EOL;
		}
		echo '<meta name="Description" content="'.$descripcionPagina .'"/>' . PHP_EOL;

		/* la imagen de la Pagina se convirtio en una variable, por lo tanto, cada pagina puede tener su propia imagen
		if(!isset($imagenCompartida) || empty($imagenCompartida)){
			$imagenCompartida = '<meta itemprop="image" content="'. RUTA_IMG .'nosotros/logo-2.jpg">' . PHP_EOL;
		}
		echo '<meta itemprop="image" content="'. RUTA_IMG .'nosotros/logo-2.jpg">' . PHP_EOL;*/


		// la propiedad position de la navbar le permite ser fixed o absolute dependiendo de la pestaña, 
		// $navbar es una variable, por lo tanto, cada pagina puede tener su propia caracteristica
		if(!isset($navbar) || empty($navbar)){
			$navbar = "position: fixed;";
		}
