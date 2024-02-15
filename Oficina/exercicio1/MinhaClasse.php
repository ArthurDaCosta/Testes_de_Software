<?php

class MinhaClasse {
    public function soma($a, $b) {
        return $a + $b;
    }
}

/*
    c) Crie um cenário de teste adicional que você acha relevante para garantir a robustez do
    método somar da classe MinhaClasse. Explique brevemente o propósito deste teste.

    R: Eu adicionei um método de teste para cada cenário possível de soma de dois números inteiros (positivos, negativos e zero)
    para garantir que a função soma() da classe MinhaClasse esteja funcionando sobre qualquer tipo de número inteiro.