<?php
    $x = "Hello World!";
    $y = "Hello World!";

    var_dump($x);
    echo"<br>";
    var_dump($y);
    echo"<br>";

    $x = 12.3;
    
    var_dump($x);
    echo"<br><br>";

    $y = ['Felipe', 'Gusmão', 2];

    var_dump($y);
    echo"<br>";
    echo $y[1];
    echo"<br>";

    $meuObj = new stdClass();
    $meuObj -> nome = "Davi";
    $meuObj -> idade = 32;
    $meuJson = json_encode($meuObj);
    echo $meuJson;
?>