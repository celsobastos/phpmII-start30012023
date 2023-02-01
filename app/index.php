<?php

function func01() {
    echo 'Inicio Função 01 executada' . '<br>';
    try {
        func02();
    }
    catch (Throwable $e) {
        echo $e->getMessage() . '<br>';
        echo $e->getLine() . '<br>';
        echo $e->getTraceAsString() . '<br>';
        echo $e->getFile() . '<br>';
    }
    // catch (ArgumentCountError $e) {
    //     echo 'Ops! Desculpa o transtorno ArgumentCountError. <br>';
    // }

    echo 'Fim Função 01 executada' . '<br>';
}


function conta($saque) {
    $saldo = 200;

    if($saldo < $saque) {
       throw new DomainException('Ops! Saldo insuficiente!');
    }
    else {
        $saldo -= $saque;
    }
};

// function soma($n1, $n2) {
//     echo 'ok';
// }


function func02() {

    // $array = new SplFixedArray(5);
    // $array[5] = 40;
    //soma(1);
    // $calc = 8/0;

    conta(400);

    echo 'Inicio Função 02 executada' . '<br>';
    func03();
    echo 'Fim Função 02 executada' . '<br>';
}

function func03() {
    echo 'Inicio Função 03 executada' . '<br>';
}

echo 'Main sendo executado' . '<br>';
func01();
echo 'Fim do programa' . '<br>';
