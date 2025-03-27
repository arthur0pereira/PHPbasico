<?php

    //  INTEIROS (INT)
    
    // são números sem casas decimais, positivos, negativos ou o zero

    $valor1 = 100;
    $valor2 = 233454536;
    $valor3 = 0;
    $valor4 = -12334;

    // em sistemas de 32 bits e 64 bits, temos limites máximos e minimos diferentes


    // podemos ver os limites usando constantes nativas do PHP
    echo PHP_INT_MAX; // 9223372036854775807
    echo PHP_INT_MIN; // -9223372036854775808

    // os valores são normalmentes definidos com números inteiros
    $valor1 = 100;
    echo $valor1 . '<br>'; // 100

    // mas podem ser definidos com valores hexadecimais
    $valor2 = 0x100;
    echo $valor2 . '<br>'; // 256

    // ou ainda no sistema octal
    $valor3 = 0100;
    echo $valor3 . '<br>'; // 64

    // ou ainda com valores binários
    $valor4 = 0b100;
    echo $valor4 . '<br>'; // 4


    // vejamos o que acontece qunado ultrapassamos os limites do valor inteiro
    $valor_ultrapassado = PHP_INT_MAX + 1;
    echo $valor_ultrapassado . '<br>';
    var_dump($valor_ultrapassado); // float(9223372036854775808)
    echo '<br>';
?>