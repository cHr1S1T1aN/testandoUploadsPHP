<?php
    session_start();
    try{
        $usuario_nome = "chris";
        $senha = "123";
        $nome_formulario = $_POST["name"];
        $senha_formulario = $_POST["pass"];

        if($nome_formulario != $usuario_nome){
            throw new Exception("tudo errado");
        }
        if($senha_formulario != $senha){
            throw new Exception("tambem errado");
        }
        $_SESSION["usuario_logado"] = $nome_formulario;
        echo "tudo certo rapaz";
        header("location: login.php");
    }catch(Exception $e){
        echo $e -> getMessage();
        header("location: index.php?falhou=true");
    }
?>