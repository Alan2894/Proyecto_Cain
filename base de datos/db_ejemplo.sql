drop database if exists db_tienda;
create database db_tienda;
use db_tienda;

create table clientes
(id_cliente int primary key auto_increment, nombre varchar(25), email varchar(50), contrasena varchar(255));