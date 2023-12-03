<?php
 header('Content-Type:text/html; charset=UTF-8');
 session_start();
 if ($_SESSION["login_sessao"] == false || $_SESSION["login_sessao"] == null)
 {
   header("Location:index.php");
 }

 else
 {
    echo "Usuario: ". $_SESSION['login_sessao'];
 }
?>

<?php
 include_once "../controller/DAOProduto.php";
 include_once "../controller/fabricaConexao.php";
 $bd = new fabricaConexao();
 $conn = $bd->Conexao();

 $sql = "SELECT * FROM Produtos";
 $stmt = $conn->prepare($sql);
 $stmt->execute();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Loja de Informática - Home</title>
</head>
<body>
<table class="table table-striped">
  <thead>
  <tr>
    <th scope = "col">Id</th>
    <th scope = "col">Nome</th>
    <th scope = "col">Preco de Compra</th>
    <th scope = "col">Preco de Venda</th>
    <th scope = "col">Descrição</th>
    <th scope = "col">Quantidade em estoque</th>
    <th scope = "col">Alterar</th>
    <th scope = "col">Excluir</th>
  </tr>
  
  </thead>
  <tbody>
       <?php
        if ($stmt->rowCount() > 0)
        {
          while($row = $stmt->fetch())
          {
             echo "<tr>";
             echo "<td>" . $row['idProduto'] . "</td>";
             echo "<td>" . $row['nome'] . "</td>";
             echo "<td>" . $row['precoCompra'] . "</td>";
             echo "<td>" . $row['precoVenda'] . "</td>";
             echo "<td>" . $row['descricao'] . "</td>";
             echo "<td>" . $row['qtdeEstoque'] . "</td>";
             echo "<td> <a class = 'btn btn-sm btn-primary' href = 'alteraProdutos.php?acao=alterar&id=". $row['idProduto']. "'>Alterar</a></td>";
             echo "<td> <a class = 'btn btn-sm btn-danger' href = 'excluiProdutos.php?acao=deletar&id=". $row['idProduto']. "'>Excluir</a></td>";
             echo "</tr>";
          }
        }
        
        else
        {
          echo "Nenhum resultado encontrado.";
        }
       ?>
  </tbody>
</table>
</body>
</html>