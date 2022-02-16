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
select 
	case when tipo = 1 
		then concat('FAM. ', apellidos) 
        else  apellidos 
	end as 'FAMILIA / INVITADO', 
    concat('http://cezaryto.com/apps/regina/' , md5(id_familia)) as 'INVITACION' 
from familias order by apellidos;
    
select 
	case when tipo = 1 
		then concat('FAM. ', apellidos) 
        else  apellidos 
	end as 'FAMILIA / INVITADO', 
    concat('http://localhost:17944/' , md5(id_familia)) as 'INVITACION' 
from familias order by apellidos;

#Obtiene la Familia 
select apellidos as 'familia', tipo from familias where md5(id_familia) = md5('1');

#Obtiene las invitaciones por familia
select id_persona as 'invitado', nombre, confirmacion from personas p 
inner join familias f on p.familia = f.id_familia where md5(id_familia) = md5('29')
order by nombre;

#Obtiene los Asistentes confirmados
select id_persona as 'ASISTENTE', f.apellidos as 'FAMILIA', nombre as 'INVITADO', case when confirmacion = 0 then 'NO' else 'SI' end as 'CONFIRMADO' from personas p
inner join familias f on p.familia = f.id_familia
order by apellidos, nombre;

#Resumen de Invitados 
select count(id_persona) as 'TOTAL', (select count(id_persona) as 'CONF' from personas where confirmacion = 1) as 'CONF', (select count(id_persona) as 'FA' from personas where confirmacion = 0) as 'FALTA' from personas;
