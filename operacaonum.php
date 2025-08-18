<?php

// A sua função está perfeita, não precisa de alteração.
function calcular(int $num1, string $operacao, int $num2)
{
    switch ($operacao) {
        case 'soma':
        case '+':
            return $num1 + $num2;

        case 'subtracao':
        case '-':
            return $num1 - $num2;

        case 'multiplicacao':
        case '*':
            return $num1 * $num2;

        case 'divisao':
        case '/':
            if ($num2 == 0) {
                return "Erro: Divisão por zero não é permitida.";
            }
            return $num1 / $num2;

        default:
            return "Erro: Operação inválida. Use 'soma', 'subtracao', 'multiplicacao' ou 'divisao'.";
    }
}

// $argc é uma variável especial que contém a CONTAGEM de argumentos.
// Esperamos 4: 1 (nome do script) + 3 (seus argumentos).
if ($argc !== 4) {
    echo "Uso: php operacaonum.php [numero1] [operacao] [numero2]\n";
    echo "Exemplo: php operacaonum.php 10 + 5\n";
    exit(1); // Encerra o script com um código de erro.
}


// **AQUI ESTÁ A CORREÇÃO PRINCIPAL**
// Pegamos os valores de $argv e os colocamos nas variáveis.
// Usamos (int) para garantir que os números sejam tratados como inteiros.
$num1 = (int)$argv[1];
$operacao = $argv[2];
$num2 = (int)$argv[3];


// Agora as variáveis têm valores e a função pode ser chamada.
$resultado = calcular($num1, $operacao, $num2);

// Adicionamos "\n" para quebrar a linha no terminal.
echo $resultado . "\n";