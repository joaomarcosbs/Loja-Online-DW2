<?php
include('php/config.php');
include('php/functions.php');
session_start();

$con = connectBD();
mysqli_set_charset($con,"utf8");
$sql = "select * from produtos where produto_id = ". $_GET['id'];
$rs = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($rs);


?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IF - Tech Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

      <div class="container">
        <a class="navbar-brand" href="shop-home.php" style="font-size: 1.5rem;">IF - Tech Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.php">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop-cart.php">Carrinho</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sobre
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="contact.php">Contato</a>
                <a class="dropdown-item" href="about.php">Sobre Nós</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Pesquisar">
          </form>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        
        <div class="col-lg-3">

          <h5 class="my-4">Categorias</h5>
          <div class="list-group">
            <a href="#" class="list-group-item">Computadores</a>
            <a href="#" class="list-group-item">Celulares</a>
            <a href="#" class="list-group-item">Smartwatches</a>
            <a href="#" class="list-group-item">TVs</a>
            <a href="#" class="list-group-item">Tablets</a>
            <a href="#" class="list-group-item">Eletrônicos</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="img/<?= $data['produto_img'] ?>" alt="">
            <div class="card-body">
              <h3 class="card-title"><?= $data['produto_nome'] ?></h3>
              <h4><?= 'R$ '.$data['produto_valor']/100 ?></h4>
              <p class="card-text"><?= $data['produto_descricao'] ?></p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
              <div class="container">
                <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 5%">Comprar</button>
              </div>
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Ficha Técnica
            </div>
            <div class="card-body">
              <?= $data['produto_descricao'] ?>
              <hr>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>