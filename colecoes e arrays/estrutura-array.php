<?php 

//array associativo necessita ter inteiros ou strings como suas chaves
$array = [
    0 => 'um',
    1 => 'dois',
    2 => 'tres'
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
    $contador++;
}

echo "Total: " . count($array) . PHP_EOL;

//comentario teste