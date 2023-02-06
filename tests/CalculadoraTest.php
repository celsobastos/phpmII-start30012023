<?php

use PHPUnit\Framework\TestCase;
use Banco\Services\Calculadora;

class CalculadoraTest extends TestCase {

    /**
     * @covers ::soma
     */
    public function testSoma() {
        $calc = new Calculadora();
        $resultado = $calc->soma(1, 2);

        $this->assertEquals(3, $resultado);
    }

}