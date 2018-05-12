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
    <link href="css/shop-homepage.css" rel="stylesheet">

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
              <a class="nav-link" href="#">Carrinho</a>
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

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://utahbusiness.com/wp-content/uploads/2017/03/Zagg-InvisibleSheild-900x350.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="https://fkss.sd79.bc.ca/wp-content/uploads/sites/104/2017/09/technology-photo-900x350.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://www.jiraffegroup.com/wp-content/uploads/2012/02/bigstock_Computer_Keyboard_With_Human_H_3695191-900x350.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://www.tecnoandroid.it/wp-content/uploads/2017/10/iphone-x-1-800x614-700x400.jpeg" alt="iPhone X"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">iPhone X</a>
                  </h4>
                  <h5>R$6.699,00</h5>
                  <p class="card-text">Apple iPhone X Prata 256GB Tela 5.8" iOS 11 4G Wi-Fi Câmera 12MP</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://vtech-computer.com/image/cache/catalog/PC%20Hardware/Mainboard/172152255-700x400.jpeg" alt="Asus Strix H270F"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">ASUS Strix H270F</a>
                  </h4>
                  <h5>R$499,00</h5>
                  <p class="card-text">Placa Mãe Gamer Asus, suporta 6/7ª Geração Intel</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://www.appsmart.in.th/wp-content/uploads/2015/05/unnamed-222-700x400.jpg" alt="Galaxy Tab A"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Galaxy Tab A</a>
                  </h4>
                  <h5>R$1.299,00</h5>
                  <p class="card-text">Samsung Galaxy Tab A SM-P585M 16GB Wi-Fi 4G Tela 10.1" Android</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; IF - Tech Shop  2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>