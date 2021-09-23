<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Goiânia',
    'Setor Bela Vista',
    'Rua S-2',
    "428");
$outroEndereco = new Endereco(
    'Goiânia',
    'Jardim Goiás',
    'Rua 55',
    '185');

echo "Enderço antigo: $umEndereco";
$umEndereco->rua = "Rua S-3";
echo "Novo endereço com função __set: $umEndereco";
echo $outroEndereco;
