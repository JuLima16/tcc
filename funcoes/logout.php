<?php

session_start();
//REMOVER TODAS AS VARIAVEIS DE SESSÃO EXISTENTES.
session_unset();
//DESTRUIR TODA A SESSÃO DO PROJETO.
session_destroy();
//REDIRECIONA PARA PÁGINA DE LOGIN
header('Location: ../login.php');


?>