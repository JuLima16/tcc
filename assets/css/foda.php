<?php

$produtos = $_POST["produtos"];
$salario = $_POST["salario"];
$comissao = 0;

if ($produtos > 0 and $produtos <= 5){
    $comissao = ($salario/100) * 5;
    echo "A comissão do funcionario é de: " . $comissao;
}

elseif ($produtos >= 6 and $produtos <= 10){
    $comissao = ($salario/100) * 10;
    echo "A comissão do funcionario é de: " . $comissao;
}

elseif ($produtos > 10){
    $comissao = ($salario/100) * 15;
    echo "A comissão do funcionario é de: ". $comissao;
}
?>
