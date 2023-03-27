<?php
include_once("config.php");
//var_dump($conexao);exit;

if (isset($_GET)) {
    $plano_url = $_GET['plano'];                
  if($plano_url == "ava"){
    $esc_plano = "Plano Avançado";
    $total_plano = "R$540,00";
    $valor_plano = "12X de R$45,00";
  }else{
    $esc_plano = "Plano Básico";
    $total_plano = "R$0,00";
    $valor_plano = "R$ 0,00";
    ?>
 <style><?php include "style.css"; ?></style>
  <?php }}

if (isset($_POST['submit'])) {
  $nome = $_POST['nome_cli'];
  $email = $_POST['email_cli'];
  $idade = $_POST['idade_cli'];
  $celular = $_POST['celular_cli'];
  $senha = $_POST['senha_cli'];
  $confirmar = $_POST['conf_senha_cli']; 
  $parcelas = $_POST['parcelasPlano'];
  $numCartao = $_POST['numCartao'];
  $nomeCartao = $_POST['nomeCartao'];
  $cpf = $_POST['cpf'];
  $cep = $_POST['cep'];
  $endereco = $_POST['endereco'];
  $numCasa = $_POST['numero'];
  $comp = $_POST['complemento'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  
  $plano_url = $_POST['plano_hidden'];
  

  echo "Dados Enviados";
  $sql = "INSERT INTO tb_cadastro_pag (ID,NOME,EMAIL,CELULAR,SENHA,IDADE,PLANO,PARCELAS,NUM_CARTAO,NOME_CARTAO,CPF,CEP,ENDERECO,NUMERO,COMPLEMENTO,BAIRRO,CIDADE,ESTADO) 
    VALUES(null,'$nome','$email','$celular','$senha','$idade','$plano_url','$parcelas','$numCartao','$nomeCartao','$cpf','$cep','$endereco','$numCasa','$comp','$bairro','$cidade','$estado')";
    $result = mysqli_query($mysqli, $sql);
  echo "<script>alert('Pagamento Completo!')</script>";
  header("Location: login.php");
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
  <style><?php include 'style.css'; ?></style>
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

    .logo {
      width: 180px;
    }

    .navbar-horizontal .navbar-brand img {
      height: 50px;
    }

    .btn {
      font-size: 1rem;
    }
  </style>
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="#">
          <img src="../assets/img/logo-enemgo2.png" class="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
        </div>
      </div>
    </nav>
    <!-- CABEÇALHO -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h2 class="text-white">Cadastro</h2>
              <p class="text-lead text-light">Faça seu cadastro!, não perca tempo para ser um dos melhores no Enem.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
          xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div><!-- FIM DO CABEÇALHO -->

    <!-- CONTÉUDO DA PÁGINA -->
    <form role="form" action="pagamento.php" method="post">
      <input type="hidden" name="plano_hidden" value="<?php echo $plano_url; ?>">
      <div class="container-fluid mt--7">
        <div class="row">
          <div class="col-xl-1"></div>
          <div class="col-xl-3 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
              <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <div class="d-flex justify-content-between">
                  <input class="btn btn-sm btn-info mr-4" value="Finalizar" name="submit" type="submit">
                </div>
              </div>

              <!-- VALOR A SE PAGAR -->
              <div class="card-body pt-0 pt-md-4">

                <div class="row">
                  <div class="col">
                    <h3>
                      <span class="font-weight-light">Você está assinando: </span><br>
                      <?php echo $esc_plano;?>
                    </h3>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <center>
                      <h3>
                        <span class="font-weight-light"></span> <?php echo $valor_plano; ?>
                      </h3>
                    </center>

                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <center>
                      <h3>
                        <span class="font-weight-light">Acesso feito no dia: </span>
                        <div>
                          <script>
                            date = new Date().toLocaleDateString();
                            document.write(date);
                          </script>
                        </div>
                      </h3>
                    </center>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col">
                    <center>
                      <h3>
                        <span class="font-weight-light">Total </span> <?php echo $total_plano; ?>
                      </h3>
                    </center>

                  </div>
                </div>

                <!-- NÃO TIRAR -->
                <div class="text-center">
                  <hr class="my-4" />
                </div>
                <!-- NÃO TIRAR -->

              </div>
              <!-- FIM DO VALOR A SE PAGAR -->
            </div>
          </div>
          <div class="col-xl-7 order-xl-1">
            <div class="card bg-secondary shadow">
              <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                  <div class="col-8">
                    <label class="font-weight-light" name="plano"><?php echo $esc_plano; ?></label>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Informações de Cadastro</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city"> </label>
                        <input type="text" id="input-city" class="form-control form-control-alternative"
                          placeholder="Nome Completo" name="nome_cli">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> </label>
                        <input type="number" id="input-country" class="form-control form-control-alternative "
                          placeholder="Idade" name="idade_cli">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city"> </label>
                        <input type="text" id="input-city" class="form-control form-control-alternative"
                          placeholder="E-Mail" name="email_cli">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> </label>
                        <input type="number" id="input-country" class="form-control form-control-alternative "
                          placeholder="Celular" name="celular_cli">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city"> </label>
                        <input type="password" id="input-city" class="form-control form-control-alternative"
                          placeholder="Senha" name="senha_cli">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> </label>
                        <input type="password" id="input-country" class="form-control form-control-alternative "
                          placeholder="Confirmar Senha" name="conf_senha_cli">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <h6 class="heading-small text-muted mb-4">Endereço de cobrança</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> </label>
                        <input type="text" id="input-country" class="form-control form-control-alternative "
                          placeholder="CEP" name="cep">
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> </label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative"
                          placeholder="Endereço" name="endereco">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city"> </label>
                        <input type="text" id="input-city" class="form-control form-control-alternative"
                          placeholder="Número" name="numero">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> </label>
                        <input type="text" id="input-country" class="form-control form-control-alternative"
                          placeholder="Complemento" name="complemento">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> </label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative"
                          placeholder="Bairro" name="bairro">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city"> </label>
                        <input type="text" id="input-city" class="form-control form-control-alternative"
                          placeholder="Cidade" name="cidade">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> </label>
                        <input type="text" id="input-country" class="form-control form-control-alternative"
                          placeholder="Estado" name="estado">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 name="inf_pessoas" class="heading-small text-muted mb-4">Informações pessoais</h6>
                <div name="bloco" class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city"> </label>
                        <input type="text" id="input-city" class="form-control form-control-alternative"
                          placeholder="Número do cartão" name="numCartao">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> </label>
                        <input type="text" id="input-country" class="form-control form-control-alternative "
                          placeholder="Validade" name="validadeCartao">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> </label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative"
                          placeholder="CVV" name="cvvCartao">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city"> </label>
                        <input type="text" id="input-city" class="form-control form-control-alternative"
                          placeholder="Nome impresso no cartão" name="nomeCartao">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> </label>
                        <input type="number" id="input-country" class="form-control form-control-alternative "
                          placeholder="12" name="parcelasPlano">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-7">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> </label>
                        <input type="text" id="input-country" class="form-control form-control-alternative "
                          placeholder="CPF" name="cpf">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br><br>
      </div>
    </form>
  </div>
  </div>

  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>