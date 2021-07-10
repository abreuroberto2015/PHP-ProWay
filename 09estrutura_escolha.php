<?php

    //variavel
    $curso = "hhp";

    //estrutura de escolha
    switch($curso){
        case "html":
        echo "Linguagem de marcação web";
        break;

        case "css":
        echo "Linguagem de estilos web";
        break;
        
        case "php":
        echo "Linguagem de desenvolvimento web";
        break;

        default:
        echo "Curso não cadastrado";

    }
?>