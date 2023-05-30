<?php
/*
$arquivo = fopen('cursos-php.txt', 'a');

$curso = "\nDesign Patterns PHP II";

fwrite($arquivo, $curso);

fclose($arquivo);
*/
////////////////////////////////////////////////////////////////

$curso = "\nDesign Patterns II";

file_put_contents('cursos-php.txt', $curso, FILE_APPEND);