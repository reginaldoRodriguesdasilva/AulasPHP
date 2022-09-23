<?php

$numeros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

echo '<pre>';

print_r($numeros);

echo '</pre>';

echo "<hr>";

foreach($numeros as $item){
    if($item % 2 == 0){
        echo "O Número é par: ". $item. "<br>";
    };
    
};


