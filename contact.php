<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contato</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

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

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contato</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="shop-home.php">Início</a>
        </li>
        <li class="breadcrumb-item active">Contato</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3458.7657416995553!2d-51.15274418488821!3d-29.899849881935154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951970265f07cfb5%3A0xa38d71cab38e0da1!2sInstituto+Federal+do+Rio+Grande+do+Sul%2C+Campus+Canoas!5e0!3m2!1spt-BR!2sbr!4v1526150357523"></iframe>
        </div>



        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Detalhe para Contato</h3>
          <p>
            Rua Dra. Maria Zélia Carneiro de Figueiredo, 870
            <br>Bairro Igara III
            <br>CEP: 92412-240
            <br>Canoas/RS
            <br>
          </p>
          <p>
            <abbr title="Phone">Telefone</abbr>: (51) 3415-8200
          </p>
          <p>
            <abbr title="Email">E-mail</abbr>:
            <a href="mailto:name@example.com"> comunicacao@canoas.ifrs.edu.br
            </a>
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Fale Conosco!</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Nome Completo:</label>
                <input type="text" class="form-control" id="nome" required data-validation-required-message="Preencha este campo.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Telefone:</label>
                <input type="tel" class="form-control" id="telefone" required data-validation-required-message="Preencha este campo.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>E-mail:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Preencha este campo.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Sua Mensagem:</label>
                <textarea rows="10" cols="100" class="form-control" id="mensagem" required data-validation-required-message="Preencha este campo." maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="btn_enviar">Enviar Mensagem</button>
          </form>
        </div>

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

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
