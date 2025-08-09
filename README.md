# META-CRUD

Desafio da META TELECON

Projeto simples de cadastro de clientes usando Laravel.

## Descrição

Este projeto implementa um sistema CRUD para gerenciar clientes, com funcionalidades como:

- Cadastro, edição e exclusão de clientes
- Busca por nome, email ou telefone
- Máscara para telefone no formato (00) 00000-0000
- Validação de emails únicos
- Paginação da lista de clientes
- Layout responsivo com Bootstrap

## Tecnologias Utilizadas

- PHP 8.x
- Laravel 12.x
- Bootstrap 5
- jQuery e jQuery Mask Plugin para máscara de telefone
- MySQL (ou outro banco de dados relacional)

## Como rodar o projeto

1. Clone este repositório  
   `git clone https://github.com/Jeffersonlima578/meta-crud.git`

2. Entre na pasta do projeto  
   `cd meta-crud`

3. Instale as dependências com composer  
   `composer install`

4. Configure o arquivo `.env` com suas credenciais do banco de dados

5. Rode as migrations para criar as tabelas  
   `php artisan migrate`

6. Inicie o servidor local  
   `php artisan serve`

7. Acesse `http://localhost:8000` no navegador

## Contato

Desenvolvido por Jefferson Gomes
