create table utenti(
	nome varchar(50) not null,
	cognome varchar(50) not null,
	datanascita varchar(20) not null,
	email varchar(100) primary key,
	pswd varchar (50) not null 
);