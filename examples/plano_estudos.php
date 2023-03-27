<?php
session_start();
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM tb_planoestudos");
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
  <script src="../js2/jquery.min.js"></script>
  <script src="../js2/main.js"></script>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <style>
    .bg-gradient-primary {
      background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
    }

    .icon {
      width: 0rem;
      height: 0rem;
    }

    .calendar-wrap {
      width: 65%;
      background: rgb(255, 255, 255);
      padding: 25px 20px 0px 20px;
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
    </div>
  </nav>

  <!-- -------------------------------------------------------------------------- -->

  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./plano_estudos.php">Plano de
          Estudos</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <script>
                function search(string) {
                  const input = document.querySelector('input');
                  input.addEventListener('change', updateValue);
                  window.find(string);
                  //search(document.getElementById('search').value)
                }
              </script>
              <input class="form-control" placeholder="Pesquisar" type="text" id="search">
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

    <!-- FIM DA BARRA SUPERIOR -->

    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">

      <!-- --------------- VIDEOAULAS --------------- -->
      <div class="row mt-5">
        <div class="col-xl-1"></div>
        <div class="col-xl-6 mb-5 mb-xl-0">

          <?php
        while ($res = mysqli_fetch_array($result)) { ?>
          <a href="direcionamento_plano.php?id=<?php echo $res['ID'] ?>" style="color: #525f7f;">
            <div class="card card-stats mb-4 mb-xl-0 shadow p-3 bg-body rounded ">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">
                    <div class="icon icon-shape icon-lg bg-gradient shadow text-center border-radius-lg">
                      <span class="material-symbols-outlined text">
                        <?php echo $res['ICONE'] ?>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <h5 class=" h6 card-title text-uppercase text-muted mb-0">
                      <?php echo $res['MATERIA'] ?>
                    </h5>
                    <span class="h4 font-weight-bold mb-0">
                      <?php echo $res['TOPICO'] ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <br>
          <?php } ?>
        </div>

        <!-- --------------------------------------------------------------------------------------------  -->

        <div class="col-xl-4">
          <div class="card card-stats mb-4 mb-xl-0 shadow bg-body rounded">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class=" h6 card-title text-uppercase text-muted mb-0">Semana 1</h5>
                  <span class="h5 font-weight-bold mb-0">13 de Novembro - 20 de Novembro</span>
                </div>
              </div>
            </div>
          </div>
          <br>
          <section class="ftco-section">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="elegant-calencar d-md-flex">
                    <div class="wrap-header d-flex align-items-center img" style="background-color: transparent;">
                      <div id="header" class="p-0">
                        <!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
                        <div class="head-info" style="font-size: 0.6rem;">
                          <div class="head-month"></div>
                          <div class="head-day"></div>
                        </div>
                        <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
                      </div>
                    </div>
                    <div class="calendar-wrap">
                      <div class="w-100 button-wrap">
                        <div class="pre-button d-flex align-items-center justify-content-center"><i
                            class="fa fa-chevron-left"></i></div>
                        <p id="reset" class="d-inline">Hoje</p>
                        <div class="next-button d-flex align-items-center justify-content-center"><i
                            class="fa fa-chevron-right"></i></div>
                      </div>
                      <table id="calendar">
                        <thead>
                          <tr>
                            <th>Dom</th>
                            <th>Seg</th>
                            <th>Ter</th>
                            <th>Qua</th>
                            <th>Qui</th>
                            <th>Sex</th>
                            <th>Sáb</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-xl-1"></div>
      </div>

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
      <br>
    </div>
  </div>
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>