<?php
if($_SESSION['PLANO'] == "bas"){?>

<ul class="navbar-nav">
          <br>
          <li class="nav-item">
      <a name="btn_plano_estudos" class="nav-link active" href="plano_estudos.php">
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
            <a class="nav-link " href="redacao.php">
              <i class="ni ni-single-copy-04 text-yellow"></i> Redação
            </a>
          </li>
        </ul>
<?php }else{ ?>
    <ul class="navbar-nav">
    <br>
    <li class="nav-item">
      <a name="btn_plano_estudos" class="nav-link active" href="plano_estudos.php">
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
      <a class="nav-link " href="simulados.php">
        <i class="ni ni-time-alarm text-orange"></i> Simulados
      </a>
    </li>
    <hr class="my-1">
    <li class="nav-item">
      <a class="nav-link " href="redacao.php">
        <i class="ni ni-single-copy-04 text-yellow"></i> Redação
      </a>
    </li>
  </ul>
<?php } ?>