<?php

class StringManipulator
{
    function capitalizeString($str)
    {
        return strtoupper($str);
    }

    function concatenateStrings($str1, $str2)
    {
        return $str1 . $str2;
    }

    function countVowels($str)
    {
        $normalized = Normalizer::normalize($str, Normalizer::NFD);
        $str = preg_replace('/[\x{0300}-\x{036F}]/u', '', $normalized);
        return preg_match_all('/[aeiou]/i', $normalized);
    }
}