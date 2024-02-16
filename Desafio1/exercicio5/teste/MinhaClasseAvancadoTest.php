<?php

use PHPUnit\Framework\TestCase;
require_once 'MinhaClasseAvancado.php';

class MinhaClasseAvancadoTest extends TestCase
{
    public function testSomar()
    {
        $minhaClasse = new MinhaClasseAvancado();
        $this->assertEquals(3                                           , $minhaClasse->somar(1, 2));
        $this->assertEquals(0                                           , $minhaClasse->somar(0, 0));
        $this->assertEquals(-1                                          , $minhaClasse->somar(-1, 0));
    }

    public function testSomarArgumentosInválidos()
    {
        $minhaClasse = new MinhaClasseAvancado();
        $this->assertEquals('Um dos valores informados não é um número' , $minhaClasse->somar('a', 2));
        $this->assertEquals('Um dos valores informados não é um número' , $minhaClasse->somar(2, null));
    }

    public function testSubtrair()
    {
        $minhaClasse = new MinhaClasseAvancado();
        $this->assertEquals(1, $minhaClasse->subtrair(3, 2));
        $this->assertEquals(0, $minhaClasse->subtrair(0, 0));
        $this->assertEquals(-1, $minhaClasse->subtrair(1, 2));
    }

    public function testSubtrairArgumentosInválidos()
    {
        $minhaClasse = new MinhaClasseAvancado();
        $this->assertEquals('Um dos valores informados não é um número', $minhaClasse->subtrair('a', 2));
        $this->assertEquals('Um dos valores informados não é um número', $minhaClasse->subtrair(2, null));
    }
}