<?php

//Fórmula: IMC = Peso ÷ (Altura × Altura)

$peso = 55;
$altura = 1.60;

$imc = $peso / ($altura ** 2);
$imc = round($imc, 2);

if ($imc <= 18.5){
    echo "IMC de $imc, considerado como magreza." . PHP_EOL;
}else if ($imc <= 24.9) {
    echo "IMC de $imc, considerado como normal." . PHP_EOL;
}else{
    echo "IMC de $imc, considerado como obesidade mórbida." . PHP_EOL;
}
