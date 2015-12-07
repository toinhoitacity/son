CREATE DATABASE dbo;

USE pdo;

CREATE TABLE alunos(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NULL,
  nota INT
);

INSERT INTO alunos (nome, nota) VALUES
  ('Antonio', 10),
  ('Bianca', 9),
  ('Cirino', 8),
  ('Damiana', 7),
  ('Euclides', 6),
  ('Fábio', 6),
  ('Guilherme', 6),
  ('Hermes', 6),
  ('Inácio', 6),
  ('Juliano', 6),
  ('Laura', 6),
  ('Maria', 6),
  ('Novack', 6),
  ('Otávio', 6),
  ('Patrícia', 6),
  ('Renata', 6),
  ('Sávio', 6),
  ('Tatiana', 6),
  ('Ulisses', 6),
  ('Vanessa', 6);

CREATE TABLE admin(
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(255) NULL,
  senha VARCHAR(255) NULL
);

INSERT INTO `admin` (`id`, `usuario`, `senha`) VALUES
  (1, 'admin', '21232f297a57a5a743894a0e4a801fc3');


