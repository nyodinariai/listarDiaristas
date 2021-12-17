<?php

declare(strict_types=1);

namespace App\Modelo;

class Cliente
{
    public $nomeCompleto;

    public function __construct($nomeCompleto){
        $this->nomeCompleto = $nomeCompleto;
    }
}
