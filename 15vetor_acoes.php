<?php

//vetor

$cursos = array("HTML", "CSS", "JavaScript", "PHP", "JAVA");

//cadastrar um novo curso

array_push($cursos, "C#");

// cadastrar outros cursos

array_push($cursos, "Angular", "Ionic", "Java Web");

// excluir um curso

array_splice($cursos, 0, 2);

//laço

for($indice=0; $indice<count($cursos);$indice++){
    echo $cursos[$indice]. "<hr>";
}