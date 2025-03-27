<?php

    // BOOLEANOS

    // são variáveis com dois valores possiveis: verdadeio ou falso


    $apresentar_nome = true;
    $apresentar_idade = false;

    // os valores são case insensitive
    $mostrar = true; //o mesmo que $mostrar = true;

    // são variaveis usadas maioritariamente em estruturas de controle do fluxo do código
    // ciclos (loops) e instruções condicionais

    // nessa altura que podemos converter valores em booleanos.
    // tradicionalmente, o valor 0 é falso e qualquer outro valor é verdadeiro

    // podemos ainda determinar se uma variavel é booleana ou não
    var_dump(is_bool($mostrar)); // bool(true)

?>