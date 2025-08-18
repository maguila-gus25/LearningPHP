<?php

function celsiusParaFahrenheit(float $celsius): float
{
   return ($celsius * 1.8) + 32;
}

if ($argc !== 2) {
    echo "Erro: Forneça a temperatura em Celsius como argumento.\n";
    echo "Uso: php seu_script.php [temperatura_em_celsius]\n";
    echo "Exemplo: php seu_script.php 25\n";
    exit(1);
}

$grausCelsius = (float)$argv[1];

$grausFahrenheit = celsiusParaFahrenheit($grausCelsius);

echo "$grausCelsius °C é igual a " . number_format($grausFahrenheit, 1, ',', '') . " °F\n";