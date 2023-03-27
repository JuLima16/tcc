<?php
//recupera id
if (isset($_GET)) {
  $id = $_GET['id'];
  include_once("config.php");
  $result = mysqli_query($mysqli, "SELECT * FROM tb_planoestudos WHERE ID = $id");
  $dados = $result->fetch_array();
} else {
  echo "Erro 505";
}
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    EnemGo!
  </title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <style>
    html {
      scroll-behavior: smooth;
    }

    .bg-gradient-primary {
      background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
    }


    .icon {
      width: 0rem;
      height: 0rem;
    }


    .card-profile-image img {
      max-width: 140px;

    }

    .card-profile-stats {
      padding: 0.3rem 0;
    }

    .espa {
      height: 6%;
      background: transparent;
      border: transparent;
    }

    .btn-light {
      color: #fff;
      background-color: #ffffff;
      border-color: #ffffff;
      box-shadow: 0 4px 6px rgb(50 50 93 / 11%), 0 1px 3px rgb(0 0 0 / 8%);
      font-size: 1rem;
    }

    input,
    button,
    select,
    optgroup,
    textarea {
      font-family: Open Sans, sans-serif;
    }

    .btn {
      font-weight: 400;
    }

    .table td,
    .table th {
      font-size: 0.8125rem;
      white-space: inherit;
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
        <ul class="navbar-nav">
          <br>
          <li class="nav-item">
            <a class="nav-link active" href="../plano_estudos.php">
              <i class="ni ni-folder-17 text-blue"></i> Plano e Estudos
            </a>
          </li>
          <li>
            <hr class="my-4">
          </li>
          <li class="nav-item">
            <a class="nav-link " href="materias.php">
              <i class="ni ni-books text-info"></i> Matérias
            </a>
          </li>
          <hr class="my-1">
          <li class="nav-item">
            <a class="nav-link " href="./simulados.php">
              <i class="ni ni-time-alarm text-orange"></i> Simulados
            </a>
          </li>
          <hr class="my-1">
          <li class="nav-item">
            <a class="nav-link " href="./redacao.php">
              <i class="ni ni-single-copy-04 text-yellow"></i> Redação
            </a>
          </li>
        </ul>

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

  <!-- -------------------------------------------------------------------------- -->

  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="Números Inteiros.php">Plano de
          Estudos /
          <?php echo $dados['MATERIA'] ?>
        </a>
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
        <!-- User -->
        <!-- OPÇÕES DO USER -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <div class="media align-items-center">
                <?php
              include "../components/nome_usuario.php";
              ?>
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
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">

      <!-- --------------- VIDEOAULA --------------- -->
      <div class="row mt-5">
        <div class="col-xl-1 mb-5 mb-xl-0"></div>
        <div class="col-xl-7 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">
                <?php echo $dados['TOPICO'] ?>
              </h3>
            </div>
            <div class="table-responsive">
              <iframe id="video" width="100%" height="400" src="<?php echo $dados['VIDEO'] ?>"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
            <div class="card-footer py-4">
            </div>
          </div>
        </div>

        <!-- CONTÉUDO DO TEMA  -->
        <div class="col-xl-3">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="<?php echo $dados['FOTO_PROF'] ?>" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <br>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading padding-bottom">
                        <?php echo $dados['QUANT_EXER'] ?>
                      </span>
                      <span class="description">Exercícios</span>
                    </div>
                    <div>
                      <span class="heading padding-bottom">1</span>
                      <span class="description">Videoaula</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  Profº
                  <?php echo $dados['NOME_PROF'] ?>
                </h3>
              </div>
            </div>
          </div>

          <!-- -------------------------------------------------------------------------------------------- -->

          <div class="card espa"></div>
          <a href="<?php echo $dados['PDF'] ?>">
            <button type="button" class="btn btn-light" style="width: 100%; height: 11%; color: #525f7f;">
              <div class="d-inline" style="margin-right: 3%;"></div>
              <i class="ni ni-check-bold text-dark" style="margin-right: 15%;"></i> Exercícios <div class="d-inline"
                style="margin-left: 50%;"></div>
            </button>
          </a>
        </div>
        <div class="col-xl-1 mb-5 mb-xl-0"></div>
      </div>

      <!--------------------------------------------------------------------------------------------------------------------------------------->

      <br>
      <br>
      <br>

      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="plano_estudos.php" class="font-weight-bold ml-1" target="_blank">Enem Go!</a>
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
    </div>
  </div>

  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>