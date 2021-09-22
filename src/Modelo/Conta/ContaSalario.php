<?php

namespace Alura\Banco\Modelo\Conta;

class ContaSalario extends Conta
{
    public function percentualTarifa(): float
    {
        return 0.02;
    }
}

