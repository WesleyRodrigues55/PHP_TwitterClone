<?php
    require_once('db.class.php');

    //recupera os dados do formulário via post
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";

    //instancia o banco de dados
    $objDb = new db();
    // $objDb->conecta_mysql();
    $link = $objDb->conecta_mysql();

    //executar a query (consulta)
    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        //retorna os dados em estruturas de array
        $dados_usuario = mysqli_fetch_array($resultado_id);
        if(isset($dados_usuario['usuario'])){
            echo 'Usuário existe';
        } else {
            header('Location: index.php?erro=1');
        }
    } else {
        echo 'Erro na execução da consulta.';
    }
?>