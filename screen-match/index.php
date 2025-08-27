<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.phP";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";
 

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

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30); 

echo $serie->anoLancamento . "\n";

echo $serie->avalia(8);

echo $serie->media() . "\n";