<?php
include('php/config.php');
include('php/functions.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sobre Nós</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <style type="text/css">
  
  @media screen and (min-width: 992px){

      #nome{
        margin-left: 30%;
      }
  }

   @media screen and (max-width: 991px){

     #titulo{
        margin-left: -10px;
     }

     #pesquisa{
        margin-right: -10px; 

      }
      
  }

  @media screen and (max-width: 768px){

     #titulo{
        margin-left: 0px;
     }

     #nome{
        margin-left: 0%;
      }
      
  }


</style>
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

      <div class="container">
        <a class="navbar-brand" id="titulo" href="shop-home.php" style="font-size: 1.5rem;">IF - Tech Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <?php 
            if(!verificaLogin()){ 
              echo '<a class="nav-link" href="login.php">Entrar</a>';
             }
            ?>
              
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

           <ul class="navbar-nav mr-auto" id="nome">

            <?php 
            if(verificaLogin()){ 
              echo '<li class="nav-item"  ><a class="nav-link" style="color: white">Olá, ' . $_SESSION['usuario_nome'] . '</a></li>';
             }
            ?>

           </ul>

           <ul class="navbar-nav mr-auto">
             <?php 
             if(verificaLogin()){ 
               echo '<li class="nav-item"> <a class="nav-link" href="php/logout.php" style="color: white">Sair</a>';
              } 
            ?>
           </ul>


          <form action="search.php" method="get" class="form-inline my-2 my-md-0">
            <input class="form-control" id="pesquisa" type="text" name="search" placeholder="Pesquisar">
          </form>
        </div>
     
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Sobre Nós</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="shop-home.php">Início</a>
        </li>
        <li class="breadcrumb-item active">Sobre Nós</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="https://s1.static.brasilescola.uol.com.br/artigos/-5a22995a059e4.jpg?i=https://brasilescola.uol.com.br/upload/vestibular/-5a22995a059e4.jpg" alt="Instituto Federal">
        </div>
        <div class="col-lg-6">
          <h2>Sobre a IF - Tech Shop</h2>
          <p>Somos uma loja de artigos eletrônicos desenvolvida no Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul - Campus Canoas, na disciplina de Desenvolvimento para Web II do curso Superior de Tecnologia em Análise e Desenvolvimento de Sistemas.</p>
          <p>As tecnologias que utilizamos aqui foram: PHP, JavaScript, HTML e CSS, com a biblioteca do Bootstrap.</p>
          <p>Não sabemos mais o que escrever aqui, então estamos botando isso só para ocupar o espaço da página. #pas</p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2>Nosso Time</h2>

      <div class="row">
        <div class="col-lg-6 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="img/guilherme.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Guilherme</h4>
              <h6 class="card-subtitle mb-2 text-muted">Desenvolvedor</h6>
             <!--  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p> -->
            </div>
            <div class="card-footer">
              <a href="#">osilva.guilherme@gmail.com</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="joao.jpg" alt="Membro do Time">
            <div class="card-body">
              <h4 class="card-title">João Marcos</h4>
              <h6 class="card-subtitle mb-2 text-muted">Desenvolvedor</h6>
              <p class="card-text">João Marcos Bueno, 20 anos, Brasileiro, Rio Grande so Sul #Gratidao</p>
            </div>
            <div class="card-footer">
              <a href="#">joaomarcosbs@outlook.com</a>
            </div>
          </div>
        </div>
        
      </div>
      <!-- /.row -->

      
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
