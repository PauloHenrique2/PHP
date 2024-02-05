<?php
 function twoSum($nums, $target) 
    {
     $n = sizeof($nums); ## Armazena o tamanho do array em uma variável

     for ($i = 0; $i < $n; $i++) ## Verifica o primeiro até o penúltimo elemento do array
     {
      for ($j = $i + 1; $j < $n; $j++) ## Verifica o próximo até o último elemento do array
      {
       if ($nums[$i] + $nums[$j] == $target) ## Verifica se a soma dos elementos é igual ao valor alvo
       {
        return [$i,$j];
       }
      }
     }
     return null; ## Sem solução
    }
?>
