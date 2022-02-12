use cezaryto_xvregina;

create table familias (
	id_familia tinyint auto_increment primary key,
    apellidos varchar(50) not null, #El nombre de la familia o persona
    tipo tinyint not null #1. Familia, 2. Invitado Especial
);

create table personas (
	id_persona smallint auto_increment primary key,
    familia tinyint, 
    nombre varchar(150) not null, 
    confirmacion bit default 0, 
    constraint fk_familia_persona foreign key (familia) references familias.id_familia
);


#Obtiene las invitaciones por familia
select id_persona as 'invitado', nombre, confirmacion from personas where familia = md5('1');
