<?php

$idade = 16;
$ndepessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade > 18) {
    echo "Você tem $idade anos. Pode entrar.";
}

else {
    if ($idade >= 16 && $ndepessoas > 1) {
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar";
    } else {
        echo "Você só tem $idade anos. Você não pode entrar!";
    }
} 

loucura
