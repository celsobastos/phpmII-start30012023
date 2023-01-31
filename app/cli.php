<?php

echo 'Digite seu nome:';
$input = fgets(STDIN);

echo "Boa noite $input";
echo PHP_EOL;

function soma (float $add, float $soma) {
    return 'Soma é ' . $add + $soma;
}

if(count($argv) > 1) {
    if(is_numeric($argv[1])) {
       $valor = $argv[1]; 
       var_dump(soma($valor, 10)) . PHP_EOL;
    }
}
