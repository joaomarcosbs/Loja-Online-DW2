<!DOCTYPE html>
<html>
<head>
	   
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
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
              
              <a class="nav-link" href="login.php">Entrar</a>
             
              
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


           

          <form action="search.php" method="get" class="form-inline my-2 my-md-0">
            <input class="form-control" id="pesquisa" type="text" name="search" placeholder="Pesquisar">
          </form>
        </div>
     
      </div>
    </nav>
   


    <div class="container">
    	
    	<form action="php/formLogin.php" method="POST" class="form-signin" style="text-align: center;">
      		

      		<h1 class="h3 mb-3 font-weight-normal">Entrar</h1>
      		<label for="email" class="sr-only">E-mail</label>
      		<input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required autofocus>
      		<label for="inputPassword" class="sr-only">Senha</label>
      		<input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required style="margin-bottom: 8%">
      		
      		<button class="btn btn-lg btn-primary btn-block" type="submit" >Log in</button>

          <label style="margin-top: 4%">
            Ainda não possui cadastro? 
            <a href="register-user.php">Clique Aqui</a>
          </label>


      	
   		</form>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>