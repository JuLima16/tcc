<?php
session_start();
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM tb_simulados");
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

    .texto {
      text-align: justify;
      margin-left: 5%;
      margin-right: 5%;
    }

    .card-stats .card-body {
      padding: 0.8rem 1.5rem;
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
        <?php include "plano.php";?>
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./simulados.php">Simulados</a>

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
              <a href="../telainicial.php" class="dropdown-item">
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
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col-xl-1"></div>
        <div class="col-xl-6">
          <?php while ($res = mysqli_fetch_array($result)) { ?>
          <div class="card card-stats mb-4 mb-xl-0 shadow p-3 bg-body rounded ">
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                  <a href="<?php echo $res['PDF'] ?>" class="avatar rounded-circle mr-3">
                    <br>
                    <img alt="Image placeholder" src="../assets/img/theme/simulado.png">
                  </a>
                </div>
                <div class="col-md-6">
                  <h5 class=" h6 card-title text-uppercase text-muted mb-0">DISPONÍVEL:
                    <?php echo $res['DATA'] ?>
                    <div class="d-inline" style="color: transparent;">---</div>
                  </h5>
                  <span class="h4 font-weight-bold mb-0">
                    <?php echo $res['NUM_SIM'] ?>º Simulado Enem 2022
                  </span>
                </div>
              </div>
            </div>
          </div>
          <br>
          <?php } ?>
        </div>

        <!-- --------------------------------------------------------------------------------------------------------------------- -->

        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Sobre os simulados:</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Como funcionam os Simulados?</th>
                  </tr>
                </thead>
                <tbody>
                  <th class="">
                    <div class="texto">
                      Os Simulados do Enem Go! são 100% online e feitos no formato Enem, alternando entre questões
                      fáceis, médias e difíceis. Ao longo do ano, são realizadas 4 provas para você testar os seus
                      conhecimentos como se estivesse no dia do Enem. São cobradas todas as matérias da prova:
                      Linguagens, Matemática, Ciências da Natureza e Ciências Humanas.
                      <br>
                      <br>
                      <b>Análise de Desempenho </b> <br>
                      A cada Simulado do Enem Go! você recebe um relatório de desempenho que mostra os seus pontos
                      fortes e a melhorar em cada área de conhecimento, comparando sua evolução a cada simulado
                      realizado.
                      <br>
                      <br>
                      <b>Resultados </b><br>
                      Ao finalizar cada prova você terá acesso imediato ao gabarito de cada questão. Você ainda terá
                      acesso à sua nota TRI e um relatório de desempenho, que irá mostrar toda sua evolução ao longo dos
                      simulados!
                      <br>
                      <br>
                      <b>Dia do Simulado</b><br>
                      Prepare um local e separe um tempo adequado para a realização das provas. Lembrando que uma vez
                      iniciado, você não poderá pausar o simulado! Não se preocupe: se a sua internet cair, as questões
                      respondidas estarão salvas. Mas é importante ressaltar que o tempo continuará rodando, então,
                      assim que der, volte para continuar seu simulado com o tempo restante.
                    </div>
                  </th>
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
            </div>
          </div>
        </div>
        <div class="col-xl-1"></div>
      </div>
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