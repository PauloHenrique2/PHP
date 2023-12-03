<?php
 class produtos
 {
   private $id;
   private $nome;
   private $precoC;
   private $precoV;
   private $descricao;
   private $qtdeEstoque;

   public function setId($id){$this->id = $id;}
   public function setNome($nome){$this-> nome = $nome;}
   public function setPrecoC($precoC){$this->precoC = $precoC;}
   public function setPrecoV($precoV){$this->precoV = $precoV;}
   public function setDesc($desc){$this-> descricao = $desc;}
   public function setQtdeEstoque($qtde){$this->qtdeEstoque = $qtde;}

   public function getId(){return $this->id;}
   public function getNome(){return $this-> nome;}
   public function getPrecoC(){return $this-> precoC;}
   public function getPrecoV(){return $this->precoV;}
   public function getDesc(){return $this-> descricao;}
   public function getQtdeEstoque(){return $this-> qtdeEstoque;}
 }
?>