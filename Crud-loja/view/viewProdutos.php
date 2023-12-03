<?php
 header('Content-Type:text/html; charset=UTF-8');
 require_once "../model/produtos.php";
 require_once "../controller/DAOProduto.php";
 session_start();
 if ($_SESSION["login_sessao"] == false || $_SESSION["login_sessao"] == null)
 {
   header("Location:index.php");
 }

 $p = new produtos();
 $DAOp = new DAOProduto();

 if (isset($_POST['nome']) && isset($_POST['precoC']) && isset($_POST['precoV']) && isset($_POST['desc']) && isset($_POST['qtdeEstoque']))
 {
   $p->setNome($_POST['nome']);
   $p->setPrecoC($_POST['precoC']);
   $p->setPrecoV($_POST['precoV']);
   $p->setDesc($_POST['desc']);
   $p->setQtdeEstoque($_POST['qtdeEstoque']);
   $DAOp->Insert($p);
   header("Location:../view/listaProdutos.php");
 }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Cadastro Produto</title>
</head>

<body>
  <main>
    <div class="container py-5 h-50">
      <div class="row d-flex align-items-center justify-content-center h-50 ">

        <div class="col">
          <h5>Cadastro Produto</h5>
          <div class="card h-100 text-center">
            <div class="card-body">
              <h5 class="card-title">Cadastrar um Produto</h5>
              <!-- Inicio do Form-->
              <form class="row g-3" action="" method="POST">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Nome</label>
                  <input class="form-control" name="nome">
                </div>
                <div class="col-md-4">
                  <label for="inputPassword4" class="form-label">Preco de compra</label>
                  <input class="form-control" type = "number" name="precoC">
                </div>
                <div class="col-6">
                  <label for="inputAddress" class="form-label">Preco de venda</label>
                  <input class="form-control" type = "number" name="precoV">
                </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Descricao</label>
                  <input class="form-control" name="desc">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Quantidade no estoque</label>
                  <input class="form-control" type = "number" name="qtdeEstoque">
                </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
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