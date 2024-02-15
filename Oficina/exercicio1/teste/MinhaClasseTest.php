<?php

use PHPUnit\Framework\TestCase;
require_once 'MinhaClasse.php';

class MinhaClasseTest extends TestCase {
    public function testSomaNegativos() {
        $classe = new MinhaClasse();
        $this->assertEquals(-6, $classe->soma(-3, -3));
    }

    public function testSomaNegativoPositivo() {
        $classe = new MinhaClasse();
        $this->assertEquals(0, $classe->soma(-3, 3));
    }

    public function testSomaPositivoNegativo() {
        $classe = new MinhaClasse();
        $this->assertEquals(0, $classe->soma(3, -3));
    }

    public function testSomaPositivos() {
        $classe = new MinhaClasse();
        $this->assertEquals(6, $classe->soma(3, 3));
    }

    public function testSomaZeroPositivo() {
        $classe = new MinhaClasse();
        $this->assertEquals(3, $classe->soma(0, 3));
    }

    public function testSomaZeroNegativo() {
        $classe = new MinhaClasse();
        $this->assertEquals(-3, $classe->soma(0, -3));
    }

    public function testSomaPositivoZero() {
        $classe = new MinhaClasse();
        $this->assertEquals(3, $classe->soma(3, 0));
    }

    public function testSomaNegativoZero() {
        $classe = new MinhaClasse();
        $this->assertEquals(-3, $classe->soma(-3, 0));
    }

    public function testSomaZeros() {
        $classe = new MinhaClasse();
        $this->assertEquals(0, $classe->soma(0, 0));
    }
}

/*
    c) Crie um cenário de teste adicional que você acha relevante para garantir a robustez do
    método somar da classe MinhaClasse. Explique brevemente o propósito deste teste.

    R: Eu adicionei um método de teste para cada cenário possível de soma de dois números inteiros (positivos, negativos e zero)
    para garantir que a função soma() da classe MinhaClasse esteja funcionando sobre qualquer tipo de número inteiro.
