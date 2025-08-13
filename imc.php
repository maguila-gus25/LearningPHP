<?php

$altura = $argv[1];
$peso = $argv[2];

$imc = $peso / ($altura * $altura);

echo "Seu imc e $imc\n";


if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc < 24.9) {
    echo "Peso normal";
} elseif ($imc < 29.9) {
    echo "Sobrepeso";
} elseif ($imc < 34.9) {
    echo "Obesidade Grau 1";
} elseif ($imc < 39.9) {
    echo "Obesidade Grau 2";
} else {
    echo "Obesidade Grau 3";
}