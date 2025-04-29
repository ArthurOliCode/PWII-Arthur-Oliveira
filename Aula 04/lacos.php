<?php
    echo "<h3>While</h3>";
    //While

    $contador = 1;

    while($contador < 6){
        echo $contador, "<br>";
        $contador++;
    }

    echo "<h3>Do While</h3>";
    //Do while

    $contador2 = 6;

    do{
        echo $contador2, "<br>";
        $contador2++;
    }while($contador2 < 6);

    echo "<h3>For</h3>";
    //For

    for($contadorFor = 0; $contadorFor <= 10; $contadorFor++){
        echo "O número é: $contadorFor <br>";
    }
?>