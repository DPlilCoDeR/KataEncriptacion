<?php

use PHPUnit\Framework\TestCase;
use App\Encriptar;
class EncriptacionTest extends TestCase
{
    public function testQueEsUnString()
    {   
        $palabra = new Encriptar;
        $comprobar = $palabra->palabra;
        $this->assertIsString($comprobar);
    }

    public function testPalabraNoSeaLaMisma()
    {   
        $letra = new Encriptar;
        $expected = $letra->palabra;
        $resultado = $letra->letraRandom();
        $this->assertEquals($expected, $resultado);
    }
    public function testLaPalabraEsUnArray()
    {
        $palabra = new Encriptar;
        $comprobar = $palabra->descomponer();
        $this->assertIsArray($comprobar);
    }
    

}