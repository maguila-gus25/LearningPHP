<?php

require __DIR__ . "/funcoes.php";

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

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
var_dump($menorNota); 

var_dump($filme['nome']); 
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos)); 