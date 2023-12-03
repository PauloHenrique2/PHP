<?php
 header('Content-Type: text/html; charset=UTF-8');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login e Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iUNt1N6yo2G5BQvO+XutUWAUm1a7FpPJL8rQNGq4J2ut9n6ZWItJQ8C2M" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!-- Formulário de Login -->
            <form action = "../controller/validaLogin.php" method = "POST">
                <h3 class="mb-4">Login</h3>
                <div class="mb-3">
                    <label for="loginEmail" class="form-label  ">Login:</label>
                    <input type="text" name = "login" class="form-control" id="loginEmail" required>
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Senha:</label>
                    <input type="password" name = "senha" class="form-control" id="loginPassword" required>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
            <hr class="my-4">
            <a href = "../view/cadastro.php">Clique aqui para se cadastrar</a>
        </div>
    </div>
</div>

<!-- Adicione os scripts do Bootstrap 5 (popper.js e Bootstrap JS) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-6DqOLJx83Hz4GyZIms3bPKg+6kGT9HgPhzkw6ZHt8gMzCfffeZYfiCqSYAe5ThWg" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-dZQ8Xq3l1G5z4TE5W8kTwQI6eLsCJz+5ts9BSmWrqKfNpBmUnz4f+U5tizNLwPT0" crossorigin="anonymous"></script>
</body>
</html>
