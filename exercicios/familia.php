<?php

$familia = [
    "Cicero",
    "Luciana",
    "Felipe",
    "Gustavo"
]; 

echo "Array antes: \n"; 
print_r($familia); 

array_push($familia, "Amanda", "Ana"); 

echo "Array depois: \n";
print_r($familia);