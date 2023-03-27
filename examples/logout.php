<?php
session_start();

session_unset();

session_destroy();

header('../Tela inicial.html');
?>