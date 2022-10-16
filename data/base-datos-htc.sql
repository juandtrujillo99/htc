CREATE DATABASE htc

	DEFAULT CHARACTER SET utf8;



USE htc;



CREATE TABLE administradores (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(25) NOT NULL,
	email VARCHAR(255) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	fecha_registro DATETIME NOT NULL,
	activo TINYINT NOT NULL,
	PRIMARY KEY (id)
);



CREATE TABLE empleados (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	cedula INT NOT NULL UNIQUE,
	nombre VARCHAR(25) NOT NULL,
	bio VARCHAR(25),
	telefono VARCHAR(255) NOT NULL UNIQUE,
	email VARCHAR(255) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	fecha_registro DATETIME NOT NULL,
	activo TINYINT NOT NULL,
	PRIMARY KEY (id)
);



CREATE TABLE editar_datos_empleado(
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	empleado_id INT NOT NULL,
	url_secreta VARCHAR(255) NOT NULL,
	fecha DATETIME NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(empleado_id)
		REFERENCES empleados(id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT
);



CREATE TABLE recuperacion_clave_empleado(

	id INT NOT NULL UNIQUE AUTO_INCREMENT,

	empleado_id INT NOT NULL,

	url_secreta VARCHAR(255) NOT NULL,

	fecha DATETIME NOT NULL,

	PRIMARY KEY(id),

	FOREIGN KEY(empleado_id)

		REFERENCES empleados(id)

		ON UPDATE CASCADE

		ON DELETE RESTRICT

);

/* entrenamiento, rutinas de ejercicios */

CREATE TABLE entrenamiento(
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	autor_id INT NOT NULL,
	url VARCHAR(255) NOT NULL,
	imagen VARCHAR(255),
	url_externa VARCHAR(255) NOT NULL,
	titulo VARCHAR(255),
	texto TEXT CHARACTER SET utf8,
	etiqueta TEXT CHARACTER SET utf8,
	fecha DATETIME NOT NULL,
	activa TINYINT NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(autor_id)
		REFERENCES administradores(id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT	
)ENGINE=InnoDB AUTO_INCREMENT=1000;



/* blog */

CREATE TABLE blog(
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	autor_id INT NOT NULL,
	url VARCHAR(255) NOT NULL,
	imagen VARCHAR(255),
	url_externa VARCHAR(255) NOT NULL,
	titulo VARCHAR(255),
	texto TEXT CHARACTER SET utf8,
	etiqueta TEXT CHARACTER SET utf8,
	fecha DATETIME NOT NULL,
	activa TINYINT NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(autor_id)
		REFERENCES administradores(id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT	
)ENGINE=InnoDB AUTO_INCREMENT=1000;



/* tienda */

CREATE TABLE tienda(
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	autor_id INT NOT NULL,
	url VARCHAR(255) NOT NULL,
	imagen VARCHAR(255),
	url_externa VARCHAR(5000) NOT NULL,
	precio VARCHAR(255),
	titulo VARCHAR(255),
	texto TEXT CHARACTER SET utf8,
	etiqueta TEXT CHARACTER SET utf8,
	fecha DATETIME NOT NULL,
	activa TINYINT NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(autor_id)
		REFERENCES administradores(id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT	
)ENGINE=InnoDB AUTO_INCREMENT=1000;



CREATE TABLE usuarios (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(30),
	apellido VARCHAR(30),
	email VARCHAR(255) UNIQUE,
	password VARCHAR(255),
	fecha_nacimiento DATETIME,
	pais VARCHAR(25),
	telefono VARCHAR(25),
	dieta VARCHAR(255),
	objetivo VARCHAR(40),
	altura VARCHAR(25),
	peso VARCHAR(25),
	lugar_entreno VARCHAR(25),
	restricciones VARCHAR(255),
	plan VARCHAR(25),
	dias_entreno VARCHAR(25),
	fecha_registro DATETIME NOT NULL,
	activo TINYINT NOT NULL,
	PRIMARY KEY (id)
)ENGINE=InnoDB AUTO_INCREMENT=1000;





CREATE TABLE editar_datos(
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	usuario_id INT NOT NULL,
	url_secreta VARCHAR(255) NOT NULL,
	fecha DATETIME NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(usuario_id)
		REFERENCES usuarios(id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT
);



CREATE TABLE recuperacion_clave(
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	usuario_id INT NOT NULL,
	url_secreta VARCHAR(255) NOT NULL,
	fecha DATETIME NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(usuario_id)
		REFERENCES usuarios(id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT
);





/* progreso del usuario */

CREATE TABLE control_medidas(

	id INT NOT NULL UNIQUE AUTO_INCREMENT,

	autor_id INT NOT NULL,

	url VARCHAR(255),

	imagen VARCHAR(255),

	peso VARCHAR(255),

	hombro VARCHAR(255),

	pecho VARCHAR(255),

	espalda VARCHAR(255),

	brazo VARCHAR(255),

	abdomen VARCHAR(255),

	cintura VARCHAR(255),

	cadera VARCHAR(255),

	pantorrilla VARCHAR(255),

	pierna_inf VARCHAR(255),

	pierna_sup VARCHAR(255),

	fecha DATETIME NOT NULL,

	activa TINYINT NOT NULL,

	PRIMARY KEY(id),

	FOREIGN KEY(autor_id)

		REFERENCES usuarios(id)

		ON UPDATE CASCADE

		ON DELETE RESTRICT	

);







CREATE TABLE comentarios (

        id INT NOT NULL UNIQUE AUTO_INCREMENT,
        autor_id INT NOT NULL,
        entrada_id INT NOT NULL,
        titulo VARCHAR(255) NOT NULL,
        texto TEXT CHARACTER SET utf8 NOT NULL,
        fecha DATETIME NOT NULL,
        PRIMARY KEY(id),
        FOREIGN KEY(autor_id)
            REFERENCES usuarios(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT,
        FOREIGN KEY(entrada_id)
            REFERENCES entrenamiento(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT,
        FOREIGN KEY(entrada_id)
            REFERENCES producto(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT
);





