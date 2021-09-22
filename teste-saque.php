<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular, Conta};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petropolis', 'bairo teste', 'Rua lá', '37')
    )
);
$conta->transfere(100, $segundaConta);
$conta->deposita(500);
echo $conta->recuperaSaldo().PHP_EOL;
$conta->saca(100);
echo $conta->recuperaSaldo().PHP_EOL;

class algoGrande
{
    private $seuNome;
    private $meuNome;

    public function __construct(string $seuNome, string $meuNome)
    {
        # code...
    }
}

