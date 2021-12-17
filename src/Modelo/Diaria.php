<?php

declare(strict_types=1);

namespace App\Modelo;

class Diaria{


    public string $data;

    public int $tempo;

    public Diarista $diarista;

    public Cliente $cliente;

    public function __construct( string $data, int $tempo, Diarista $diarista, Cliente $cliente){
        $this->tempo = $tempo;
        $this->data = $data;
        $this->diarista = $diarista;
        $this->cliente = $cliente;
    }

    public static function obterTodas(){
        return [
            new self(
                '20/10/2021',
                8,
                new Diarista('Joao'),
                new Cliente('Marcia')
            ),
            new self(
                '20/11/2021',
                6,
                new Diarista('Jose'),
                new Cliente('Marco')
            ),
            new self(
                '20/11/2021',
                8,
                new Diarista('Joaquim'),
                new Cliente('Marcelo')
            ),
            ];
    }
}