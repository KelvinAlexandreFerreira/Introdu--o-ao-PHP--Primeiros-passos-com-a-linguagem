<?php

$idade = 21;
$nome = 'Vinicius';


echo "Você só pode entrar, se tiver a partir de 18 anos." . PHP_EOL;

if ($idade >= 18 && $nome == 'Vinicius'){
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar.' . PHP_EOL;    
}