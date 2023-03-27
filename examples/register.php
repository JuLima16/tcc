<?php
include_once("config.php");
//var_dump($conexao);exit;

if(isset($_POST['submit'])) {	
    $nome = $_POST['nome'];
	$email =  $_POST['email'];
  $idade =  $_POST['idade'];
    $celular = $_POST['celular'];
	$senha = $_POST['senha'];
    $confirmar = $_POST['confirmarSenha'];
    $termos = $_POST['termosPriv'];

    if(($senha == $confirmar) && ($termos = "on")){
        $sql = "INSERT INTO tb_cadastro (ID,NOME,EMAIL,CELULAR,SENHA,IDADE) 
    VALUES(null, '$nome','$email','$celular','$senha','$idade')";
    $result = mysqli_query($conexao, $sql);
    echo "<script>alert('Registro Completo!')</script>";
    header("Location: login.php");
    }
    else{
        echo "Senhas não confirmam!";
        echo "<br>";
        echo $termos;
    }

} else {
  //  var_dump("ok");
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
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />

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
        <a class="navbar-brand" href="../telainicial.php">
          <img src="../assets/img/logo-enemgo2.png"  class="logo"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">         
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="register.php">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Registro</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="login.php" >
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
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">           
            <div class="card-body px-lg-5 py-lg-5">              
              <form role="form" action="register.php" method="post">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nome" type="text" name="nome">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                    </div>
                    <input class="form-control" placeholder="Idade" type="text" name="idade">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-headphones"></i></span>
                    </div>
                    <input class="form-control" placeholder="Celular" type="text" name="celular">
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
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Confirmação de senha" type="password" name="confirmarSenha">
                  </div>
                </div>
                <div class="text-muted font-italic"><small>Força da senha: <span class="text-success font-weight-700">Forte</span></small></div>
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox" name="termosPriv">
                      <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">Eu concordo com os Termos de Privacidade</a></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <input type="submit" name="submit" class="btn btn-primary mt-4" value="Criar Conta">                 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>
</html>

