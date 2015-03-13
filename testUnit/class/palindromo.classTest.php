<?php

require_once '../class/palindromo.class.php';

class PalindromoTest extends PHPUnit_Framework_TestCase {

    protected $object;

    protected function setUp() {
        $this->object = new Palindromo;
    }

    public function testeIsPalindromo01() {
        $this->assertEquals(true, $this->object->isPolindromo("rodador"));
    }

    public function testeIsPalindromo02() {
        $this->assertEquals(true, $this->object->isPolindromo("Otto"));
    }

    public function testeIsPalindromo03() {
        $this->assertEquals(true, $this->object->isPolindromo("racificar"));
    }

}
