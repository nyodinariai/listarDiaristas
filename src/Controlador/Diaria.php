<?php

declare(strict_types=1);

namespace App\Controlador;

use App\Modelo\Diaria as ModeloDiaria;

class Diaria{

    /**
     * funcao lista todas as diarias
     * @return void
     */
    public function listar(){
        
        $diarias = ModeloDiaria::obterTodas();

        require_once (__DIR__ . '/../../visualizacao/listar_diarias.php');
    }

}