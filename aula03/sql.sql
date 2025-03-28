create database bdlojinha2000;
use bdlojinha2000;

create table tbcliente(
    codcli int AUTO_INCREMENT,
    cliente varchar(90),
    cpf varchar(50),
	PRIMARY KEY(codcli),
);

create table tbvendedor(
    codvend int AUTO_INCREMENT,
    vendedor varchar(90),
    PRIMARY KEY(codvend)
    cpf varchar(50),
);
create table tbproduto(
    codprod int AUTO_INCREMENT,
    produto varchar(90),
    PRIMARY KEY(codprod)
    preco decimal(10,2),
);
create table tbvenda(
    codvenda int AUTO_INCREMENT,
    vendedor int,
    cliente int,
    produto int,
    PRIMARY KEY(codvenda),
    FOREIGN KEY(vendedor) REFERENCES tbvendedor(codvend),
    FOREIGN KEY(cliente) REFERENCES tbcliente(codcli),
    FOREIGN KEY(produto) REFERENCES tbproduto(codprod)
);
create table tbitemvenda(
    coditem int AUTO_INCREMENT,
    venda int,
    produto int,
    PRIMARY KEY(coditem),
    FOREIGN KEY(venda) REFERENCES tbvenda(codvenda),
    FOREIGN KEY(produto) REFERENCES tbproduto(codprod)
);
create table tbforma_pagamento(
    codpagamento int AUTO_INCREMENT,
    forma_pagamento varchar(90),
    PRIMARY KEY(codpagamento)
);
create table tbvenda_pagamento(
    codvenda_pagamento int AUTO_INCREMENT,
    venda int,
    pagamento int,
    PRIMARY KEY(codvenda_pagamento),
    FOREIGN KEY(venda) REFERENCES tbvenda(codvenda),
    FOREIGN KEY(pagamento) REFERENCES tbforma_pagamento(codpagamento)
);
create table tbestoque(
    codestoque int AUTO_INCREMENT,
    produto int,
    quantidade int,
    PRIMARY KEY(codestoque),
    FOREIGN KEY(produto) REFERENCES tbproduto(codprod)
);
create table tbfornecedor(
    codfornecedor int AUTO_INCREMENT,
    fornecedor varchar(90),
    PRIMARY KEY(codfornecedor)
    cnpj varchar(50),
);
create table tbproduto_fornecedor(
    codproduto_fornecedor int AUTO_INCREMENT,
    produto int,
    fornecedor int,
    PRIMARY KEY(codproduto_fornecedor),
    FOREIGN KEY(produto) REFERENCES tbproduto(codprod),
    FOREIGN KEY(fornecedor) REFERENCES tbfornecedor(codfornecedor)
);
create table tbcompra(
    codcompra int AUTO_INCREMENT,
    fornecedor int,
    produto int,
    quantidade int,
    PRIMARY KEY(codcompra),
    FOREIGN KEY(fornecedor) REFERENCES tbfornecedor(codfornecedor),
    FOREIGN KEY(produto) REFERENCES tbproduto(codprod)
);
create table tbcompra_pagamento(
    codcompra_pagamento int AUTO_INCREMENT,
    compra int,
    pagamento int,
    PRIMARY KEY(codcompra_pagamento),
    FOREIGN KEY(compra) REFERENCES tbcompra(codcompra),
    FOREIGN KEY(pagamento) REFERENCES tbforma_pagamento(codpagamento)
);

alter table tbvendedor change codcli codvend int AUTO_INCREMENT;

alter table tbvendedor change cliente vendedor varchar(90);

alter table tbcliente add foreign key(codcli) references tbvendedor(codvend);