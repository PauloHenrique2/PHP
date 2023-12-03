<?php
 require_once "../controller/fabricaConexao.php";
 require_once "../model/produtos.php";

 class DAOProduto
 {
  public function Insert(produtos $p)
  {
    $sql = 'INSERT INTO Produtos(nome, precoCompra, precoVenda, descricao, qtdeEstoque) VALUES (?,?,?,?,?)';
    $stmt = fabricaConexao::Conexao()->prepare($sql);

    $stmt->bindValue(1, $p->getNome());
    $stmt->bindValue(2, $p->getPrecoC());
    $stmt->bindValue(3, $p->getPrecoV());
    $stmt->bindValue(4, $p->getDesc());
    $stmt->bindValue(5, $p->getQtdeEstoque());
    $stmt->execute();
  }

  public function Update(produtos $p)
  {
   $sql = 'UPDATE Produtos SET nome = ?, precoCompra = ?, precoVenda = ?, descricao = ?, qtdeEstoque = ? WHERE idProduto = ?';
   $stmt = fabricaConexao::Conexao()->prepare($sql);

   $stmt->bindValue(1, $p->getNome());
   $stmt->bindValue(2, $p->getPrecoC());
   $stmt->bindValue(3, $p->getPrecoV());
   $stmt->bindValue(4, $p->getDesc());
   $stmt->bindValue(5, $p->getQtdeEstoque());
   $stmt->bindValue(6, $p->getId());
   $stmt->execute();
  }

  public function Delete($id)
  {
    $sql = 'DELETE FROM Produtos WHERE idProduto = :id';
    $stmt = fabricaConexao::Conexao()->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    header("Location:../view/listaProdutos.php");
  }

  public function Find($id)
  {
   $sql = 'SELECT * FROM Produtos WHERE idProduto = :id';
   $stmt = fabricaConexao::Conexao()->prepare($sql);
   $stmt->bindParam(':id',$id,PDO::PARAM_INT);
   $stmt->execute();
   return $stmt->fetch();
  }
}
?>