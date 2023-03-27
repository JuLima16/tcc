<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM tb_redacoes");
session_start();
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
      background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
    }

    .table td,
    .table th {
      font-size: 0.8125rem;
      white-space: inherit;
    }

    .card-body {
      height: 120px;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      color: #f5365c;
      background-color: #ffffff;
    }

    .nav-pills .nav-link {
      color: #ffffff;
      background-color: transparent;
    }

    .nav-pills .nav-link:hover {
      color: #f5365c;
      background-color: #ffffffa3;
    }

    .card {
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, 0.05);
      box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.176);
    }

    .footer {
      padding: 0rem;
      margin-top: 7rem;
    }
  </style>
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- LOGO -->
      <a class="navbar-brand pt-0" href="materias.php">
        <img src="../assets/img/logo-enemgo3.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Navigation -->
        <?php include_once("plano.php"); ?>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Explorar</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="./banco_questoes_mat.php?id=1">
              <i class="ni ni-palette"></i> Banco de Questões
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">

    <!-- BARRA SUPERIRO -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">

        <!-- NOME DA PAGINA -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="redacao.php">Redação</a>

        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Pesquisar" type="text">
            </div>
          </div>
        </form>

        <!-- OPÇÕES DO USER -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <div class="media align-items-center">
                <?php include_once("../components/nome_usuario.php"); ?>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Bem Vindo!</h6>
              </div>
              <a href="perfil.php?id=<?php echo $_SESSION['ID_USU']?>" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Meu Perfil</span>
              </a>              
              <div class="dropdown-divider"></div>
              <a href="telainicial.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Sair</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav><!-- FIM DA BARRA SUPERIOR -->

    <!-- DEGRADE DO CABEÇALHO-->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">

          <!-- DENTRO DO DEGRADE -->
          <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Temas</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./minhas_redacao.php?id=<?php echo $_SESSION['ID_USU']?>">Minhas Redações</a>
            </li>
            <li class="nav-item"></li>
            <li class="nav-item"> </li>
            <li class="nav-item"> </li>
          </ul>
          <hr>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <center>
        <div class="row">
          <?php
      while ($res = mysqli_fetch_array($result)) { ?>
          <div class="col-xl-3">
            <div class="card" style="width: 18rem;">
              <a href="./direcionamento_redação.php?id=<?php echo $res['ID'] ?>" style="color: #525f7f;">
                <img height="120" src="<?php echo $res['IMAGEM'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <?php echo $res['TEMA'] ?>
                  </p>
                </div>
              </a>
            </div>
          </div>
          <?php } ?>
        </div>
      </center>
      <br>
      <br>

      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="../plano_estudos.php" class="font-weight-bold ml-1" target="_blank">Enem Go!</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Sobre Nós</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Política de Privacidade</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Fale Conosco</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Assine Agora</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
      <br>
    </div>
  </div>

  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>