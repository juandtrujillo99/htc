<?php
include_once 'info_empresa.inc.php';

//info de la base de datos
    define('NOMBRE_SERVIDOR', 'sql102.epizy.com'); //se deja así
    define('NOMBRE_USUARIO', 'epiz_24337561'); //nombre de usuario de la base de datos
    define('PASSWORD', 'tvZ5yuApBCv3o');
    define('NOMBRE_BD', 'epiz_24337561_dareads');//Nombre de la Base de datos


//Pestañas principales (basicas o  comunes) de la web
	/*
	Aqui debes poner todas las rutas que vayas a utilizar en la pagina
	por ejemplo:
	si queres podes crear una ruta tipo...
	define("RUTA_CONTACTO", SERVIDOR."/contacto.php");
	y en vez de agregarlo a alguna etiqueta <a href="contacto.php"></a>
	podes escribir <a href="<?php echo RUTA_CONTACTO ?>"></a>
	*/
	define("SERVIDOR", "http://juandtrujillo.cf");//carpeta raiz (la que contiene todos los archivos para el funcionamiento de la página)
	define("RUTA_ABOUT", SERVIDOR."/about");
	define("RUTA_OFFLINE", SERVIDOR."/servicio-offline");
	define("RUTA_ONLINE", SERVIDOR."/servicio-online");
	define("RUTA_ONLINE_DESARROLLO_WEB", SERVIDOR."/servicio-desarrollo-web");
	define("RUTA_ONLINE_GESTION_REDES", SERVIDOR."/servicio-gestion-redes");
	define("RUTA_ONLINE_SOCIAL_ADS", SERVIDOR."/servicio-pauta-digital");
	define("RUTA_ONLINE_DESCUENTO_ZRZ", SERVIDOR."/descuento-zaragoza");
	define("RUTA_PACKS", SERVIDOR."/paquetes");
	define("RUTA_STARTERPACK", SERVIDOR."/starter-pack");
	define("RUTA_PREMIUMPACK", SERVIDOR."/premium-pack");
	define("RUTA_MEGAPACK", SERVIDOR."/megapack");


	//recuperacion de contraseña para usuario
	define("RUTA_RECUPERAR_CLAVE", SERVIDOR."/recuperar-clave");
	define("RUTA_GENERAR_URL_SECRETA", SERVIDOR."/generar-url-secreta");
	define("RUTA_RECUPERACION_CLAVE", SERVIDOR."/recuperacion-clave");//contraseña para usuario



//recursos
	define("RUTA_DOCS_USUARIOS", SERVIDOR."/usuarios");
	define("RUTA_IMG", SERVIDOR."/img/");
	define("RUTA_CSS", SERVIDOR."/css/");
	define("RUTA_JS", SERVIDOR."/js/");
	define("DIRECTORIO_RAIZ", realpath(__DIR__."/.."));