<?php

use PHPUnit\Framework\TestCase;
use Banco\Services\Calculadora;

/**
 * @coversDefaultClass Banco\Services\Calculadora
 * @testdox Executando tests
 */
class CalculadoraTest extends TestCase {

    /**
     * Provider para testSoma
     */
    // public function testProviderSoma(): \Generator {
    //     yield "test provider 1" => [
    //         'parametro1' => 1,
    //         'parametro2' => 2,
    //         'esperado'   => 3,
    //     ];

    //     yield "test provider 2" => [
    //         'parametro1' => -1,
    //         'parametro2' => 2,
    //         'esperado'   => false,
    //     ];

    //     yield "test provider 3" => [
    //         'parametro1' => 155,
    //         'parametro2' => 5,
    //         'esperado'   => 160,
    //     ];
    // }

    public function providerSoma()
    {
        return [
            'data set 1' => [1, 2, 3],
            'data set 2' => [-1, 2, false],
            'data set 3' => [100, 100, 200],
        ];
    }

    /**
     * @covers ::soma
     * @dataProvider providerSoma
     * @testdox
     */
    public function testSoma() {
        $calc = new Calculadora();
        $resultado = $calc->soma(1, 2);
        $this->assertSame(3, $resultado);
    }
}