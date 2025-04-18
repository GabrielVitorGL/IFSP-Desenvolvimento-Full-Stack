create database bdlojinha2000;
use bdlojinha2000;
create table tbcliente(
	codcli int primary key auto_increment,
	cliente varchar(90) not null,
	cpf int,
	codvendedor int
);
create table tbvendedor(
	codvend int primary key auto_increment,
	vendedor varchar(90) not null
);
alter table tbvendedor change codcli codvend
int auto_increment;

alter table tbvendedor change cliente vendedor
varchar(90);

alter table tbcliente add 
foreign key(codvendedor)
references
tbvendedor(codvend);



select *from tbvendedor;