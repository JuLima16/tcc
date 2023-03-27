<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>EnemGo!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- LOGO NAVEGADOR -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
<a href="telainicial.php" class="logo me-auto"><img class="" src="../assets/img/logo-enemgo.png" width="150" walt="" class="img-fluid"></a>
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a  href="telainicial.php">Home</a></li>
        <li><a href="telainicial.php" class="section-scroll">Sobre Nós</a></li>
        <li><a href="telainicial.php">Nossa Equipe </a></li>
        <li><a class="active" href="pricing.php">Planos</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <a href="login.php" class="get-started-btn">Login</a>
  </div>
</header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Preços</h2>
        <p>Seja um dos mais de 1.400 alunos que aprovam nosso curso, e realizam seus sonhos de estudar na faculdade desejada. </p>
      </div>
    </div><!-- End Breadcrumbs -->

     <!-- Planos -->
     <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Planos</h2>
          <p>Conheça nossos planos</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <h3>Básico</h3>
              <h4><sup>$</sup>0<span> / mês</span></h4>
              <ul>
                <li>Anúncios</li>
                <li>Conteúdo Limitado</li>
                <li>20 perguntas por dia</li>
                <li class="na">Cronograma de estudos</li>
                <li class="na">Redações</li>
                <li class="na">Chat Rápido</li>
              </ul>
              <div class="btn-wrap">
                <a href="pagamento.php?plano=<?php echo "bas"?>" class="btn-buy">Assine Aqui</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured">
              <h3>Plano Avançado</h3>
              <h4><sup>$</sup>45<span> / 12 meses</span></h4>
              <ul>
                <li>Sem Anúncios</li>
                <li>Conteúdo Ilimitado</li>
                <li>Cronograma de estudos</li>
                <li>4 Redações por Mês</li>
                <li>100 perguntas por dia</li>
                <li>Chat Rápido</li>
              </ul>
              <div class="btn-wrap">
                <a href="pagamento.php?plano=<?php echo "ava"?>" class="btn-buy">Assine Aqui</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Planos -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>EnemGo!</h3>
            <p>
              Av. Brigadeiro Faria Lima <br>
              Itaim Bibi, São Paulo - 04538-133<br>
              Brasil <br><br>
              <strong>Telefone:</strong> +55 4936-5600<br>
              <strong>Email:</strong> ContatoEnemGo@enemgo.com<br>
            </p>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre Nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Matérias</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nossa Equipe</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Planos</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Nosso Jornal</h4>
            <p>Cadastre seu email para receber novidades e informações sobre o EnemGo!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Inscreva-se">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>EnemGo!</span></strong> <br>
          Todos os Direitos Reservados
        </div>
        <div class="credits">
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>