<?php

echo "Hoeveel stapels wil je hebben?" . PHP_EOL;
$x = readline("");
$s = "*";

for ($i = 1; $i <= $x; $i++){

    echo str_repeat($s, $i) .PHP_EOL;
}