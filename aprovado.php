<?php

$notasAlunos = [8.5, 5.0, 10.0, 4.8, 7.5, 6.0, 9.2];

echo "Verificação de Notas dos Alunos\n";

// O loop começa aqui
foreach ($notasAlunos as $indice => $nota) {

    // Toda a lógica ABAIXO é executada para CADA aluno

    $situacao = '';

    if ($nota > 6) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }

    // O 'echo' DEVE ESTAR AQUI DENTRO para ser executado 7 vezes
    echo "Aluno " . ($indice + 1) . ": Nota " . $nota . " - Situação: " . $situacao . ".\n";

} // O loop termina aqui

// Se o 'echo' estivesse aqui fora, ele só executaria uma vez com os dados do último aluno.

?>