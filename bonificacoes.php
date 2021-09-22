<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';


$umFuncionario = new Desenvolvedor(
    'Vinicius Dias', 
    new CPF('123.456.789-10'), 
    1000
);

$segundoFuncionario = new Gerente(
    'Patricia Dias',
    new CPF('987.654.321-10'),
    3000
);

$terceiroFuncionario = new Diretor(
    'Lucas Gonella',
    new CPF('951.753.258-10'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('456.987.123-10'),
    1500
);

$umFuncionario->sobreDeNivel();


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($segundoFuncionario);
$controlador->adicionaBonificacaoDe($terceiroFuncionario);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
