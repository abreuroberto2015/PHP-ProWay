<?php

// Vetor

$cursos = array("PHP"=>"Desenvolvimento",  "SEO"=>"Marketing",  "Photoshop"=>"Design");

// Exibir os valores do array

foreach($cursos as $curso => $area){
    echo "Curso: ".$curso." pertence a área de : ".$area."<br>";
}

?>