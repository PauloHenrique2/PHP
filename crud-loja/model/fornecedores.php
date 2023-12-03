<?php
 class fornecedores
 {
  private $id;
  private $nome;
  private $cnpj;
  private $insc_estadual;
  private $contato;
  private $endereco;

  public function setId($id){$this->id = $id;}
  public function setNome($nome){$this->nome = $nome;}
  public function setCnpj($cnpj){$this->cnpj = $cnpj;}
  public function setInsc($insc_estadual){$this->insc_estadual = $insc_estadual;}
  public function setContato($contato){$this->contato = $contato;}
  public function setEnd($endereco){$this->endereco = $endereco;}
  
  public function getId(){return $this->id;}
  public function getNome(){return $this->nome;}
  public function getCnpj(){return $this->cnpj;}
  public function getInsc(){return $this->insc_estadual;}
  public function getContato(){return $this->contato;}
  public function getEnd(){return $this->endereco;}
 }
?>