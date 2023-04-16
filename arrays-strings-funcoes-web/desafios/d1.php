<?php 

for ($cont = 0; $cont <= 100; $cont ++) {
    if ($cont % 2 == 0) {
        echo "$cont é par " . PHP_EOL;
    }
    else {
        echo "$cont é impar " . PHP_EOL;
    }
}