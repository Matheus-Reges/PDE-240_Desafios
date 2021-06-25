<?php
    $altura = 1.75;
    $peso = 40;
    $IMC = $peso/($altura * $altura);
    
    if($IMC < 18.5)
        echo "Abaixo do peso ideal para sua altura!";
    elseif($IMC >= 18.5 && $IMC<=24.9)
        echo "No peso ideal!";
    elseif($IMC > 25)
        echo "Acima do peso ideal para sua altura!";
    echo PHP_EOL;