-- Criação do Banco de Dados
CREATE DATABASE IF NOT EXISTS db_sistema_cadastro;
USE db_sistema_cadastro;

-- Criação da Tabela de Usuários
-- A estrutura baseia-se nos campos do formulário em Index.html e na verificação em verifyUser.php
CREATE TABLE IF NOT EXISTS Usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    login VARCHAR(100) NOT NULL UNIQUE, -- Este é o campo 'email' usado no login
    senha VARCHAR(255) NOT NULL,        -- Em produção, armazene hashs, não texto puro
    telefone VARCHAR(20),
    cpf VARCHAR(14)
);

-- Inserção de um Usuário de Teste (Para você conseguir logar imediatamente)
-- Login: admin@teste.com
-- Senha: 123
INSERT INTO Usuarios (nome, login, senha, telefone, cpf) 
VALUES ('Administrador', 'admin@teste.com', '123', '(00) 00000-0000', '000.000.000-00');