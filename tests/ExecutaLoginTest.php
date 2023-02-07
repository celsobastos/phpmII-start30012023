<?php

use PHPUnit\Framework\TestCase;
use Banco\Services\ExecutaLogin;
use Banco\Model\Pessoas\Diretor;

/**
 * @coversDefaultClass Banco\Services\Calculadora
 * @testdox Executando tests
 */
class ExecutaLoginTest extends TestCase {

    public function _testExecutaBonificacao() {

        /** @var Banco\Model\Pessoas\Diretor|\PHPUnit\Framework\MockObject\MockObject $diretor */
        $diretor = $this->createMock(Diretor::class);

        $diretor
            ->expects($this->once())
            ->method('bonificacao')
            ->with(0.1);

        $excLogin = new ExecutaLogin();
        $excLogin->executaBonificao($diretor, 0.1);

    }

    public function testValidaNome() {

        $diretor = $this->createMock(Diretor::class);

        $diretor
            ->expects($this->exactly(2))
            ->method('verificaNome')
            //->with('fsfasdfad')
            ->willReturn(true);

        $excLogin = new ExecutaLogin();
        $result = $excLogin->getNome('test 123', $diretor);

        $this->assertTrue($result);
    }
}