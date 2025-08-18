<?php

$hora = $argv[1];

if ($hora < 12 && $hora < 12) {
    echo "Bom dia\n";
} else if ($hora >= 12 && $hora < 18) {
    echo "Boa tarde\n";
} else {
    echo "Boa noite\n";
}