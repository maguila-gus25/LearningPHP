<?php 

function ordenarStringsAlfabeticamente(array $arrayDeStrings): array { 

    $arrayOrdenado = $arrayDeStrings;

    sort($arrayOrdenado);

    return $arrayOrdenado;
}

$cidades = ["São Paulo", "Rio de Janeiro", "Belo Horizonte", "Salvador", "Fortaleza", "Curitiba", "Manaus", "Recife"];

echo "Array Original: \n";
print_r($cidades); 

$cidadesOrdenadas = ordenarStringsAlfabeticamente($cidades);

echo "\nArray Ordenado:\n";
print_r($cidadesOrdenadas);

echo "\nArray Original (após a função ser chamada):\n";
print_r($cidades);