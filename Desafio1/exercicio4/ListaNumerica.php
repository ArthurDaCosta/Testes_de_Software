<?php

class ListaNumerica
{
    function somarElementos(array $lista)
    {
        return array_sum($lista);
    }

    function encontrarMaiorElemento(array $lista)
    {
        $maior = max($lista);
        return $maior;
    }

    function encontrarMenorElemento(array $lista)
    {
        $menor = min($lista);
        return $menor;
    }

    function ordenarLista(array $lista)
    {
        sort($lista);
        return $lista;
    }

    function filtarNumerosPares(array $lista)
    {
        $pares = [];
        foreach ($lista as $elemento) {
            if ($elemento % 2 == 0) {
                $pares[] = $elemento;
            }
        }
        return $pares;  
    }
}