use cezaryto_xvregina;

create table familias (
	id_familia tinyint auto_increment primary key,
    apellidos varchar(50) not null, #El nombre de la familia o persona
    tipo tinyint not null #1. Familia, 2. Invitado Especial, 
);

create table personas (
	id_persona smallint auto_increment primary key,
    familia tinyint, 
    nombre varchar(150) not null, 
    confirmacion bit default 0, 
    constraint fk_familia_persona foreign key (familia) references familias(id_familia)
);

#Confirmar Invitacion
update personas set confirmacion = 1 where id_persona = '115';

#Links de Invitacion
select concat('http://cezaryto.com/apps/regina/' , md5(id_familia)) as 'INIVTACION' from familias;
select concat('http://localhost:17944/' , md5(id_familia)) as 'INIVTACION' from familias;

#Obtiene la Familia 
select apellidos as 'familia', tipo from familias where md5(id_familia) = md5('1');

#Obtiene las invitaciones por familia
select id_persona as 'invitado', nombre, confirmacion from personas p 
inner join familias f on p.familia = f.id_familia where md5(id_familia) = md5('1')
order by nombre;


