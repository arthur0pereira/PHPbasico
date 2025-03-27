<?php

    // DATA TYPES - TIPOS DE DADOS

    // As variáveis (assim como as constantes).garda valores de m determinado tipo.
    // No php as variáveis não são tipadas.
    // Isso vai ser mais complexo de processar e pode gerar erros.

    //------------------------------------------------
    //ripo de dados escalares

    // bool / booleano - aceita valores verdadeiro ou falso (true ou false)
    $apresentar_dados = true;


    //int / inteiro - aceita valores inteiros
    $valor = 0;
    $valor1 = 1234567890;
    $valor2 = -3434555;

    //float - valores flutuantes (Números com casas decimais)
    $float1 = 1.5;
    $float2 = 2356.3456;
    $float3 = 0.00232;
    $float4 = -0.45;

    //string - valores alfanuméricos (letras, palavras, frases, números, ...)
    $nome = 'joao';
    $apelido = 'ribeiro';
    $letra_escolhidas = "A";
    $frase_do_dia = "lorem ipsum dolor sit amet";

    //------------------------------------------------

    echo $apresentar_dados . "<br>"; // caso específico dos booleanos
    echo $valor . "<br>";
    echo $valor1 . "<br>";
    echo $valor2 . "<br>";
    echo '------------------' . "<br>";
    echo $float1 . "<br>";
    echo $float2 . "<br>";
    echo $float3 . "<br>";
    echo $float4 . "<br>";
    echo '------------------' . "<br>";
    echo $nome . "<br>";
    echo $apelido . "<br>";
    echo $letra_escolhidas . "<br>";
    echo $frase_do_dia . "<br>";
    echo '------------------' . "<br>";

    // apresentar os tipos de cada variável
    echo gettype($apresentar_dados) . "<br>";
    echo gettype($valor) . "<br>";
    echo gettype($valor1) . "<br>";
    echo gettype($valor2) . "<br>";

    echo '------------------' . "<br>";
    //apresentar infomações da variavel
    var_dump($apresentar_dados);
    echo "<br>";
    var_dump($valor);
    echo "<br>";
    var_dump($nome);


    // DATA TYPES - TIPOS DE DADOS

    /*
    Existem outros tipos de dados mais avançados.

    Tipos compostos
    --------------------------------
    > arrays
    > objects
    > callable
    > iterable

    tipos especiais 
    --------------------------------
    > resource
    > NULL
    */

?>