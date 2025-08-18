<?php

/**
 * Calcula o valor do Índice de Massa Corporal (IMC).
 *
 * @param float $peso O peso em quilogramas (ex: 70.5).
 * @param float $altura A altura em metros (ex: 1.75).
 * @return float O valor do IMC calculado.
 */
function calcularIMC(float $peso, float $altura): float
{
    // Apenas calcula e retorna o valor numérico, cumprindo a promessa do tipo float.
    return $peso / ($altura * $altura);
}

/**
 * Retorna a classificação do IMC com base no seu valor.
 *
 * @param float $imc O valor do IMC.
 * @return string A classificação textual (ex: "Peso normal").
 */
function classificarIMC(float $imc): string
{
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc < 25) { // Ajustado para corresponder à tabela padrão (até 24.9)
        return "Peso normal";
    } elseif ($imc < 30) { // Ajustado para corresponder à tabela padrão (até 29.9)
        return "Sobrepeso";
    } elseif ($imc < 35) { // Ajustado para corresponder à tabela padrão (até 34.9)
        return "Obesidade Grau 1";
    } elseif ($imc < 40) { // Ajustado para corresponder à tabela padrão (até 39.9)
        return "Obesidade Grau 2";
    } else {
        return "Obesidade Grau 3 (Mórbida)";
    }
}

// 1. Validação dos Argumentos de Linha de Comando
// $argc deve ser 3: [nome_do_script, altura, peso]
if ($argc !== 3) {
    echo "Erro: Forneça a altura e o peso como argumentos.\n";
    echo "Uso: php seu_script.php [sua_altura_em_metros] [seu_peso_em_kg]\n";
    echo "Exemplo: php seu_script.php 1.75 70\n";
    exit(1); // Encerra o script
}

// 2. Captura e Conversão dos Argumentos
$altura = (float)$argv[1];
$peso = (float)$argv[2];

// 3. Execução e Exibição dos Resultados
$valorIMC = calcularIMC($peso, $altura);
$classificacao = classificarIMC($valorIMC);

// Usamos number_format para exibir o IMC com 2 casas decimais
echo "Sua altura: $altura m\n";
echo "Seu peso: $peso kg\n";
echo "-----------------------\n";
echo "Seu IMC é: " . number_format($valorIMC, 2, ',', '.') . "\n";
echo "Classificação: " . $classificacao . "\n";

?>