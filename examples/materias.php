<?php
session_start();
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM tb_materias");
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
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <style>
    .bg-gradient-primary {
      background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
    }

    .mt--7,
    .my--7 {
      margin-top: 0rem !important;
    }

    .container {
      width: 50%;
      display: flex;
      margin-top: 2%;

      padding: 0.0001%;
      border: 1px;
      border-radius: 0.375rem;
    }

    .row {
      display: flex;
    }

    .bg-gradient {
      background: #ecf9f0;
    }

    .text {
      color: #f5365c;
    }

    .espaco {
      display: flex;
      margin-right: 1px;
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, 0.05);
      border-radius: 0.375rem;
    }

    .card:hover {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, 0.05);
      border-radius: 0.375rem;
      box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.176);
    }

    a {
      color: #525f7f;
    }

    a:hover {
      color: #525f7f;
    }

    .teste {
      margin-left: 15px;
    }

    .text {
      color: #32325d;
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
        <?php
            include "plano.php";
        ?>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Explorar</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="banco_questoes_mat.php?id=1">
              <i class="ni ni-palette"></i> Banco de Questões
            </a>
          </li>
        </ul>
      </div>
  </nav>

  <div class="main-content">

    <!-- BARRA SUPERIRO -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">

        <!-- NOME DA PAGINA -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./materias.php">Matérias</a>
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
                <?php
            include "../components/nome_usuario.php";
            ?>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Bem Vindo!</h6>
              </div>
              <a href="perfil.php?id=<?php echo $_SESSION['ID_USU']; ?>" class="dropdown-item">
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

    <!-- DEGRADE DO CABEÇALHO -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
        </div><!-- FIM CALENDARIO -->
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- FIM DEGRADE DO CABEÇALHO  -->

      <!--COMEÇO DO CONTÉUDO DA TELA -->
      <div class="itens">
        <div class="row">
          <div class="container">
            <div class="col-12">
              <div class="row ">
                <h3 class="titulos">Ciências Humanas</h3>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="espaco"></div>
          <div class="container">
            <div class="col-xl-15">
              <div class="row">
                <?php $result = mysqli_query($mysqli, "SELECT * FROM `tb_materias` WHERE CATEGORIA = 'Ciências Humanas';"); ?>
                <?php while ($res = mysqli_fetch_array($result)) { ?>
                <a href="direcionamento_materia.php?id=<?php echo $res['ID'] ?>">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient shadow text-center border-radius-lg">
                        <span class="material-symbols-outlined text">
                          <?php echo $res['ICONE'] ?>
                        </span>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">
                        <?php echo $res['NOME_MATERIA'] ?>
                      </h6>
                      <span class="text-xs">
                        <?php echo $res['QTD_MODULOS'] ?> môdulos
                      </span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0">Ver Contéudo</h5>
                    </div>
                  </div>
                </a>
                <div class="teste"> </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <br>

        <!-- ----------------------------------------------------------------------------------------------->
        <div class="row">
          <div class="container">
            <div class="col-12">
              <div class="row ">
                <h3 class="titulos">Ciências da Natureza</h3>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="espaco"></div>
          <div class="container">
            <div class="col-xl-15">
              <div class="row">
                <?php $result = mysqli_query($mysqli, "SELECT * FROM `tb_materias` WHERE CATEGORIA = 'Ciências da Natureza';"); ?>
                <?php while ($res = mysqli_fetch_array($result)) { ?>
                <a href="direcionamento_materia.php?id=<?php echo $res['ID'] ?>">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient shadow text-center border-radius-lg">
                        <span class="material-symbols-outlined text">
                          <?php echo $res['ICONE'] ?>
                        </span>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">
                        <?php echo $res['NOME_MATERIA'] ?>
                      </h6>
                      <span class="text-xs">
                        <?php echo $res['QTD_MODULOS'] ?> môdulos
                      </span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0">Ver Contéudo</h5>
                    </div>
                  </div>
                </a>
                <div class="teste"></div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <br>
        <!-- ----------------------------------------------------------------------------------------------->
        <div class="row">
          <div class="container">
            <div class="col-12">
              <div class="row ">
                <h3 class="titulos">Linguagens</h3>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="espaco"></div>
          <div class="container">
            <div class="col-xl-15">
              <div class="row">
                <?php $result = mysqli_query($mysqli, "SELECT * FROM `tb_materias` WHERE CATEGORIA = 'Linguagens';"); ?>
                <?php while ($res = mysqli_fetch_array($result)) { ?>
                <a href="direcionamento_materia.php?id=<?php echo $res['ID'] ?>">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient shadow text-center border-radius-lg">
                        <span class="material-symbols-outlined text">
                          <?php echo $res['ICONE'] ?>
                        </span>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">
                        <?php echo $res['NOME_MATERIA'] ?>
                      </h6>
                      <span class="text-xs">
                        <?php echo $res['QTD_MODULOS'] ?> môdulos
                      </span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0">Ver Contéudo</h5>
                    </div>
                  </div>
                </a>
                <div class="teste"> </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <br>

        <!-- ----------------------------------------------------------------------------------------------->

        <div class="row">
          <div class="container">
            <div class="col-12">
              <div class="row ">
                <h3 class="titulos">Matemática</h3>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="espaco"></div>
          <div class="container">
            <div class="col-xl-15">
              <div class="row">
                <?php $result = mysqli_query($mysqli, "SELECT * FROM `tb_materias` WHERE CATEGORIA = 'Matemática';"); ?>
                <?php while ($res = mysqli_fetch_array($result)) { ?>
                <a href="direcionamento_materia.php?id=<?php echo $res['ID'] ?>">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient shadow text-center border-radius-lg">
                        <span class="material-symbols-outlined text">
                          <?php echo $res['ICONE'] ?>
                        </span>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">
                        <?php echo $res['NOME_MATERIA'] ?>
                      </h6>
                      <span class="text-xs">
                        <?php echo $res['QTD_MODULOS'] ?> môdulos
                      </span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0">Ver Contéudo</h5>
                    </div>
                  </div>
                </a>
                <div class="teste"> </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="container">
            <div class="col-12">
              <div class="row ">
                <h3 class="titulos">Redação </h3>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="espaco"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-15">
                <?php $result = mysqli_query($mysqli, "SELECT * FROM `tb_materias` WHERE CATEGORIA = 'Redação';"); ?>
                <?php while ($res = mysqli_fetch_array($result)) { ?>
                <a href="direcionamento_materia.php?id=<?php echo $res['ID'] ?>">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient shadow text-center border-radius-lg">
                        <span class="material-symbols-outlined text">
                          <?php echo $res['ICONE'] ?>
                        </span>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">
                        <?php echo $res['NOME_MATERIA'] ?>
                      </h6>
                      <span class="text-xs">
                        <?php echo $res['QTD_MODULOS'] ?> módulos
                      </span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0">Ver Conteúdo</h5>
                    </div>
                  </div>
                </a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
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
    </div>
  </div>
  <!--FIM DO CONTÉUDO DA TELA -->

  <!-- CODIGOS -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>