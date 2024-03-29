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
 
 ## OBS: Na pesquisa binária, o tempo de execução é logarítmico, enquanto na pesquisa simples o tempo é linear
 ## Dessa forma, o problema cresce em taxas diferentes
 ## O que é justamente a causa da pesquisa binária ser muito mais rápida do que a simples
?>
