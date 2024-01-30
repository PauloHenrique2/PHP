<?php
 function contar($array)
 {
  if (count($array) === 0)  ## Caso base
   return 0;

  return 1 + contar(array_splice($array, 1));  ## Caso recursivo
 }

 echo contar([1,2,3,4]);
?>