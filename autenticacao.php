<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor(
    'Lucas Gonella',
    new CPF('123.456.789-10'),
    10000
);
$umGerente = new Gerente(
    'Pedro',
    new CPF('321.654.987-10'),
    5000
);

$umTitular = new Titular(
    new CPF('951.159.654-65'),
    'João E',
    new Endereco(' ', ' ', ' ', ' ')

);

//Teste


$autenticador->tentaLogin($umTitular, 'abcd').PHP_EOL;
