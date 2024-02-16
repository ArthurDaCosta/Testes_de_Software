<?php

use PHPUnit\Framework\TestCase;
require_once 'MinhaClasseAvancado.php';

class MinhaClasseAvancadoTest extends TestCase
{
    public function testSomar()
    {
        $minhaClasse = new MinhaClasseAvancado();
        $this->assertEquals(3   , $minhaClasse->somar(1, 2));   //Soma de números positivos
        $this->assertEquals(0   , $minhaClasse->somar(0, 0));   //Soma de zeros
        $this->assertEquals(-1  , $minhaClasse->somar(-1, 0));  //Soma de número negativo com zero
    }

    public function testSomarArgumentosInválidos()
    {
        $minhaClasse = new MinhaClasseAvancado();
        $this->assertEquals('Um dos valores informados não é um número' , $minhaClasse->somar('a', 2));  //Soma de número com string
        $this->assertEquals('Um dos valores informados não é um número' , $minhaClasse->somar(2, null)); //Soma de número com null
    }

    public function testSubtrair()
    {
        $minhaClasse = new MinhaClasseAvancado();
        $this->assertEquals(1   , $minhaClasse->subtrair(3, 2));  //Subtração de números positivos
        $this->assertEquals(0   , $minhaClasse->subtrair(0, 0));  //Subtração de zeros
        $this->assertEquals(-1  , $minhaClasse->subtrair(1, 2));  //Subtração de número positivo com resultado negativo
    }

    public function testSubtrairArgumentosInválidos()
    {
        $minhaClasse = new MinhaClasseAvancado();
        $this->assertEquals('Um dos valores informados não é um número' , $minhaClasse->subtrair('a', 2));  //Subtração de número com string
        $this->assertEquals('Um dos valores informados não é um número' , $minhaClasse->subtrair(2, null)); //Subtração de número com null
    }
}