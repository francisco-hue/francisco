CREATE DATABASE seu_banco;

\c seu_banco;  -- para conectar ao banco criado

CREATE TABLE tipo_transacao (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(50) NOT NULL
);

CREATE TABLE transacao (
    id SERIAL PRIMARY KEY,
    tipo_id INT REFERENCES tipo_transacao(id),
    descricao VARCHAR(255) NOT NULL,
    valor NUMERIC NOT NULL,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO tipo_transacao (nome) VALUES ('Receita'), ('Despesa');
