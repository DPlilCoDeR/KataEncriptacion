<?php

namespace App;

class Encriptar {
    public $palabra = 'hola';
    public $letras = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q'];

    public function letraRandom()
    {
        $numRandom = rand(0,17);
        $letraRandom = $this->letras[$numRandom];

        return $letraRandom;
    }
    public function descomponer()
    {
        $stringPalabraDescompuesta = str_split($this->palabra);

        return $stringPalabraDescompuesta;
    }
}

$objeto = new Encriptar;
$funcion = $objeto->descomponer();
print_r($funcion);