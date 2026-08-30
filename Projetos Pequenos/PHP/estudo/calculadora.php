<?php

while (true) {
    
    echo "escolha a operacao, +, -, *, /(0 para sair): ";

    $operacao = readline();

    if ($operacao === "0") {
        break;
    }
    
    echo "digite primeiro numero: ";

    $n1 = (int) readline();

    echo "digite segundo numero: ";

    $n2 = (int) readline();

    switch ($operacao) {

        case "+":
            echo ($n1 + $n2) . PHP_EOL;
            break;

        case "-":
            echo ($n1 - $n2) . PHP_EOL;
            break;

        case "*":
            echo ($n1 * $n2) . PHP_EOL;
            break;

        case "/":
            if ($n2 == 0) {
                echo "erro: divisao por zero" . PHP_EOL;
            } else {
                echo ($n1 / $n2) . PHP_EOL;
            }
            break;


    default:
         echo "operacao invalida" . PHP_EOL;
    }

}