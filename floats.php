<?php

    //FLOATS 

    // São números que têm casa decimais.

    $valor1 = 123.5;
    echo $valor1;

    //verificar o tipo de valor
    echo '<br>';
    var_dump($valor1);

    //também podem ser definidos desta forma:
    echo '<br>';   
    $valor2 = 1_150.65;
    echo $valor2;

    // FLOATS

    // Tal como os inteiros, o valor mínimo e máximo depende da plataforma 32 ou 64 bits.
    
    echo PHP_FLOAT_MIN;
    echo '<br>';    
    echo PHP_FLOAT_MAX;
    echo '<br>';   


    // Infinity - INF - O valor é demasiado elevado para ser apresentado
    $valor = PHP_FLOAT_MAX * 2;
    echo $valor;
    echo '<br>';
    var_dump($valor);

    // converter para float
    echo '<br>';
    $valor = 10;
    $valor_float = (float) $valor;
    echo $valor_float;
    echo '<br>';
    var_dump($valor_float);

    // ou ainda
    echo '<br>';
    $valor = 10;
    $valor_float = floatval($valor);
    echo $valor_float;
    echo '<br>';
    var_dump($valor_float);