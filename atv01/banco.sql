CREATE DATABASE maximus;
USE maximus;
-- DROP DATABASE maximus;

CREATE TABLE planos (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  valor DECIMAL(10, 2) NOT NULL,
  descricao TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE clientes (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  data_nascimento DATE NOT NULL,
  id_plano INT,
  senha_criptografada VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (id_plano) REFERENCES planos(id)
);

CREATE TABLE categorias (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(30) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE conteudos (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  sinopse TEXT NOT NULL,
  ano_lancamento YEAR NOT NULL,
  duracao_minutos INT,
  classificacao VARCHAR(10) NOT NULL,
  imagem_url VARCHAR(255) NOT NULL,
  tipo VARCHAR(20) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE conteudos_assistidos (
  id INT PRIMARY KEY AUTO_INCREMENT,
  id_cliente INT NOT NULL,
  id_conteudo INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (id_cliente) REFERENCES clientes(id),
  FOREIGN KEY (id_conteudo) REFERENCES conteudos(id)
);

CREATE TABLE conteudos_favoritos (
  id INT PRIMARY KEY AUTO_INCREMENT,
  id_cliente INT NOT NULL,
  id_conteudo INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (id_cliente) REFERENCES clientes(id),
  FOREIGN KEY (id_conteudo) REFERENCES conteudos(id)
);

CREATE TABLE conteudos_categorias (
  id INT PRIMARY KEY AUTO_INCREMENT,
  id_conteudo INT NOT NULL,
  id_categoria INT NOT NULL,
  FOREIGN KEY (id_conteudo) REFERENCES conteudos(id),
  FOREIGN KEY (id_categoria) REFERENCES categorias(id)
);

-- OPERAÇÕES

-- planos
SELECT * FROM planos;

INSERT INTO planos (nome, valor, descricao)
VALUES ('Plano Básico', 29.90, 'Acesso básico ao conteúdo. Apenas Netflix, Amazon Prime e Disney+. Qualidade Full HD');

INSERT INTO planos (nome, valor, descricao)
VALUES ('Plano Intermediário', 49.90, 'Acesso a todo o catálogo de conteúdos. Qualidade Full HD');

INSERT INTO planos (nome, valor, descricao)
VALUES ('Plano Premium', 59.90, 'Acesso a todo o catálogo de conteúdos. Qualidade 4K');

-- clientes
SELECT clientes.nome, email, telefone, data_nascimento, planos.nome as plano, clientes.created_at as cadastro
FROM clientes JOIN planos ON clientes.id_plano = planos.id;

INSERT INTO clientes (nome, email, telefone, data_nascimento, id_plano, senha_criptografada)
VALUES ('João Silva', 'joao.silva@email.com', '123456789', '1994-03-11', 1, '$2b$12$W9Zkhv6EqpuhHbLGHMQXkeW.o.bRliLsRhc98uO/Sx2iXb9I24gSO');

UPDATE clientes SET nome = 'João da Silva', email = 'joao.silva.corrigido@email.com', telefone = '987654321', data_nascimento = '1994-03-11' WHERE id = 1;

-- DELETE FROM clientes WHERE id = 1;

-- categorias
SELECT * FROM categorias;

INSERT INTO categorias (nome) VALUES ('Ação');
INSERT INTO categorias (nome) VALUES ('Comédia');
INSERT INTO categorias (nome) VALUES ('Drama');
INSERT INTO categorias (nome) VALUES ('Ficção Científica');
INSERT INTO categorias (nome) VALUES ('Terror');
INSERT INTO categorias (nome) VALUES ('Suspense');
INSERT INTO categorias (nome) VALUES ('Romance');
INSERT INTO categorias (nome) VALUES ('Fantasia');

-- INSERT INTO categorias (nome) VALUES ('Documentário');
-- INSERT INTO categorias (nome) VALUES ('Filme');
-- INSERT INTO categorias (nome) VALUES ('Série');
-- INSERT INTO categorias (nome) VALUES ('Anime');
-- INSERT INTO categorias (nome) VALUES ('Infantil');


-- conteudos
SELECT * FROM conteudos;

  -- filmes
INSERT INTO conteudos (nome, sinopse, ano_lancamento, duracao_minutos, classificacao, imagem_url, tipo)
VALUES ('O Poderoso Chefão', 'Uma família mafiosa luta para estabelecer sua supremacia nos Estados Unidos depois da Segunda Guerra Mundial. Uma tentativa de assassinato deixa o chefão Vito Corleone incapacitado e força os filhos Michael e Sonny a assumir os negócios.', 1972, 175, '14', 'https://www.cineplayers.com/sites/default/files/posters/2020/08/god.jpg', 'filme');

INSERT INTO conteudos (nome, sinopse, ano_lancamento, duracao_minutos, classificacao, imagem_url, tipo)
VALUES ('O Senhor dos Anéis: A Sociedade do Anel', 'Em uma terra fantástica e única, um hobbit recebe de presente de seu tio um anel mágico e maligno que precisa ser destruído antes que caia nas mãos do mal. Para isso, o hobbit Frodo tem um caminho árduo pela frente, onde encontra perigo, medo e seres bizarros. Ao seu lado para o cumprimento desta jornada, ele aos poucos pode contar com outros hobbits, um elfo, um anão, dois humanos e um mago, totalizando nove seres que formam a Sociedade do Anel.', 2002, 178, '12', 'https://br.web.img3.acsta.net/medias/nmedia/18/92/91/32/20224832.jpg', 'filme');

INSERT INTO conteudos (nome, sinopse, ano_lancamento, duracao_minutos, classificacao, imagem_url, tipo)
VALUES ('Star Wars: Episódio IV - Uma Nova Esperança', 'Luke Skywalker sonha ir para a Academia como seus amigos, mas se vê envolvido em uma guerra intergalática quando seu tio compra dois robôs e com eles encontra uma mensagem da princesa Leia Organa para o jedi Obi-Wan Kenobi sobre os planos da construção da Estrela da Morte, uma gigantesca estação espacial com capacidade para destruir um planeta. Luke então se junta ao cavaleiro jedi e a Han Solo, um mercenário, para resgatar a princesa e destruir a estação.', 1977, 121, '10', 'https://upload.wikimedia.org/wikipedia/pt/7/7e/Star_Wars_Epis%C3%B3dio_IV_Uma_Nova_Esperan%C3%A7a.jpg', 'filme');

INSERT INTO conteudos (nome, sinopse, ano_lancamento, duracao_minutos, classificacao, imagem_url, tipo)
VALUES ('Titanic', 'Jack Dawson, um jovem aventureiro, ganha uma passagem para a primeira viagem do transatlântico Titanic. Ele ganha o ingresso em uma mesa de pôquer e, no barco, conhece Rose DeWitt Bukater, uma jovem de uma família rica que está prestes a se casar com Caledon Hockley, um noivo rico e arrogante. Jack e Rose se apaixonam, mas o navio está prestes a colidir com um iceberg.', 1997, 195, '12', 'https://br.web.img2.acsta.net/medias/nmedia/18/89/56/94/20055685.jpg', 'filme');

  -- series
INSERT INTO conteudos (nome, sinopse, ano_lancamento, classificacao, imagem_url, tipo)
VALUES ('Breaking Bad', 'Walter White é um professor de química que leva uma vida difícil e luta para pagar as contas. Sua vida muda quando descobre que tem câncer terminal. Para aumentar rapidamente a quantidade de dinheiro que deixará para sua família após sua morte, Walter usa seu conhecimento de química para fazer e vender metanfetamina, uma droga sintética. Ele conta com a ajuda do ex-aluno e pequeno traficante Jesse Pinkman.', 2008, '16', 'https://br.web.img3.acsta.net/pictures/14/03/31/19/28/462555.jpg', 'serie');

INSERT INTO conteudos (nome, sinopse, ano_lancamento, classificacao, imagem_url, tipo)
VALUES ('Game of Thrones', 'Em Westeros, uma terra onde os verões podem durar vários anos e o inverno toda uma vida, as reivindicações e as forças sobrenaturais correm as portas do Reino dos Sete Reinos. A irmandade da Patrulha da Noite busca proteger o reino de cada criatura que pode vir de lá da Muralha, mas já não tem os recursos necessários para garantir a segurança de todos. Depois de um verão de dez anos, um inverno rigoroso promete chegar com um futuro mais sombrio. Enquanto isso, conspirações e rivalidades correm no jogo político pela disputa do Trono de Ferro, o símbolo do poder absoluto.', 2011, '18', 'https://br.web.img3.acsta.net/pictures/19/03/21/16/15/4239577.jpg', 'serie');

INSERT INTO conteudos (nome, sinopse, ano_lancamento, classificacao, imagem_url, tipo)
VALUES ('The Office', 'Um escritório de uma empresa de papel é o cenário desta comédia que acompanha o dia a dia de um chefe meio atrapalhado, mas carismático, e seus funcionários. A série é filmada no formato de documentário e mostra o cotidiano dos funcionários da Dunder Mifflin, uma empresa de papel, em Scranton, na Pensilvânia.', 2005, '14', 'https://br.web.img3.acsta.net/pictures/14/02/04/13/20/128334.jpg', 'serie');

INSERT INTO conteudos (nome, sinopse, ano_lancamento, classificacao, imagem_url, tipo)
VALUES ('Friends', 'Seis jovens são unidos por laços familiares, românticos e, principalmente, de amizade, enquanto tentam vingar em Nova York. Rachel é a garota mimada que deixa o noivo no altar para viver com a amiga Monica, sistemática e apaixonada pela culinária. Monica é irmã de Ross, um paleontólogo que é abandonado pela esposa, que descobriu ser lésbica. Do outro lado do corredor do apartamento de Monica e Rachel, moram Joey, um ator frustrado, e Chandler, de profissão misteriosa. A série mostra a vida sentimental e profissional desses personagens, assim como a vida conjugal de Ross, que é três vezes divorciado.', 1994, '12', 'https://br.web.img3.acsta.net/pictures/19/12/20/21/27/3055482.jpg', 'serie');

  -- animes
INSERT INTO conteudos (nome, sinopse, ano_lancamento, classificacao, imagem_url, tipo)
VALUES ('Death Note', 'Light Yagami é um estudante brilhante que, um dia, encontra um caderno de anotações sobrenatural: o Death Note, que permite que o usuário mate qualquer pessoa apenas ao escrever o nome da vítima enquanto visualiza seu rosto. A posse do caderno da morte deixa Light com o poder sobre a vida e a morte. Light decide criar um mundo melhor, matando criminosos. Seus atos são vistos como justiça pelo público, mas a polícia acredita que um assassino em série está à solta.', 2006, '16', 'https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/697c8b5ff2f49a97348b5507c06e1183.jpg', 'anime');

INSERT INTO conteudos (nome, sinopse, ano_lancamento, classificacao, imagem_url, tipo)
VALUES ('Naruto', 'Naruto Uzumaki é um menino que vive em Konohagakure no Sato ou simplesmente Konoha ou Vila Oculta da Folha, a vila ninja do País do Fogo. Quando ainda bebê, Naruto teve aprisionada em seu corpo a Kyuubi no Youko por Minato Namikaze (quarto Hokage, e seu pai), com a finalidade de salvar a Vila da Folha. Desde então, Naruto é visto por muitas pessoas como um monstro, não só pelos familiares das pessoas mortas pela Kyuubi, mas também por pessoas que sofrem com as besteiras feitas por Naruto que é extremamente arteiro. Incompreendido, Naruto sonha em se tornar um ninja poderoso, e ser nomeado Hokage, para assim ser reconhecido por todos.', 2002, '12', 'https://br.web.img3.acsta.net/pictures/16/04/11/16/56/089875.jpg', 'anime');

INSERT INTO conteudos (nome, sinopse, ano_lancamento, classificacao, imagem_url, tipo)
VALUES ('One Piece', 'Monkey D. Luffy é um pirata ambicioso que deseja encontrar o One Piece, o tesouro mais valioso do mundo, e assim se tornar o Rei dos Piratas. Luffy é um jovem com poderes de borracha que, ao longo de sua jornada, encontra diversos amigos e inimigos, e luta contra a Marinha.', 1999, '12', 'https://br.web.img3.acsta.net/pictures/16/02/03/17/11/571106.jpg', 'anime');

INSERT INTO conteudos (nome, sinopse, ano_lancamento, classificacao, imagem_url, tipo)
VALUES ('Dragon Ball Z', 'Dragon Ball Z é a continuação de Dragon Ball, cinco anos após Goku ter derrotado Piccolo. Goku está mais velho e se casou com Chichi, com a qual tem um filho chamado Gohan. A série acompanha a vida adulta de Goku, que conhece seu irmão mais velho Raditz e descobre que é um extraterrestre de uma raça quase extinta chamada Saiyajin. Goku morre na batalha contra Raditz, mas é treinado no outro mundo por Kaioh, o Senhor do Mundo Norte. Ele volta à Terra, onde participa de várias batalhas contra vilões intergalácticos e seres poderosos que ameaçam a paz do planeta.', 1989, '10', 'https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/35e4ac6339f5fdcc164160a5755790cd.jpg', 'anime');

  -- desenhos
INSERT INTO conteudos (nome, sinopse, ano_lancamento, classificacao, imagem_url, tipo)
VALUES ('Hora de Aventura', 'Hora de Aventura é uma série de desenho animado americana criada por Pendleton Ward para o Cartoon Network. A série segue as aventuras de Finn, um garoto humano aventureiro com poderes de luta, e seu melhor amigo e irmão adotivo Jake, um cão com a habilidade de mudar de forma e tamanho. Finn e Jake vivem na pós-apocalíptica Terra de Ooo, onde interagem com os outros personagens principais da série: Princesa Jujuba, Rei Gelado, Marceline, BMO e outros.', 2010, '10', 'https://br.web.img2.acsta.net/c_310_420/pictures/14/04/22/09/03/422873.jpg', 'desenho');

INSERT INTO conteudos (nome, sinopse, ano_lancamento, classificacao, imagem_url, tipo)
VALUES ('Bob Esponja', 'Bob Esponja Calça Quadrada é uma esponja-do-mar que vive em um abacaxi no fundo do mar com o seu caracol de estimação, Gary. Ele trabalha como cozinheiro na lanchonete chamada Siri Cascudo, especializada em hambúrguer de siri. Bob Esponja é otimista e um pouco ingênuo, mas é extremamente apaixonado pelo seu trabalho e seus amigos.', 1999, 'L', 'https://br.web.img3.acsta.net/pictures/14/02/14/13/28/226531.jpg', 'desenho');

INSERT INTO conteudos (nome, sinopse, ano_lancamento, classificacao, imagem_url, tipo)
VALUES ('Os Simpsons', 'Os Simpsons é uma série de desenho animado americana criada por Matt Groening para a Fox Broadcasting Company. A série é uma sátira da sociedade americana que narra a vida e os costumes da família Simpson, composta por Homer, Marge, Bart, Lisa e Maggie. A série se passa na fictícia cidade de Springfield e parodia a cultura e a sociedade americana.', 1989, '12', 'https://br.web.img3.acsta.net/medias/nmedia/18/79/96/51/19694367.jpg', 'desenho');

INSERT INTO conteudos (nome, sinopse, ano_lancamento, classificacao, imagem_url, tipo)
VALUES ('Pica-Pau', 'Pica-Pau é um pássaro carpinteiro extremamente travesso e encrenqueiro que vive em uma floresta no estado do Kansas. Ele é conhecido por sua risada característica e por pregar peças em todos os personagens que encontra.', 1957, 'L', 'https://br.web.img2.acsta.net/c_310_420/pictures/17/01/05/16/37/506795.jpg', 'desenho');



-- conteudos_categorias
SELECT conteudos.nome, categorias.nome as categoria
FROM conteudos JOIN conteudos_categorias ON conteudos.id = conteudos_categorias.id_conteudo
JOIN categorias ON conteudos_categorias.id_categoria = categorias.id;

  -- o poderoso chefão
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (1, 1); -- ação
  -- o senhor dos anéis
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (2, 8); -- fantasia
  -- star wars
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (3, 4); -- ficção científica
    -- titanic
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (4, 7); -- romance
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (4, 3); -- drama
    -- breaking bad
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (5, 3); -- drama
    -- game of thrones
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (6, 8); -- fantasia
    -- the office
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (7, 2); -- comédia
    -- friends
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (8, 2); -- comédia
    -- death note
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (9, 6); -- suspense
    -- naruto
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (10, 1); -- ação
    -- one piece
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (11, 1); -- ação
    -- dragon ball z
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (12, 1); -- ação
    -- hora de aventura
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (13, 8); -- fantasia
    -- bob esponja
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (14, 2); -- comédia
    -- os simpsons
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (15, 2); -- comédia
    -- pica-pau
INSERT INTO conteudos_categorias (id_conteudo, id_categoria) VALUES (16, 2); -- comédia

-- conteudos_assistidos
SELECT clientes.nome, conteudos.nome as conteudo
FROM conteudos_assistidos JOIN clientes ON conteudos_assistidos.id_cliente = clientes.id
JOIN conteudos ON conteudos_assistidos.id_conteudo = conteudos.id;

INSERT INTO conteudos_assistidos (id_cliente, id_conteudo)
VALUES (1, 1); -- poderoso chefão
INSERT INTO conteudos_assistidos (id_cliente, id_conteudo)
VALUES (1, 4); -- titanic
INSERT INTO conteudos_assistidos (id_cliente, id_conteudo)
VALUES (1, 6); -- game of thrones
INSERT INTO conteudos_assistidos (id_cliente, id_conteudo)
VALUES (1, 8); -- friends
INSERT INTO conteudos_assistidos (id_cliente, id_conteudo)
VALUES (1, 9); -- death note
INSERT INTO conteudos_assistidos (id_cliente, id_conteudo)
VALUES (1, 10); -- naruto
INSERT INTO conteudos_assistidos (id_cliente, id_conteudo)
VALUES (1, 14); -- bob esponja

-- conteudos_favoritos
SELECT clientes.nome, conteudos.nome as conteudo
FROM conteudos_favoritos JOIN clientes ON conteudos_favoritos.id_cliente = clientes.id
JOIN conteudos ON conteudos_favoritos.id_conteudo = conteudos.id;

INSERT INTO conteudos_favoritos (id_cliente, id_conteudo)
VALUES (1, 2); -- o senhor dos anéis
INSERT INTO conteudos_favoritos (id_cliente, id_conteudo)
VALUES (1, 3); -- star wars
INSERT INTO conteudos_favoritos (id_cliente, id_conteudo)
VALUES (1, 5); -- breaking bad
INSERT INTO conteudos_favoritos (id_cliente, id_conteudo)
VALUES (1, 7); -- the office
INSERT INTO conteudos_favoritos (id_cliente, id_conteudo)
VALUES (1, 11); -- one piece
INSERT INTO conteudos_favoritos (id_cliente, id_conteudo)
VALUES (1, 12); -- dragon ball z
INSERT INTO conteudos_favoritos (id_cliente, id_conteudo)
VALUES (1, 15); -- os simpsons








