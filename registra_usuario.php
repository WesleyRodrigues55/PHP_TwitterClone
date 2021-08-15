<?php
    require_once('db.class.php');

    //recupero os dados do formulário via post
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //instancia o banco de dados
    $objDb = new db();
    $objDb->conecta_mysql();
    $link = $objDb->conecta_mysql();

    $sql = "insert into usuario(usuario, email, senha) values('$usuario', '$email', '$senha')";
    
    //executar a query e validar
    if (mysqli_query($link, $sql)){
        echo 'usuário registrado com sucesso';
    } else {
        echo 'Erro ao registrar o usuário';
    }
?>