<?php 
 function sauda2($nome)
 {
    print "Como vai " . $nome .  "?\n";
 }

 function tchau()
 {
    print "ok, tchau!";
 }

 function sauda($nome)  ## 1ª Camada da pilha
 {
    print "Olá, " . $nome . "!\n";
    sauda2($nome);      ## 2ª Camada da pilha
    print "Preparando para dizer tchau...\n";
    tchau();            ## 3ª Camada da pilha
 }

 print sauda("Pedro");
?>