<?php
session_start();
include_once 'config.php';
if(isset($_POST['submit'])){ 
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $query = "SELECT * FROM tb_cadastro_pag WHERE EMAIL = '$email' AND SENHA = '$senha'";
    $result = mysqli_query($mysqli, $query);
    $qtd_registros = mysqli_num_rows($result);

    if ($qtd_registros == 1){
       $dados = mysqli_fetch_array($result);
        $_SESSION['EMAIL'] = $dados['EMAIL'];
        $_SESSION['SENHA'] = $dados['SENHA'];
        $_SESSION['NOME_USUARIO'] = $dados['NOME'];
        $_SESSION['PLANO'] = $dados['PLANO'];
        $_SESSION['ID_USU'] = $dados['ID'];
        header('Location: plano_estudos.php');

    }else{
        header('Location: login.php');
        echo "<span> Algo deu errado! </span>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Enem Go!
  </title>
  <!-- Favicon --> <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts --> <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons --> <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <!-- CSS Files --> <link href="../assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />

  <style>
    .bg-gradient-primary {
      background: linear-gradient(87deg, #f5365c 0, #f56036 100%)!important;
    }

    .logo{
      width: 150px;
    }
  </style>
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand">
          <img src="../assets/img/logo-enemgo2.png"  class="logo"/>
        </a>

          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">           
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="pricing.php?plano">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Registro</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="login.php">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Bem Vindo!</h1>
              <p class="text-lead text-light">Faça seu login ou cadastre-se, não perca tempo para ser um dos melhores no Enem.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
            
              </div>
              <form role="form" method="post" action="login.php">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Senha" type="password" name="senha">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Lembre me</span>
                  </label>
                </div>
                <div class="text-center">
                  <input type="submit" name="submit" class="btn btn-primary my-4" value="Entrar">       
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Esqueceu a senha?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="register.php" class="text-light"><small>Criar uma conta</small></a>
            </div>
          </div>          
        </div>
      </div>
    </div>  
  </div>
</body>
</html>