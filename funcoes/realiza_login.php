<?php


if (isset($_POST['btnEntrar'])){ //se o usuário clicou no entrar...

    include_once '../config.php';

    //captura dados do formulario
    $email = $_POST['txtEmail'];
    $senha = $_POST['txtSenha'];
    //query de consulta
    $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = PASSWORD('$senha')";
    //executa a consulta
    $result = mysqli_query($mysqli, $query);
    //busca a quantidade de registro que se obteve na consulta
    $qtd_registros = mysqli_num_rows($result);
    //verifica a quantidade de registros para validar o usuário.
    if ($qtd_registros == 1){
        //REALIZA E PROCEDE O LOGIN
        //CAPTURA OS DADOS VINDOS DA CONSULTA
        $dados = mysqli_fetch_array($result);
        //iniciar uma sessão
        session_start();
        //preenchendo as sessões para compartilhar com a aplicação.
        $_SESSION['id_usuario'] = $dados['id']; //id = nome da coluna no DB
        $_SESSION['nome_usuario'] = $dados['nome'];

        header('Location: ../painel.php');

    }else{
        //ERRO DE LOGIN
        echo "E-mail ou Senha incorretos!";
    }

}

?>