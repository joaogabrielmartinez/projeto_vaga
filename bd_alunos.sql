


create table usuarios( 
id int not null auto_increment,
nome varchar(30) not null,
sobrenome varchar(30) not null,
email varchar(50) not null,
senha varchar(50) not null,
idade varchar(6) not null,
sexo char (1) not null,
dt_ varchar(10) not null,
tel int(12) not null,
codigo int(8) not null,
compartilhamento int(10) not null,
estado varchar(40) not null,
cidade varchar(50) not null,
primary key(id)
);


