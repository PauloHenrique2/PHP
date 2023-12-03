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
 include_once  "../controller/DAOFornecedor.php";
 include_once  "../controller/fabricaConexao.php";
 include_once  "../model/fornecedores.php";

 $f = new fornecedores();
 $fDAO = new DAOFornecedor();
 $ids = (int)$_GET['id'];
 $linhas = $fDAO->Find($ids);

 if (isset($_POST['botao']))
 {
   $f->setId($ids);
   $f->setNome($_POST['nome']);
   $f->setCnpj($_POST['cnpj']);
   $f->setInsc($_POST['inscEstadual']);
   $f->setContato($_POST['contato']);
   $f->setEnd($_POST['end']);
   $fDAO->Update($f);
   header("Location:listaFornecedores.php");
 }
?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Alteração Fornecedores</title>
</head>

<body>
  <main>
    <div class="container py-5 h-50">
      <div class="row d-flex align-items-center justify-content-center h-50 ">

        <div class="col">
          <h5>Alteração de um fornecedor</h5>
          <div class="card h-100 text-center">
            <div class="card-body">
              <h5 class="card-title">Alterar um fornecedor</h5>
              <!-- Inicio do Form-->
              <form class="row g-3" action="" method="POST">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Nome</label>
                  <input class="form-control" name="nome" value = "<?php echo $linhas[1];?>">
                </div>
                <div class="col-md-4">
                  <label for="inputPassword4" class="form-label">Cnpj</label>
                  <input class="form-control" name="cnpj" value = "<?php echo $linhas[2];?>">
                </div>
                <div class="col-6">
                  <label for="inputAddress" class="form-label">Inscrição Estadual</label>
                  <input class="form-control" name="inscEstadual" value = "<?php echo $linhas[3];?>">
                </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Contato</label>
                  <input class="form-control" name="contato" value = "<?php echo $linhas[4];?>">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Endereço</label>
                  <input class="form-control" name="end" value = "<?php echo $linhas[5];?>">
                 </div>
                 </div>
                 <div class="col-12">
                 <button type="submit" class="btn btn-primary" name = "botao">Salvar</button>
              </div>
              </br>
            </form>
          </div> <!-- Fim do card-body-->
        </div>
        <!--Fim do card-->
      </div>
      <!--Fim da 1 coluna-->
    </div>
    <!--Fim da row-->
    </div>
    <!--Fim do container-->
  </main>
</body>

</html>