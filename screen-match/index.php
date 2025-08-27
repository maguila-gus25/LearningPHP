<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor: Ragnarok',
    2021,
    Genero::SuperHeroi,
    180
);
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
