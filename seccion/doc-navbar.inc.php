<?php

if(ControlSesion :: sesion_iniciada() && ControlSesionAdmin :: sesion_iniciada()) {//con inicio de sesion de usuario y admin

	//moviles 
	//barra de navegación superior e icono menu ?>
	<div class="barra-navegacion-m row d-block d-sm-none" style="background-color: white;<?php echo $navbar;?>">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-8">
				<img loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal.webp">
			</div>
			<div class="col-1"></div>
			<div class="col-2 barras">
				<div class="contenedor-menu">
					<div class="menu-burger"></div>
				</div>
			</div>
		</div>
	</div>

	<?php
	//barra de navegación lateral izquierda ?>
	<div class="transparente"></div>
	<div class="menu row">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<img loading="lazy" itemprop="image" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp" class="imagen">
			</div>
		</div>
		<div class="row">
			<br><br>
		</div>
		<a class="waves-effect waves-light" href="<?php echo RUTA_PERFIL_ADMIN;?>">
			<div>
				Administración
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_INICIO_USUARIO;?>">
			<div>
				Feed de usuario
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_LOGOUT;?>">
			<div>
				Cerrar sesión
			</div>
		</a>
		<div class="social-m" align="center">
		<p>SOCIAL</p>
			<?php include 'seccion/social.inc.php'; ?>
		</div>
	</div>
	<?php //moviles ?>



	<?php
	//pc
	//barra de navegación superior e icono menu ?>
	<div class="barra-navegacion-pc row d-none d-sm-block" style="background-color: white;<?php echo $navbar;?>">
		<div class="row">
			<div class="col-4 barras">
				<div class="contenedor-menu-pc">
					<div class="menu-burger-pc"></div>
				</div>
			</div>
			<div class="col-4" align="center">
				<img  loading="lazy" itemprop="image" class="logo" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/icon.webp">
			</div>
			<div class="col-4" align="right">
				<a href="<?php echo RUTA_LOGOUT;?>">
					<i style="padding: .4em 1em; font-size: 2em;" class="black-text fa-solid fa-arrow-right-to-bracket tooltipped" data-position="bottom" data-tooltip="Salir"></i>
				</a>
			</div>		
		</div>
	</div>

	<?php
	//barra de navegación lateral izquierda ?>
	<div class="transparente"></div>
	<div class="menu-pc row">
		<a class="waves-effect waves-light" href="<?php echo RUTA_PERFIL_ADMIN;?>">
			<div>
				Administración
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_INICIO_USUARIO;?>">
			<div>
				Feed de usuario
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_PERFIL;?>">
			<div>
				Perfil de usuario
			</div>
		</a>
		<div class="row">
			<br>
		</div>
		<div class="social-pc" align="center">
		<p>SOCIAL</p>
			<?php include 'seccion/social.inc.php'; ?>
		</div>
	</div>

	

<?php

}elseif(ControlSesionAdmin :: sesion_iniciada()&&!ControlSesion :: sesion_iniciada()) {//con inicio de sesion de admin

	//moviles 
	//barra de navegación superior e icono menu ?>
	<div class="barra-navegacion-m row d-block d-sm-none" style="background-color: white;<?php echo $navbar;?>">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-8">
				<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal.webp">
			</div>
			<div class="col-1"></div>
			<div class="col-2 barras">
				<div class="contenedor-menu">
					<div class="menu-burger"></div>
				</div>
			</div>
		</div>
	</div>

	<?php
	//barra de navegación lateral izquierda ?>
	<div class="transparente"></div>
	<div class="menu row">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<img loading="lazy" itemprop="image" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp" class="imagen">
			</div>
		</div>
		<div class="row">
			<br><br>
		</div>
		<a class="waves-effect waves-light" href="<?php echo RUTA_PERFIL_ADMIN;?>">
			<div>
				Administración
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_LOGIN;?>">
			<div>
				Iniciar sesión de usuario
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_LOGOUT;?>">
			<div>
				Cerrar sesión
			</div>
		</a>
		<div class="social-m" align="center">
		<p>SOCIAL</p>
			<?php include 'seccion/social.inc.php'; ?>
		</div>
	</div>
	<?php //moviles ?>



	<?php
	//pc
	//barra de navegación superior e icono menu ?>
	<div class="barra-navegacion-pc row d-none d-sm-block" style="background-color: white;<?php echo $navbar;?>">
		<div class="row">
			<div class="col-4 barras">
				<div class="contenedor-menu-pc">
					<div class="menu-burger-pc"></div>
				</div>
			</div>
			<div class="col-4" align="center">
				<img  loading="lazy" itemprop="image" class="logo" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/icon.webp">
			</div>
			<div class="col-4" align="right">
				<a href="<?php echo RUTA_LOGOUT;?>">
					<i style="padding: .4em 1em; font-size: 2em;" class="black-text fa-solid fa-arrow-right-to-bracket tooltipped" data-position="bottom" data-tooltip="Salir"></i>
				</a>
			</div>	
		</div>
	</div>

	<?php
	//barra de navegación lateral izquierda ?>
	<div class="transparente"></div>
	<div class="menu-pc row">
		<a class="waves-effect waves-light" href="<?php echo RUTA_PERFIL_ADMIN;?>">
			<div>
				Administración
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_LOGIN;?>">
			<div>
				Iniciar sesión de usuario
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_PERFIL;?>">
			<div>
				Perfil de usuario
			</div>
		</a>
		<div class="row">
			<br>
		</div>
		<div class="social-pc" align="center">
		<p>SOCIAL</p>
			<?php include 'seccion/social.inc.php'; ?>
		</div>
	</div>
	

<?php

}elseif(ControlSesion :: sesion_iniciada()&&!ControlSesionAdmin :: sesion_iniciada()) {//con inicio de sesion de usuario

	//moviles 
	//barra de navegación superior e icono menu ?>
	<div class="barra-navegacion-m row d-block d-sm-none" style="background-color: white;<?php echo $navbar;?>">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-8">
				<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal.webp">
			</div>
			<div class="col-1"></div>
			<div class="col-2 barras">
				<div class="contenedor-menu">
					<div class="menu-burger"></div>
				</div>
			</div>
		</div>
	</div>

	<?php
	//barra de navegación lateral izquierda ?>
	<div class="transparente"></div>
	<div class="menu row">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<img loading="lazy" itemprop="image" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp" class="imagen">
			</div>
		</div>
		<div class="row">
			<br><br>
		</div>
		<a class="waves-effect waves-light" href="<?php echo RUTA_INICIO_USUARIO;?>">
			<div>
				Inicio
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_BLOG;?>">
			<div>
				Newsletter
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_ENTRENAR;?>">
			<div>
				Guías de ejercicio
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_TIENDA;?>">
			<div>
				Tienda
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_LOGOUT;?>">
			<div>
				Cerrar sesión
			</div>
		</a>
		<div class="social-m" align="center">
		<p class="mayusculas">Contacto</p>
			<?php include 'seccion/social.inc.php'; ?>
		</div>
	</div>
	<?php //moviles ?>



	<?php
	//pc
	//barra de navegación superior e icono menu ?>
	<div class="barra-navegacion-pc row d-none d-sm-block" style="background-color: white;<?php echo $navbar;?>">
		<div class="row">
			<div class="col-4 barras">
				<div class="contenedor-menu-pc">
					<div class="menu-burger-pc"></div>
				</div>
			</div>
			<div class="col-4" align="center">
				<img  loading="lazy" itemprop="image" class="logo" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/icon.webp">
			</div>
			<div class="col-4" align="right">
				<a href="<?php echo RUTA_LOGOUT;?>">
					<i style="padding: .4em 1em; font-size: 2em;" class="black-text fa-solid fa-arrow-right-to-bracket tooltipped" data-position="bottom" data-tooltip="Salir"></i>
				</a>
			</div>		
		</div>
	</div>

	<?php
	//barra de navegación lateral izquierda ?>
	<div class="transparente"></div>
	<div class="menu-pc row">
		<a class="waves-effect waves-light" href="<?php echo RUTA_INICIO_USUARIO;?>">
			<div>
				Inicio
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_BLOG;?>">
			<div>
				Newsletter
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_ENTRENAR;?>">
			<div>
				Guías de ejercicios
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_TIENDA;?>">
			<div>
				Tienda
			</div>
		</a>
		<div class="row">
			<br>
		</div>
		<div class="social-pc" align="center">
		<p>SOCIAL</p>
			<?php include 'seccion/social.inc.php'; ?>
		</div>
	</div>

	

<?php

}else{//sin inicio de sesion

	//moviles 
	//barra de navegación superior e icono menu ?>
	<div class="barra-navegacion-m row d-block d-sm-none" style="background-color: white;<?php echo $navbar;?>">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-8">
				<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal.webp">
			</div>
			<div class="col-1"></div>
			<div class="col-2 barras">
				<div class="contenedor-menu">
					<div class="menu-burger"></div>
				</div>
			</div>
		</div>
	</div>

	<?php
	//barra de navegación lateral izquierda ?>
	<div class="transparente"></div>
	<div class="menu row">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<img loading="lazy" itemprop="image" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp" class="imagen">
			</div>
		</div>
		<div class="row">
			<br><br>
		</div>
		<a class="waves-effect waves-light" href="<?php echo SERVIDOR;?>">
			<div>
				Inicio
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_BIOGRAFIA;?>">
			<div>
				Haroldtcoach
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_ASESORIA_COLOMBIA;?>">
			<div>
				Planes
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_BLOG;?>">
			<div>
				Newsletter
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_TIENDA;?>">
			<div>
				Tienda Online
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_LOGIN;?>">
			<div>
				Iniciar sesión
			</div>
		</a>
		<div class="social-m" align="center">
		<p>SOCIAL</p>
			<?php include 'seccion/social.inc.php'; ?>
		</div>
	</div>
	<?php //moviles ?>



	<?php
	//pc
	//barra de navegación superior e icono menu ?>
	<div class="barra-navegacion-pc row d-none d-sm-block" style="background-color: white;<?php echo $navbar;?>">
		<div class="row">
			<div class="col-4 barras">
				<div class="contenedor-menu-pc">
					<div class="menu-burger-pc"></div>
				</div>
			</div>
			<div class="col-4" align="center">
				<img  loading="lazy" itemprop="image" class="logo" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/icon.webp">
			</div>

			<div class="col-4" align="right">
				<a href="<?php echo RUTA_LOGIN;?>">
					<i style="padding: .4em 1em; font-size: 2em;" class="black-text fa-regular fa-user"></i>
				</a>
			</div>		
		</div>
	</div>

	<?php
	//barra de navegación lateral izquierda ?>
	<div class="transparente"></div>
	<div class="menu-pc row">
		<a class="waves-effect waves-light" href="<?php echo SERVIDOR;?>">
			<div>
				Inicio
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_BIOGRAFIA;?>">
			<div>
				Haroldtcoach
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_ASESORIA_COLOMBIA;?>">
			<div>
				Planes
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_BLOG;?>">
			<div>
				Newsletter
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_TIENDA;?>">
			<div>
				Tienda Online
			</div>
		</a>
		<div class="row">
			<br>
		</div>
		<div class="social-pc" align="center">
		<p>SOCIAL</p>
			<?php include 'seccion/social.inc.php'; ?>
		</div>
	</div>

<?php
}

  






  