<?php
    $diretorio_upload = "enviados/";
    try{
        if(!is_dir($diretorio_upload))
            throw new Exception("diretorio errado");
        if(is_executable($_FILES["arquivoup"]["tmp_name"]))
            throw new Exception ("Não é possivel usar esse arquivo");
            echo "ta certo ainda<br>";
            //var_dump ($_FILES);
            $extensao_arquivo = pathinfo($_FILES["arquivoup"]["name"],PATHINFO_EXTENSION);
            $arquivo_unico = uniqid("enviado_"). "." . $extensao_arquivo;
            $nome_arquivo_servidor = $diretorio_upload . $arquivo_unico;
            if(move_uploaded_file($_FILES["arquivoup"]["tmp_name"],$nome_arquivo_servidor)){
                echo "arquivo enviado";    
            }else throw new Exception("erro" . $_FILES["arquivoup"]["error"]);
        }catch (Exception $e){
            echo $e -> getMessage();
        }
?>