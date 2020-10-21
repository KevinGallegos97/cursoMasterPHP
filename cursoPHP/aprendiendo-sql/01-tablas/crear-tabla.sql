CREATE TABLE usuarios(
id          int(11) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(255) default 'hola mundo',
email       varchar(100) not null,
password    varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

