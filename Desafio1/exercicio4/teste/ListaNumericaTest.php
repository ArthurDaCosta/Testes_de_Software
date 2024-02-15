<?php

use PHPUnit\Framework\TestCase;
require_once 'ListaNumerica.php';

class ListaNumericaTest extends TestCase
{
    public function testSomarElementos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(10  , $listaNumerica->somarElementos([1, 2, 3, 4]));     //Soma de inteiros positivos
        $this->assertEquals(-10 , $listaNumerica->somarElementos([-1, -2, -3, -4])); //Soma de inteiros negativos
        $this->assertEquals(0   , $listaNumerica->somarElementos([-1, 2, 3, -4]));   //Soma de inteiros positivos e negativos
        $this->assertEquals(0   , $listaNumerica->somarElementos([0, 0, 0, 0]));     //Soma de zeros
        $this->assertEquals(1   , $listaNumerica->somarElementos([1]));              //Soma de um elemento positivo
        $this->assertEquals(-2  , $listaNumerica->somarElementos([-2]));             //Soma de um elemento negativo
        $this->assertEquals(0   , $listaNumerica->somarElementos([0]));              //Soma de um elemento zero
        $this->assertEquals(0   , $listaNumerica->somarElementos([]));               //Soma de lista vazia
    }

    public function testEncontrarMaiorElemento()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(4               , $listaNumerica->encontrarMaiorElemento([1, 2, 3, 4]));     //Maior elemento números positivos
        $this->assertEquals(-1              , $listaNumerica->encontrarMaiorElemento([-1, -2, -3, -4])); //Maior elemento números negativos
        $this->assertEquals(3               , $listaNumerica->encontrarMaiorElemento([-1, 2, 3, -4]));   //Maior elemento números positivos e negativos
        $this->assertEquals(0               , $listaNumerica->encontrarMaiorElemento([0, 0, 0, 0]));     //Maior elemento zeros
        $this->assertEquals(1               , $listaNumerica->encontrarMaiorElemento([1]));              //Maior elemento de um elemento positivo
        $this->assertEquals(-2              , $listaNumerica->encontrarMaiorElemento([-2]));             //Maior elemento de um elemento negativo
        $this->assertEquals(0               , $listaNumerica->encontrarMaiorElemento([0]));              //Maior elemento de um elemento zero
        $this->assertEquals("Lista Vazia"   , $listaNumerica->encontrarMaiorElemento([]));               //Maior elemento de lista vazia
    }

    public function testEncontrarMenorElemento()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(1               , $listaNumerica->encontrarMenorElemento([1, 2, 3, 4]));     //Menor elemento números positivos
        $this->assertEquals(-4              , $listaNumerica->encontrarMenorElemento([-1, -2, -3, -4])); //Menor elemento números negativos
        $this->assertEquals(-4              , $listaNumerica->encontrarMenorElemento([-1, 2, 3, -4]));   //Menor elemento números positivos e negativos
        $this->assertEquals(0               , $listaNumerica->encontrarMenorElemento([0, 0, 0, 0]));     //Menor elemento zeros
        $this->assertEquals(1               , $listaNumerica->encontrarMenorElemento([1]));              //Menor elemento de um elemento positivo
        $this->assertEquals(-2              , $listaNumerica->encontrarMenorElemento([-2]));             //Menor elemento de um elemento negativo
        $this->assertEquals(0               , $listaNumerica->encontrarMenorElemento([0]));              //Menor elemento de um elemento zero
        $this->assertEquals("Lista Vazia"   , $listaNumerica->encontrarMenorElemento([]));               //Menor elemento de lista vazia
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