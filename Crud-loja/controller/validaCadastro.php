<?php
 include_once "../controller/fabricaConexao.php";

 if (!empty($_POST["nome"]) && !empty($_POST["login"]) && !empty($_POST["senha"]))
 {
   $nome = $_POST["nome"];
   $login = $_POST["login"];
   $senha = $_POST["senha"];

   $sql = "SELECT idUsuario FROM Usuarios WHERE login = $login";
   $stmt = FabricaConexao::Conexao()->prepare($sql);

   if ($stmt->rowCount() > 0)
   {
     echo "Usuario já cadastrado!";
   }

   else
   {
     $stmt = FabricaConexao::Conexao()->prepare("INSERT INTO Usuarios (nome, login, senha) VALUES ('$nome', '$login', '$senha')");
     $stmt->execute();
     session_start();
     $_SESSION['login_sessao'] = $login;
     header("Location:../view/index.php");
   }
 }

 else
 {
    echo "Preencha todos os campos!";
 }
?>