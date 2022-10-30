<?php 
    // variaveis soma

    $soma1 = $_POST['soma1'];
    $soma2 = $_POST['soma2'];
    $somaresultado = $soma1 + $soma2;

    // variaveis subtração

    $subt1 = $_POST['subt1'];
    $subt2 = $_POST['subt2'];
    $subresultado = $subt1 - $subt2;

    // variaveis multiplicação

    $mult1 = $_POST['mult1'];
    $mult2 = $_POST['mult2'];
    $multresultado = $mult1 * $mult2;

    // variaveis divisão

    $div1 = $_POST['div1'];
    $div2 = $_POST['div2'];
    $divresultado = $div1/$div2;

    echo "<br>O resultado da soma dos números escolhidos é ".$somaresultado;
    echo "<br>O resultado da subtração dos números escolhidos é ".$subresultado;
    echo "<br>O resultado da multiplicação dos números escolhidos é ".$multresultado;
    echo "<br>O resultado da  divisão dos números escolhidos é ".$divresultado;
?>