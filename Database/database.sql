CREATE DATABASE; 


create  table cines.cines(
	id_cine int(11) AUTO_INCREMENT not null primary key,
	nombre varchar(60)
);

create  table cines.peliculas(
	id_pelicula int(11) AUTO_INCREMENT not null primary key,
	nombre varchar(60),
	director varchar (60),
	clasficacion varchar (60),
	protagonistas varchar (60)
);

create table cines.salaproyeccion(
	id_sala int(11) AUTO_INCREMENT not null primary key,
	nombre varchar(60),
	id_cine int(11),
	id_pelicula int(11),
	fecha_inicio_proyeccion timestamp,
	fecha_fin_proyeccion timestamp,
	CONSTRAINT fk_cines_sala FOREIGN KEY (id_cine) REFERENCES cines.cines(id_cine),
	CONSTRAINT fk_pelicula_sala FOREIGN KEY (id_pelicula) REFERENCES cines.peliculas(id_pelicula)
);

create table cines.taquilla(
	ticket int(11) AUTO_INCREMENT not null primary key,
	id_sala int(11),
	fecha_venta timestamp,
	CONSTRAINT fk_taquilla_sala FOREIGN KEY (id_sala) REFERENCES cines.salaproyeccion (id_sala)
);

create  table cines.usuario(
	id_user int(11) AUTO_INCREMENT not null primary key,
	usuario varchar(60),
	contrasenia varchar(60)
);
