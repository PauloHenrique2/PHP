<?php
 function quicksort(array $array)
 {
  if (count($array) < 2)  ## Caso base - se o array possuir apenas um elemento ou nenhum, ele já está "ordenado"
  {
    return $array;
  }

  else
  {
   $pivo = $array[array_key_first($array)];  ## Caso recursivo
   var_dump($array);

   // Sub-array com todos os elementos menores que o pivô
   $menores = array_filter(array_slice($array, 1), function($el) use ($pivo) {return $el <= $pivo;});

   // Sub-array com todos os elementos maiores que o pivô
   $maiores = array_filter(array_slice($array, 1), function($el) use ($pivo) {return $el > $pivo;});
   
   return array_merge(quicksort($menores), [$pivo], quicksort($maiores));
  }
 }

var_dump(quicksort([10,5,2,3]));
?>