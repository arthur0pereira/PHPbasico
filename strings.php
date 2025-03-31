<?php

  //  STRINGS

    // Uma string é um conjunto de caracteres.
    // Já vimos muitas strings ao longo do módulo.
    // Vamos relembrar alguns dos conceitos e acrescentar novas informações.

    $nome = 'Joao';
    $apelido = 'Ribeiro';

    // As duas variáveis são do tipo string;
    // Diferença: nas aspas duplas, podemos adicionar variáveis no interior

    $apresentacao = "O meu nome é $nome e o apelido é $apelido";


    // Podemos melhorar a leitura com a seguinte equivalência;
    $apresentacao = "O meu nome é ${nome} e o apelido é ${apelido}";
    // ou
    $apresentacao = "O meu nome é {$nome} e o apelido é {$apelido}";

    //------------------------------------------------------------------------------
    //  CONCATENAÇÃO de strings

    $nome_completo = $nome . ' ' . $apelido;
    
    //------------------------------------------------------------------------------
    // Como obter a primeira letra do nome?

    echo $nome[0] . '<br>'; // Vamos falar de arrays em breve

     // para obter a terceira letra
     echo $nome[2] . '<br>'; // o índice começa em 0
     

     // J o â o
     // 0 1 2 3

    // Para acessar as letras da direita para a esquerda
    // podemos usar npumeros negativos
    echo $nome[-1] . '<br>'; // o último elemento da string

    // Podemos usar este método para modificar letrar
    $apelido[0] = 'B' .'<br>';
    echo $apelido; 

    // Outras duas formas de definir strings (menos usadas) são:
        // Heredoc 

        $texto1 = <<<TEXT
        frase 1
        frase 2
        frase 3
        TEXT;

        echo $texto1; // as linhas vão apareer sem quebras

        echo nl2br($texto1); // as linhas vão aparecer com quebras

        // Nowdoc
        $texto2 = <<<'TEXT'
        frase 1
        frase 2
        frase 3
        TEXT;

        echo nl2br($texto2); // as linhas vão aparecer com quebras
        // o Nowdoc não interpreta variáveis, enquanto o heredoc sim

        // Heredoc e nowdoc pode ser um recurso interessante para criar textos mais longos

        $valor1 = 100;
        $valor2 = 200;
        $texto3 = 300;

        $relatorio = <<<TEXT
        O valor 1 é $valor1
        O valor 2 é $valor2 
        O valor 3 é $texto3
        TEXT;

        echo nl2br($relatorio); // as linhas vão aparecer com quebras

        // ou então para apresentar HTML
        $html = <<<HTML
        <h1>Título</h1>
        <hr>
        <p>Texto para efeito de testes</p>
        HTML;

        echo $html;
        
        echo '--------------------------------------------------------------------------- <br>';
        // Um aspecto importante nas strings: o PHP contém um vasto conjunto dde
        // funções para efeturar operações com strings.
        
        $frase = "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod.";

        // apresentar npumero de caracters de uma string
        echo strlen($frase) . '<br>';

        // Transformar todas as letras em maiusculas
        echo strtoupper($frase) . '<br>';

        // apresentar apenas parte da frase
        echo substr($frase, 0, 20) . '<br>'; // 0 é o índice inicial e 5 é o número de caracteres a apresentar

        // Verifica se uma palavra existe dentro da string
        echo str_contains($frase, 'consectetur') . '<br>'; // retorna true ou false

        // Existem várias dezenas de funções para strings.
    

?>