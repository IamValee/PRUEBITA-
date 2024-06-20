use pruebitabd;

create table tb_usuarios(
documento int not null,
nombre varchar (30) not null,
fec_nac date not null,
foto varchar (300) null,
primary key (documento)
);

set sql_safe_updates=0;

delete from tb_usuarios;
select * from tb_usuarios;
select nombre from tb_usuarios where documento ='332';
alter table tb_usuarios add contraseña varchar(20) not null;
update tb_usuarios set documento = 212121, nombre = 'Alfonso Amaya Actualizado', fec_nac = '2024-06-20', contraseña='Clavesita2' where documento=212121;

insert into tb_usuarios(documento, nombre, fec_nac, contraseña) values (3662, 'pepito', now(), '12344');
insert into tb_usuarios(documento, nombre, fec_nac, contraseña) values (132345, 'luz', now(), '233312');
insert into tb_usuarios(documento, nombre, fec_nac, foto, contraseña) values (1111, 'luz', now(), 'avatarito.png','233312');

select nombre from tb_usuarios where documento='documento';

update tb_usuarios set documento = '2882882',
nombre = 'Enrique', fec_nac = '2020-02-12', contraseña='288888' where documento='1120562806';