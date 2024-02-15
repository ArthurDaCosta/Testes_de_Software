<?php

use PHPUnit\Framework\TestCase;
require_once 'StringManipulator.php';

class StringManipulatorTest extends TestCase
{
    public function testCapitalizeString()
    {
        $manipulator = new StringManipulator();
        $this->assertEquals('', $manipulator->capitalizeString(''));
    }

    public function testConcatenateStrings()
    {
        $manipulator = new StringManipulator();
        $this->assertEquals('  ', $manipulator->concatenateStrings(' ', ' '));
    }

    public function testCountVowels()
    {
        $manipulator = new StringManipulator();
        $this->assertEquals(0, $manipulator->countVowels(''));
        $this->assertEquals(4, $manipulator->countVowels('Atirei'));
        $this->assertEquals(1, $manipulator->countVowels('o'));
        $this->assertEquals(2, $manipulator->countVowels('PaU'));
        $this->assertEquals(1, $manipulator->countVowels('no'));
        $this->assertEquals(2, $manipulator->countVowels('GATO'));
        $this->assertEquals(1, $manipulator->countVowels(' tô'));
        $this->assertEquals(2, $manipulator->countVowels(' áô'));
        $this->assertEquals(2, $manipulator->countVowels(' áô '));
        $this->assertEquals(0, $manipulator->countVowels(' tttrrrtrtrtwdf'));
        $this->assertEquals(2, $manipulator->countVowels(' ÁÔ '));
        $this->assertEquals(2, $manipulator->countVowels(' Á Ô '));
        $this->assertEquals(2, $manipulator->countVowels('a o'));
        $this->assertEquals(2, $manipulator->countVowels('a o '));
        $this->assertEquals(2, $manipulator->countVowels(' a o'));
        $this->assertEquals(2, $manipulator->countVowels(' a o '));
        $this->assertEquals(2, $manipulator->countVowels('ç a o ç'));
    }
}