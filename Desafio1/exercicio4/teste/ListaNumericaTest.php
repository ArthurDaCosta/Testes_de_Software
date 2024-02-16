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
        $this->assertEquals([1, 2, 3, 4]        , $listaNumerica->ordenarLista([1, 2, 3, 4]));     //Ordenar números positivos
        $this->assertEquals([-4, -3, -2, -1]    , $listaNumerica->ordenarLista([-1, -2, -3, -4])); //Ordenar números negativos
        $this->assertEquals([-4, -1, 2, 3]      , $listaNumerica->ordenarLista([-1, 2, 3, -4]));   //Ordenar números positivos e negativos
        $this->assertEquals([0, 0, 0, 0]        , $listaNumerica->ordenarLista([0, 0, 0, 0]));     //Ordenar zeros
        $this->assertEquals([1]                 , $listaNumerica->ordenarLista([1]));              //Ordenar um elemento positivo
        $this->assertEquals([-2]                , $listaNumerica->ordenarLista([-2]));             //Ordenar um elemento negativo
        $this->assertEquals([0]                 , $listaNumerica->ordenarLista([0]));              //Ordenar um elemento zero
        $this->assertEquals("Lista Vazia"       , $listaNumerica->ordenarLista([]));               //ordenar lista vazia
    }

    public function testFiltarNumerosPares()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals([2, 4]              , $listaNumerica->filtarNumerosPares([1, 2, 3, 4]));     //Filtrar números pares positivos
        $this->assertEquals([-2, -4]            , $listaNumerica->filtarNumerosPares([-1, -2, -3, -4])); ///Filtrar números pares negativos
        $this->assertEquals([2, -4]             , $listaNumerica->filtarNumerosPares([-1, 2, 3, -4]));   //Filtrar números pares positivos e negativos
        $this->assertEquals([0, 0, 0, 0]        , $listaNumerica->filtarNumerosPares([0, 0, 0, 0]));     //Filtrar zeros
        $this->assertEquals([]                  , $listaNumerica->filtarNumerosPares([1]));              //Filtrar um elemento positivo
        $this->assertEquals([-2]                , $listaNumerica->filtarNumerosPares([-2]));             //Filtrar um elemento negativo
        $this->assertEquals([0]                 , $listaNumerica->filtarNumerosPares([0]));              //Filtrar um elemento zero
        $this->assertEquals("Lista Vazia"       , $listaNumerica->filtarNumerosPares([]));               //Filtrar lista vazia
    }
} 