<?php 
 if (isset($_POST["botao"]))
 {
   if (!empty($_POST["peso"]) && !empty($_POST["altura"]))
   {  
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = $peso/pow($altura,2);

    if ($imc < 18.5)
    {
        echo "<h5> Seu IMC é: $imc - abaixo do peso normal.</h5>";
    }

    else if ($imc > 18.5 && $imc < 24.9)
    {
        echo "<h5>Seu IMC é: $imc - peso normal.</h5>";
    }

    else if ($imc > 25 && $imc < 29.9)
    {
        echo "<h5>Seu IMC é: $imc - sobrepeso!</h5>";
    }

    else if ($imc > 30)
    {
        echo "<h5>Seu IMC é: $imc - obesidade!</h5>";
    }
  }

  else 
  {
    echo "<h5>Preencha todos os campos!</h5>";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Calculadora IMC</title>
</head>
<body>
    <form action = "" method = "POST">
        <br>
        <h2 class = "text-start">Calculadora IMC</h2>
        <div class = "form-outline w-25">
         <input type = "number" class = "form-control" name = "peso" placeholder= "Insira seu peso (em kg)">
        </div>
        <br>
        <br>
        <div class = "form-outline w-25">
         <input type = "text" class = "form-control" id = "altura" name = "altura" placeholder= "Insira sua altura (em metros)">
        </div>
        <br>
        <br>
        <button type="button" class="btn btn-primary" name = "botao">Calcular</button>
    </form>
</body>
</html>