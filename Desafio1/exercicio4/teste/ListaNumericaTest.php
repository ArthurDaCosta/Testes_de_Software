<?php

use PHPUnit\Framework\TestCase;
require_once 'ListaNumerica.php';

class ListaNumericaTest extends TestCase
{
    public function testSomarElementos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(10, $listaNumerica->somarElementos([1, 2, 3, 4]));
        $this->assertEquals(-10, $listaNumerica->somarElementos([-1, -2, -3, -4]));
        $this->assertEquals(0, $listaNumerica->somarElementos([-1, 2, 3, -4]));
        $this->assertEquals(0, $listaNumerica->somarElementos([0, 0, 0, 0]));
    }

    public function testEncontrarMaiorElemento()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(4, $listaNumerica->encontrarMaiorElemento([1, 2, 3, 4]));
    }

    public function testEncontrarMenorElemento()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(1, $listaNumerica->encontrarMenorElemento([1, 2, 3, 4]));
    }

    public function testOrdenarLista()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals([1, 2, 3, 4], $listaNumerica->ordenarLista([4, 3, 2, 1]));
    }

    public function testFiltarNumerosPares()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals([2, 4], $listaNumerica->filtarNumerosPares([1, 2, 3, 4]));
    }
} 