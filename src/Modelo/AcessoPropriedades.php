<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
       $metodo = 'recupera' . ucfirst($nomeAtributo);
       echo $this->$metodo().PHP_EOL;
    }

    public function __set(string $nomeAtributo, string $valor): void
    {
        $this->$nomeAtributo = $valor;
    }
}