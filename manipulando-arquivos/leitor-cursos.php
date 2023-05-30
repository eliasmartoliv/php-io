<?php

/*
 * Algumas maneiras de ler um arquivo.
 * Entendendo como o PHP trabalha por baixo dos panos.
 * Limite de leitura 128MB.
*/

// Primeira maneira:
// Abrindo um arquivo em modo de leitura:
$arquivo = fopen('lista-cursos.txt', 'r');

// Enquanto não chegar no fim do arquivo leia cada linha do arquivo:
while (!feof($arquivo)) {
    $cursos = fgets($arquivo);

    echo $cursos;
}
// Boa prática fechar o arquivo após leitura:
fclose($arquivo);

///////////////////////////////////////////////////////////////////////

// Segunda maneira:
// Abrindo um arquivo em modo de leitura:
$arquivo = fopen('lista-cursos.txt', 'r');

// Função filesize obtém o tamanho do arquivo:
$tamanhoDoArquivo = filesize('lista-cursos.txt');

/* Função fread recebe por parâmetro o arquivo e o tamanho em bytes que deseja ler.
   Nesse caso, como desejamos ler
   parâmetro variável com valor obtido pela função filezise: */
$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);

///////////////////////////////////////////////////////////////////////

/*
 * Terceira maneira:Por meio da função file_get_contents:
 * Recebe o nome do arquivo por parâmetro e faz o trabalho das outras funções juntas:
 * Abre, lê e fecha o arquivo.
 */

$cursos = file_get_contents('lista-cursos.txt');

echo $cursos;

///////////////////////////////////////////////////////////////////////

//Quarta maneira: Abrir como array:

$cursos = file('lista-cursos.txt');

var_dump($cursos);