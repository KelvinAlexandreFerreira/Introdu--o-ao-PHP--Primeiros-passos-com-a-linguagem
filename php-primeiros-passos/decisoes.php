<?php

$idade = 16;
$numeroDePessoas = 1;


echo "Você só pode entrar, se tiver a partir de 18 anos ou a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar sozinho.' . PHP_EOL;
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você só tem $idade anos, está acompanhado(a), então pode entrar." . PHP_EOL;
} else {
    echo "Você só tem $idade anos. Você não pode entrar." . PHP_EOL;
}

echo PHP_EOL;

echo "Adeus." . PHP_EOL;
