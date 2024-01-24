<?php
 function pesquisa_binaria($item, $lista)
 {
    $b = 0;
    $a = count($lista) - 1;
    
    while ($b <= $a)
    {
      $m = floor(($b + $a) / 2);

      if ($lista[$m] == $item)
      {return $m;}     ## Chute correto

      if ($lista[$m] > $item)
      {$a = $m - 1;}   ## Chute muito alto

      else
      {$b = $m + 1;} ## Chute muito baixo
       
    }
    return "Valor não existe na lista!";
 }

 $lista = [1,3,5,7,9,11];  ## A lista deve ser ordenada! (seja de forma alfabética ou sequencial)

 echo pesquisa_binaria(10, $lista);
?>