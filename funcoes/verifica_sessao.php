<?php

session_start();

if (isset($_SESSION['id_usuario']) == false){
    //usuário NÃO  esta logado!!!
    header('Location: login.php');
}

?>