<?php
include_once("config.php");
//var_dump($conexao);exit;

if(isset($_POST['submit'])) {	
    $email = $_POST['email'];
    $tema = $_POST['tema'];
    $foto = $_POST['arquivo'];
	

    if($email || ""){
        $sql = "INSERT INTO tb_corrigirredacoes (ID,EMAIL,TEMA,FOTO) 
        VALUES(null,'$email','$tema','$foto')";
        $result = mysqli_query($conexao, $sql);

    echo "<script>alert('Registro Completo!')</script>";
    header("Location: minhas_redacao.php");
    }
    else{
        echo "Senhas não confirmam!";
        echo "<br>";        
    }

} else {
    var_dump("ok");
}

?>