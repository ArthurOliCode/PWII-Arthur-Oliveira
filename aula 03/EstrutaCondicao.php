<?php
    $x = 10;
    $y = 10;
    $media = ($x + $y) / 2;

    //media >= 6.0 = 'aprovado'
    //media < 6.0 && >= 4,0 = 'recuperação'
    //media < 4 = 'reprovado'
    
    if($media >= 6.0){
        //Caso seja verdadeira a afirmação
        echo "Aluno aprovado!";
    }else if($media >= 4.0){
        //Caso as duas variáveis sejam equivalentes
        echo "Aluno em recuperação!";
    }else{
        //Caso seja falsa a afirmação
        echo "Aluno reprovado!";
    }

?>