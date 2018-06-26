<?php
include('php/config.php');
include('php/functions.php');
session_start();
$con = connectBD();
mysqli_set_charset($con,"utf8");

// adiciona no carrinho
if($_GET['addcart']){
  if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
    $_SESSION['cart'][] = array('item' => $_GET['item'], 'qtd' => $_GET['qtd']);  
  }else{
    $flg = 1;
    foreach($_SESSION['cart'] as $key => $val){
       if($val['item'] == $_GET['item']){
          --$flg;
       }
    }
    if($flg){
      $_SESSION['cart'][] = array('item' => $_GET['item'], 'qtd' => $_GET['qtd']);
    }
  }
}
// limpa carrinho
if($_GET['clean']){
  unset($_SESSION['cart']);
  scriptThat('window.alert("Carrinho limpo com sucesso!")');
  //scriptThat('window.location="index.php"');
}
// fecha o pedido
if($_POST['finalizar']){
  $pEmail      = $_POST['email'];   
  $pEndereco   = $_POST['endereco'];
  $pEndereco2  = $_POST['endereco2'];
  $pPais       = $_POST['pais'];
  $pEstado     = $_POST['estado'];
  $pCep        = $_POST['cep'];
  $pCcnome     = $_POST['cc-nome'];
  $pCcnumero   = $_POST['cc-numero'];
  $pCcvalidade = $_POST['cc-validade'];
  $pCccvv      = $_POST['cc-cvv'];

  $from = "From: lojaifrs@gmail.com";
  $subject = "Recibo de compra - LOJA IFRS";
  $msg = "RECEIBO DE COMPRA - LOJA IFRS \r\n\r\n".
         "Nome do comprador: ".$_SESSION['usuario_nome']." ".$_SESSION['usuario_sobrenome']." \r\n".
         "Endereço de entrega: $pEndereco\r\n".
         "Endereço de entrega 2: $pEndereco2\r\n".
         "País: $pPais\r\n".
         "Estado: $pEstado\r\n".
         "CEP: $pCep\r\n\r\n".
         "Produtos: \r\n\r\n";
  $totalPedido = 0;
  if(count($_SESSION['cart']) > 0){
    foreach($_SESSION['cart'] as $key => $val){
      $sql = "select * from produtos where produto_id = ". $val['item'];
      $rs = mysqli_query($con, $sql);
      $data = mysqli_fetch_assoc($rs);
      $msg .= 'Produto: ' . $data['produto_nome'] . '   |   Quantidade: ' . $val['qtd'] . '   |   ' . 'Valor: R$' . $data['produto_valor']/100 . "\r\n";
      $totalPedido += $data['produto_valor']/100;
   }
    $msg .= "\r\nValor total do pedido: R$" . $totalPedido; 
  }
  mail(LOJA_EMAIL, $subject, $msg, $from);
  unset($_SESSION['cart']);
  scriptThat('alert("Pedido realizado com sucesso!")');
  scriptThat('window.location="index.php"');
  unset($_POST['btn_enviar']);
  
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>IF- Tech Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
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

  <body class="bg-light">

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

    <div class="container">
     

      <div class="row" style="margin-top: 10%">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Seu Carrinho</span>
            <span class="badge badge-secondary badge-pill"><?= count($_SESSION['cart']) ?></span>
          </h4>
          <ul class="list-group mb-3">
            <?php 
              // logica carrinho aqui
              $total = 0;
              if(count($_SESSION['cart']) > 0){
                foreach($_SESSION['cart'] as $key => $val){
                  $sql = "select * from produtos where produto_id = ". $val['item'];
                  $rs = mysqli_query($con, $sql);
                  $data = mysqli_fetch_assoc($rs);
            ?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"><?= $data['produto_nome'] ?></h6>
                <small class="text-muted"><?= $data['produto_descricao'] ?></small>
              </div>
              <span class="text-muted">R$<?= $data['produto_valor']/100 ?></span>
            </li>

            <?php
                  $total += $data['produto_valor']/100;
                }
              }
              else{
                echo "Seu carrinho está vazio!";
              }
            ?>
          </ul>
          <div class="input-group">
              <div class="nput-group-append">
                  Valor total: R$<?= $total ?><br><br>
              </div>
            </div>
            <div class="input-group">
              <div class="nput-group-append">
                <button  class="btn btn-secondary" onclick="window.location='shop-cart.php?clean=1'">Limpar carrinho</button>
              </div>
            </div>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Dados para entrega</h4>
          <form action="shop-cart.php" method="post" class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" value="<?= $_SESSION['usuario_email'] ?>" required>
              <div class="invalid-feedback">
                Por favor insira um endereço de email válido.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Endereço</label>
              <input type="text" class="form-control" id="address" name="endereco" placeholder="Rua dos Bobos, 0" required>
              <div class="invalid-feedback">
                Por favor insira seu endereço.
              </div>
            </div>

           <div class="mb-3">
              <label for="address">Endereço 2<span class="text-muted"> (Opcional)</span></label>
              <input type="text" class="form-control" id="address" name="endereco2" placeholder="Rua dos Bobos, 1" required>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">País</label>
                <select class="custom-select d-block w-100" id="country" name="pais" required>
                  <option value="">Selecione...</option>
                  <option>Estados Unidos</option>
                  <option>Brasil</option>
                </select>
                <div class="invalid-feedback">
                  Por favor selecione um país.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Estado</label>
                <select class="custom-select d-block w-100" id="state" name="estado" required>
                  <option value="">Selecione...</option>
                  <option>Rio Grande do Sul</option>
                </select>
                <div class="invalid-feedback">
                  Por favor selecione um estado.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">CEP</label>
                <input type="text" class="form-control" id="zip" name="cep" placeholder="00000-000" required>
                <div class="invalid-feedback">
                  Por favor insira o CEP.
                </div>
              </div>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Dados de pagamento</h4>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nome no cartão</label>
                <input type="text" class="form-control" id="cc-name" name="cc-nome" placeholder="Um Dois Três da Silva Quatro" required>
                <small class="text-muted">Nome como está no cartão</small>
                <div class="invalid-feedback">
                 Por favor insira o nome
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Número do cartão</label>
                <input type="text" class="form-control" id="cc-number" name="cc-numero" placeholder="0000 0000 0000 0000" required>
                <div class="invalid-feedback">
                  Por favor insira o número do cartão
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Data de validade</label>
                <input type="text" class="form-control" id="cc-expiration" name="cc-validade" placeholder="mm/aa" required>
                <div class="invalid-feedback">
                  Por favor insira a data de validade do cartão
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="cc-cvv">Código de segurança</label>
                <input type="text" class="form-control" id="cc-cvv" name="cc-cvv" placeholder="000" required>
                <div class="invalid-feedback">
                  Por favor insira o código de segurança
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <input class="btn btn-primary btn-lg btn-block" type="submit" name="finalizar" value="Finalizar compra" style="margin-bottom: 10%">
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
