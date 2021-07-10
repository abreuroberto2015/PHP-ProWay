<?php

    /*
    && = E
    || = OU
    ! = NÂO
    */

    //variaveis
    $valor = 1300;
    $pagamento = "a vista";

    //condicional
    if(($valor > 100) && ($pagamento == "a vista")){
        echo "Desconto de 10%!<br>".$valor*0.90;
    } else{
        echo "Sem desconto !<br>".$valor;
    }


?>