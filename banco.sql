create table pessoa(
    id bigint auto_increment primary key,
    nome varchar(80) not null,
    email varchar(40) not null,
    cpf bigint(11) not null,
    ativo boolean default true,
    tipo varchar(1) not null
);

create table chamado(
    id int auto_increment primary key,
    titulo varchar(40) not null,
    data date not null,
    urgencia varchar(10) not null,
    descricao varchar(150) not null,
    idRequerente bigint not null,
    idTecnico bigint not null,
    FOREIGN KEY(idRequerente) references pessoa(id),
    FOREIGN KEY(idTecnico) references pessoa(id)
);