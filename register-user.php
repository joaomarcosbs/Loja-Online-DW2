<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar suário</title>

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

    <div class="container">
      <div class="py-5 text-center">
        <h2>Cadastro</h2>
        <p class="lead">Preencha as informações abaixo para efetuar seu cadastro no site!</p>
      </div>

      <div class="container" style="margin-bottom: 10% ">
        <div class="col-md-8 order-md-1">
              
              <form class="needs-validation" novalidate>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Seu nome aqui" value="" required>
                    <div class="invalid-feedback">
                      Campo obrigatório.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenome" placeholder="Seu sobrenome aqui" value="" required>
                    <div class="invalid-feedback">
                      Campo obrigatório.
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" placeholder="12 123456789">
                    <div class="invalid-feedback">
                      Campo obrigatório.
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" required>
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
                </div>

                <hr class="mb-4">


                <div class="row">

                  <div class="col-md-6 mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="seu-email@exemplo.com">
                    <div class="invalid-feedback">
                      Informe um edereço de E-mail válido.
                    </div>
                  </div>
                  
                </div>


                <div class="row">
                  
                  <div class="col-md-6 mb-3">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="" required>
                    <div class="invalid-feedback">
                      Campo obrigatório.
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="verifica-senha">Repita a senha</label>
                    <input type="password" class="form-control" id="verifica-senha" placeholder="" required>
                    <div class="invalid-feedback">
                      Campo obrigatório.
                    </div>
                  </div>

                </div>

                <hr class="mb-4">

                <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>

              </form>

            </div>
      </div>
    </div>

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


