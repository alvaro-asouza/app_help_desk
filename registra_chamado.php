<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    //estamos trabalhando na montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    implode('#', $_POST); //transforma o array em uma string

    $texto = $titulo . '#' . $categoria . '#' . $descricao . '#' . PHP_EOL;

    //estamos abrindo o arquivo 
    $arquivo = fopen('arquivo.hd', 'a');
    //escrevendo o texto
    fwrite($arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);

    // echo $texto;

?>