<?php
    $contador = 0;
for($contador=0; $contador<101; $contador++){
    if($contador % 2 == 1){
        echo " | " . $contador;
            
    }
    if($contador % 8 == 0){
              echo "" . PHP_EOL;
            }
    
}
echo PHP_EOL;