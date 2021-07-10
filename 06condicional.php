<?php
    //variável
    $media = 4;

    //condicionais
    if($media == 10){
        echo "Parabéns";
    }elseif($media >=9){
        echo "Ótimo";
    }elseif($media >=8){
        echo "Bom";
    }elseif($media >=7){
        echo "Na média";
    }elseif($media >=5){
        echo "Em exame";
    }else{
        echo "Reprovado";
    }

?>