<?php

$somaNotas = $argv[1];
$somaNotas += $argv[2];
$somaNotas += $argv[3];

$mediaNotas = $somaNotas / 3; 

echo "Média das notas: $mediaNotas";