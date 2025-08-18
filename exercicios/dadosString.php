<?php

$dadosString = "Vinicius Dias,1997,Programador";

$dadosArray = explode(',', $dadosString);

echo "String Original: \n";
echo $dadosString . "\n\n";

echo "Array Resultante:\n"; 
print_r($dadosArray); 

