<?php
 header('Content-Type:text/html; charset=UTF-8');
 session_start();
 if ($_SESSION["login_sessao"] == false || $_SESSION["login_sessao"] == null)
 {
   header("Location:index.php");
 }
?>
<?php
 include_once  "../controller/DAOProduto.php";
 include_once  "../controller/fabricaConexao.php";
 include_once  "../model/produtos.php";

 $p = new produtos();
 $pDAO = new DAOProduto();
 $ids = (int)$_GET['id'];
 $linhas = $pDAO->Find($ids);

 if (isset($_POST['botao']))
 {
   $p->setId($ids);
   $p->setNome($_POST['nome']);
   $p->setPrecoC($_POST['precoC']);
   $p->setPrecoV($_POST['precoV']);
   $p->setDesc($_POST['descricao']);
   $p->setQtdeEstoque($_POST['qtdeEstoque']);
   $pDAO->Update($p);
   header("Location:listaProdutos.php");
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
  <title>Alteração Produtos</title>
</head>

<body>
  <main>
    <div class="container py-5 h-50">
      <div class="row d-flex align-items-center justify-content-center h-50 ">

        <div class="col">
          <h5>Alteração de um produto</h5>
          <div class="card h-100 text-center">
            <div class="card-body">
              <h5 class="card-title">Alterar um produto</h5>
              <!-- Inicio do Form-->
              <form class="row g-3" action="" method="POST">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Nome</label>
                  <input class="form-control" name="nome" value = "<?php echo $linhas[1];?>">
                </div>
                <div class="col-md-4">
                  <label for="inputPassword4" class="form-label">Preco de compra</label>
                  <input class="form-control" name="precoC" value = "<?php echo $linhas[2];?>">
                </div>
                <div class="col-6">
                  <label for="inputAddress" class="form-label">Preco de venda</label>
                  <input class="form-control" name="precoV" value = "<?php echo $linhas[3];?>">
                </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Descrição</label>
                  <input class="form-control" name="descricao" value = "<?php echo $linhas[4];?>">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Quantidade em estoque</label>
                  <input class="form-control" name="qtdeEstoque" value = "<?php echo $linhas[5];?>">
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