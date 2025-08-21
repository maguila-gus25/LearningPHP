<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme();
$filme->defineAnoLancamento(2021);
$filme->defineNome('Thor - Ragnarok');
$file->defineGenero('super-heroi');
/*
$filme->nome = 'Thor - Ragnarok';
$filme->anoLancamento = 2021;
$filme->genero = 'super-heroi';
*/
$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);

var_dump($filme);

echo $filme->media();

echo $filme->anoLancamento;
