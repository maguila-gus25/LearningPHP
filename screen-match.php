<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento!\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
    
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

function mediaNotas($notas, int $quantidadeDeNotas): float{
    return array_sum($notas) / $quantidadeDeNotas;
}

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = 6;
$somaDeNotas = 0;
$Notas = [];

for ($contador = 1; $contador < 6; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = mediaNotas($notas, $quantidadeDeNotas);
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Se beber não case" => "comédia",
    "Thor: Ragnarok" => "super-herói",
};

echo "Nome do filme: $nomeFilme\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

echo "O gênero do filme é: $genero\n";



$filme = [
    "nome" => "Thor", 
    "ano" => 2021, 
    "nota" => 7,8, 
    "genero" => "super-herói"];

echo $filme["nome"];