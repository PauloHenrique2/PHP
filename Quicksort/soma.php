<?php
 function soma($array)
 {
  if (count($array) === 0)  ## Caso base
  {return 0;}

  return $array[0] + soma(array_splice($array, 1));  ## Caso recursivo
 }

 print "A soma é " . soma([1,2,3]);
?>