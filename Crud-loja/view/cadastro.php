<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Página de Cadastro</title>
</head>

<body>
    <form action="../controller/validaCadastro.php" method="POST">
        <h3 class="mb-4">Cadastro</h3>
        <div class="mb-3">
            <label for="signupName" class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" id="signupName" required>
        </div>
        <div class="mb-3">
            <label for="signupUser" class="form-label">Login:</label>
            <input type="text" name="login" class="form-control" id="signupUser" required>
        </div>
        <div class="mb-3">
            <label for="signupPassword" class="form-label">Senha:</label>
            <input type="password" name="senha" class="form-control" id="signupPassword" required>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</body>

</html>