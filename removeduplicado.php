<?php

$arrayOriginal = [1, 2, 2, 3, 4, 4, 5];

$arraySemDuplicatas = array_unique($arrayOriginal);

$arrayFinal = array_values($arraySemDuplicatas);

echo "Array original: ";
print_r($arrayOriginal);
echo "<br>";

echo "Array Resultante: ";
print_r($arrayFinal);
