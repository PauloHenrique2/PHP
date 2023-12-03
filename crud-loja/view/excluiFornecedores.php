<?php
 header('Content-Type: text/html; charset=UTF-8');
 session_start();
 if($_SESSION['login_sessao'] == null || $_SESSION['login_sessao'] == false)
 {
   header("Location:index.php");
 }
 
 include_once "../controller/fabricaConexao.php";
 include_once "../controller/DAOFornecedor.php";

 $fDAO = new DAOFornecedor();

 if (isset($_POST['botaoS']))
 {
    $id = (int)$_GET['id'];
    $fDAO->Delete($id);
    header("Location:../view/listaFornecedores.php");
 }

 else if (isset($_POST['botaoN']))
 {
    header("Location:../view/principal.php");
 }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de fornecedores</title>
</head>
<body>
<h2>Deseja realmente excluir o registro selecionado ?</h2>
    <form action = "" method = "POST">
     <button name = "botaoS">Sim</button>
    </form>
    <br>
    <form action = "" method = "POST">
     <button name = "botaoN">Não</button>
    </form>
</body>
</html>