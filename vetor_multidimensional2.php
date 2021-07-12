<?php

// Vetor

$cursos = array(
    array("PHP", "Desenvolvimento", 700),
    array("Java", "Desenvolvimento", 980),
    array("Photoshop", "Design", 500),
    array("C#", "Desenvolvimento", 920)
);

// Exibir cursos

for($linha=0; $linha<count($cursos); $linha++){

    for($coluna=0; $coluna<count($cursos[0]); $coluna++){
        echo $cursos[$linha][$coluna]."<br>";
    }
    echo "<hr>";
}

?>