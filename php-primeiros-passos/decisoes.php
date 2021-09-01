<?php

$idade = 15;


echo "Você só pode entrar, se tiver a partir de 18 anos." . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar.' . PHP_EOL;    
} else {
    echo "Você só tem $idade anos. Você não pode entrar." . PHP_EOL;
}

echo PHP_EOL;

echo "Adeus.";