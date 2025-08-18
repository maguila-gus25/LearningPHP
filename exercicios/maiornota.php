<?php 

$notas = [7.5, 9.8, 8.0, 6.2, 9.8, 10.0, 5.4, 8.9, 9.5];

echo "Array original de notas: \n";
print_r($notas); 

rsort($notas);

$tresMaioresNotas = array_slice($notas, 0, 3); 

echo "\nAs 3 maiores notas são:\n"; 
print_r($tresMaioresNotas);
