<?php

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Thor: Ragnarok";
$anoLancamento = $argv[1] ?? 2019;
$somaDeNotas = (6 + 5 + 9 + 10 + 7.5); 
$notaFilme = $somaDeNotas / 5;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

$genero = match ($nomeFilme) {
     "Top Gun - Maverick" => "ação",
     "Se beber não case"=> "comédia",
     "Thor: Ragnarok" => "super-herói",
};

echo "Nome do filme: $nomeFilme";
echo "Nota do filme: $notaFilme";
echo "Ano de lançamento: $anoLancamento";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento!\n";
} elseif ($anoLancamento > 2020 && $anoLancamento <=2022) {
    echo "Esse filme ainda é novo\n";
} else {
    echo "Esse filme não é um lançamento\n";
}

echo "O gênero do filme é: $genero"; 

