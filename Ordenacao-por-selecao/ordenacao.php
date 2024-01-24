<?php
 function buscarMenor($array)
 {
   $menor = $array[0];  ## Armaneza o menor valor
   $menor_indice = 0;   ## Armazena o índice do menor valor

   for ($i = 0; $i < count($array); $i++)
   {
     if ($array[$i] < $menor)
     {
        $menor = $array[$i];
        $menor_indice = $i;
     }
   }
   return $menor_indice;
 }

 function ordenacaoPorSelecao($array)
 {
   $novoArray = [];

   for ($i = 0, $tamanho = count($array); $i < $tamanho; $i++)
   {
     $menor = buscarMenor($array);  ## Encontra o menor elemento do array 
     array_push($novoArray, array_splice($array, $menor, 1)[0]);  ## Adiciona o novo elemento ao novo array
   }
   return $novoArray;
 }

 var_dump(ordenacaoPorSelecao([5,3,6,2,10]));
?>