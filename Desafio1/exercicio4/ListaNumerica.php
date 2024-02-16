<?php

class ListaNumerica
{
    function somarElementos(array $lista)
    {
        return array_sum($lista);
    }

    function encontrarMaiorElemento(array $lista)
    { 
        if(empty($lista))
            return $maior = "Lista Vazia";

        $maior = max($lista);
        
        return $maior;
    }

    function encontrarMenorElemento(array $lista)
    {
        if(empty($lista))
            return $menor = "Lista Vazia";

        $menor = min($lista);

        return $menor;
    }

    function ordenarLista(array $lista)
    {
        if(empty($lista))
            return $menor = "Lista Vazia";

        sort($lista);

        return $lista;
    }

    function filtarNumerosPares(array $lista)
    {
        if(empty($lista))
            return $menor = "Lista Vazia";

        $pares = [];
        foreach ($lista as $elemento) {
            if ($elemento % 2 == 0) {
                $pares[] = $elemento;
            }
        }

        return $pares;  
    }
}