<?php
//recupera id
if (isset($_GET)) {
    $id_usu = $_GET['id'];  
    include_once("config.php");
    $result = mysqli_query($mysqli, "SELECT * FROM tb_cadastro_pag WHERE ID = $id_usu");
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
        .bg-gradient-default {
            background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important
        }

        .bg-gradient-primary {
            background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
        }

        .footer {
            padding: 0rem;
            margin-top: 7rem;
        }

        .esp {
            margin-left: 35px;
            margin-right: 30px;
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
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./simulados.php">Entre em
                    contato</a>
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
                            <a href="Telainicial.php" class="dropdown-item">
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
                <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
            style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <h1 class="display-2 text-white">Bem vinda
                            <?php echo $dados['NOME']; ?>!                            
                        </h1>
                        <p class="text-white mt-0 mb-5">Esta é a sua página de perfil. Você pode ver algumas de suas
                            informações pessoas e altera-lás.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="../assets/img/trainers/perfil.png" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                            <div class="d-flex justify-content-between">
                                <!--DEIXAR-->
                            </div>
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                        <div>
                                            <span class="heading">22</span>
                                            <span class="description">Lições conclúidas</span>
                                        </div>
                                        <div>
                                            <span class="heading">1</span>
                                            <span class="description">Simulados</span>
                                        </div>
                                        <div>
                                            <span class="heading">38</span>
                                            <span class="description">Vídeos assistidos</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <br>
                                <h3>
                                    <?php echo $dados['NOME'] ?><span class="font-weight-light">,
                                        <?php echo $dados['IDADE'] ?>
                                    </span>
                                </h3>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Minha conta</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="#!" class="btn btn-sm btn-white">Alterar</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <h6 class="heading-small text-muted mb-4">Informações do usuário</h6>
                                <div class="pl-lg-4">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Nome Completo </label>
                                            <input type="name" id="input-email"
                                                class="form-control form-control-alternative"
                                                placeholder="<?php echo $dados['NOME'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email </label>
                                            <input type="email" id="input-email"
                                                class="form-control form-control-alternative"
                                                placeholder="<?php echo $dados['EMAIL'] ?>">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4 esp">ENDEREÇO DE COBRANÇA</h6>
                        <div class="pl-lg-4 esp">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Endereço</label>
                                        <input id="input-address" class="form-control form-control-alternative" value="<?php echo $dados['ENDERECO']; ?>" type="text" placeholder="Endereço">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-city">Cidade</label>
                                        <input type="text" id="input-city" class="form-control form-control-alternative" value="<?php echo $dados['CIDADE']; ?>" placeholder="Cidade">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Estado</label>
                                        <input type="text" id="input-country"
                                            class="form-control form-control-alternative" value="<?php echo $dados['ESTADO']; ?>" placeholder="Estado">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-city">Número</label>
                                        <input type="text" id="input-city" class="form-control form-control-alternative" value="<?php echo $dados['NUMERO']; ?>" placeholder="Número">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Bairro</label>
                                        <input type="text" id="input-country"
                                            class="form-control form-control-alternative" value="<?php echo $dados['BAIRRO']; ?>" placeholder="Bairro">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Complemento</label>
                                        <input id="input-address" class="form-control form-control-alternative"
                                            placeholder="Complemento" value="<?php echo $dados['COMPLEMENTO']; ?>" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2018 <a href="../plano_estudos.php" class="font-weight-bold ml-1" target="_blank">Enem
                            Go!</a>
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