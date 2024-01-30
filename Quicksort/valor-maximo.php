<?php
 function valormaximo($array)
 {
  if (count($array) === 2)  ## Caso base
   return $array[0] > $array[1] ? $array[0] : $array[1];

   $subMax = valormaximo(array_splice($array, 1));
   return $array[0] > $subMax ? $array[0] : $subMax;  ## Caso recursivo
 }

 echo valormaximo([10,40,70,72])
?>