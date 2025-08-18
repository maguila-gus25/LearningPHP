<?php

function calcularIMC(float $peso, float $altura): float
{
    return $peso / ($altura * $altura);
}

function classificarIMC(float $imc): string
{
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc < 25) { 
        return "Peso normal";
    } elseif ($imc < 30) { 
        return "Sobrepeso";
    } elseif ($imc < 35) { 
        return "Obesidade Grau 1";
    } elseif ($imc < 40) { 
        return "Obesidade Grau 2";
    } else {
        return "Obesidade Grau 3 (Mórbida)";
    }
}


if ($argc !== 3) {
    echo "Erro: Forneça a altura e o peso como argumentos.\n";
    echo "Uso: php seu_script.php [sua_altura_em_metros] [seu_peso_em_kg]\n";
    echo "Exemplo: php seu_script.php 1.75 70\n";
    exit(1);
}

$altura = (float)$argv[1];
$peso = (float)$argv[2];

$valorIMC = calcularIMC($peso, $altura);
$classificacao = classificarIMC($valorIMC);

echo "Sua altura: $altura m\n";
echo "Seu peso: $peso kg\n";
echo "-----------------------\n";
echo "Seu IMC é: " . number_format($valorIMC, 2, ',', '.') . "\n";
echo "Classificação: " . $classificacao . "\n";

?>