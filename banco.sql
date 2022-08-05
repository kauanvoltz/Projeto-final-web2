create database if not exists estacionamento;
use estacionamento;

CREATE TABLE IF NOT EXISTS endereco (
  id_endereco INT NOT NULL AUTO_INCREMENT,
  endereco VARCHAR(35) NOT NULL,
  numero VARCHAR(10) NOT NULL,
  cep CHAR(7) NOT NULL,
  bairro VARCHAR(25) NOT NULL,
  cidade VARCHAR(25) NOT NULL,
  complemento VARCHAR(10) NULL,
  PRIMARY KEY (id_endereco));

CREATE TABLE IF NOT EXISTS cliente (
  id_cliente INT NOT NULL AUTO_INCREMENT,
  cpf CHAR(11) NOT NULL,
  nome VARCHAR(50) NOT NULL,
  telefone VARCHAR(15) NOT NULL,
  id_endereco INT NOT NULL,
  PRIMARY KEY (id_cliente),
  CONSTRAINT id_endereco FOREIGN KEY (id_endereco) REFERENCES endereco (id_endereco));

CREATE TABLE IF NOT EXISTS veiculo (
  id_veiculo INT NOT NULL AUTO_INCREMENT,
  placa CHAR(7) unique NOT NULL,
  modelo VARCHAR(25) NOT NULL,
  ano CHAR(4) NOT NULL,
  cor VARCHAR(20) NOT NULL,
  PRIMARY KEY (id_veiculo));
  

CREATE TABLE IF NOT EXISTS cliente_veiculo (
  id_cliente INT NOT NULL,
  id_veiculo INT NOT NULL,
  PRIMARY KEY (id_cliente, id_veiculo),
  FOREIGN KEY (id_cliente) REFERENCES cliente (id_cliente),
  FOREIGN KEY (id_veiculo) REFERENCES veiculo (id_veiculo))
