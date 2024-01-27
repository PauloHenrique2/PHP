<?php 
 function regressiva($i)
 {
   print $i . "\n";
   if ($i <= 1) ## Caso-base
    return;
   else         ## Caso-recursivo
    regressiva($i - 1);
 }

 print regressiva(50)
?>