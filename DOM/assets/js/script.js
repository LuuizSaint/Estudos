CREATE DATABASE meu_banco_de_dados;
SHOW DATABASES;

CREATE USER 'usuario_teste'@'localhost' IDENTIFIED BY 'senha123';
GRANT ALL PRIVILEGES ON meu_banco_de_dados.* TO 'usuario_teste'@'localhost';
FLUSH PRIVILEGES;

