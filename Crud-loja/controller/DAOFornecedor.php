<?php
 require_once "../controller/fabricaConexao.php";
 require_once "../model/fornecedores.php";

 class DAOFornecedor
 {
  public function Insert(fornecedores $f)
  {
   $sql = 'INSERT INTO Fornecedores(nome, cnpj, inscricaoEstadual, contato, endereco) VALUES (?,?,?,?,?)';
   $stmt = FabricaConexao::Conexao()->prepare($sql);
   $stmt->bindValue(1, $f->getNome());
   $stmt->bindValue(2, $f->getCnpj());
   $stmt->bindValue(3, $f->getInsc());
   $stmt->bindValue(4, $f->getContato());
   $stmt->bindValue(5, $f->getEnd());
   $stmt->execute();
  }
  
  public function Update(fornecedores $f)
  {
    $sql = 'UPDATE Fornecedores SET nome = ?, cnpj = ?, inscricaoEstadual = ?, contato = ?, endereco = ? WHERE idFornecedor = ?';
    $stmt = FabricaConexao::Conexao()->prepare($sql);
    $stmt->bindValue(1, $f->getNome());
    $stmt->bindValue(2, $f->getCnpj());
    $stmt->bindValue(3, $f->getInsc());
    $stmt->bindValue(4, $f->getContato());
    $stmt->bindValue(5, $f->getEnd());
    $stmt->bindValue(6, $f->getId());
    $stmt->execute();
  }

  public function Delete($id)
  {
   $sql = 'DELETE FROM Fornecedores WHERE idFornecedor = :id';
   $stmt = FabricaConexao::Conexao()->prepare($sql);
   $stmt->bindParam(':id', $id, PDO::PARAM_INT);
   $stmt->execute();
   header("Location:../view/listaFornecedores.php");
  }

  public function Find($id)
  {
   $sql = 'SELECT * FROM Fornecedores WHERE idFornecedor = :id';
   $stmt = FabricaConexao::Conexao()->prepare($sql);
   $stmt->bindParam(':id', $id, PDO::PARAM_INT);
   $stmt->execute();
   return $stmt->fetch();
  }
 }
?>