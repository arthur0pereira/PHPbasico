<?php 

    // Definindo uma constante
    // ao contrario das variaveis, as têm valores que não podem ser alterados


    // Definindo uma constante
    define('nome', 'valor');


    // por convenção, as constantes são definidas em letras maiusculas
    define('TAXA_FIXA', 10);
    define('APRESENTAR_DADOS', false);

    // apresentar o valor de uma constante
    echo TAXA_FIXA; // 10

    // usar o valor de uma constante
    $preco_inicial = 500;
    $preco_final = $preco_inicial + TAXA_FIXA;
    echo $preco_final; // 510

    // Não podemos alterar o valor de uma constante
    // TAXA_FIXA = 100; // erro


    // também podemos definir constantes com a expressão const

    const NOME = 'joao';
    echo NOME;

    /*
    Esta forma de definição de constantes não é muiro utilizada.
    Com define, é posssível definir constante em qualquer lugar do código.
    Com const, existeem estruturas dentro das quais não podemos criar as constantes
    */


    // O PHP tem as suas proprias constantes.

    echo PHP_VERSION; // 7.4.3
    echo '<br>';

    // e tem um tipo de constantes que são definidas de forma dinâmica.
    // são designadas por constantes mágicas

    echo "Estou a execcutar este código na linha" . __LINE__ . '<br>';

?>