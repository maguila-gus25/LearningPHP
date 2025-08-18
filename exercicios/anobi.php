<?php

// Defina o ano que você deseja verificar.
$ano = $argv[1];

// Lógica para verificar se o ano é bissexto.
// A condição verifica se o ano é divisível por 4 E não é divisível por 100,
// OU se o ano é divisível por 400.
if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "O ano $ano é bissexto.\n";
} else {
    echo "O ano $ano não é bissexto.\n";
}