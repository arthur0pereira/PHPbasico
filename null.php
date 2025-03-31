<?php

    // NULL

    // é um tipo especial de dado.
    // representa uma variável sem valor ou com valor null

    $valor = null; // (case-insensitive)
    echo "valor: $valor";
    var_dump($valor);
    echo "<br>";
    var_dump('teste');

    // var_dump($numero);
    // echo '<br>';

    $valor2 = 100;
    echo $valor2;
    unset($valor2);
    echo $valor2;
    var_dump($valor2);
    

    // NULL

    $valor = null;
    if(is_null($valor)){
        echo "A variável valor é nula";
    }

    echo '<br>';

    if(empty($valor)){
        echo "A variável valor está vazia";
    }