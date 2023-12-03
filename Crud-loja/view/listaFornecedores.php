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
 include_once "../controller/DAOFornecedor.php";
 include_once "../controller/fabricaConexao.php";
 $bd = new fabricaConexao();
 $conn = $bd->Conexao();

 $sql = "SELECT * FROM Fornecedores";
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
    <th scope = "col">Cnpj</th>
    <th scope = "col">Inscrição Estadual</th>
    <th scope = "col">Contato</th>
    <th scope = "col">Endereço</th>
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
             echo "<td>" . $row['idFornecedor'] . "</td>";
             echo "<td>" . $row['nome'] . "</td>";
             echo "<td>" . $row['cnpj'] . "</td>";
             echo "<td>" . $row['inscricaoEstadual'] . "</td>";
             echo "<td>" . $row['contato'] . "</td>";
             echo "<td>" . $row['endereco'] . "</td>";
             echo "<td> <a class = 'btn btn-sm btn-primary' href = 'alteraFornecedores.php?acao=alterar&id=". $row['idFornecedor']. "'>Alterar</a></td>";
             echo "<td> <a class = 'btn btn-sm btn-danger' href = 'excluiFornecedores.php?acao=deletar&id=". $row['idFornecedor']. "'>Excluir</a></td>";
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