<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Uploads</title>
    </head>
    <body>
        <?php
        session_start();
        if(!isset($_SESSION["usuario_logado"])){
            header ("location.index.php");
            unset ($_SESSION["usuario_logado"]);
        }
        ?>
        <header>
            <h1>Uploads</h1>
        </header>
        <main>
            <form method="POST" action="upfile.php" enctype="multipart/form-data">
                <label for="nome">arquivo</label>
                <input name="arquivoup" type="file" placeholder="Seu nome aqui" required>
                <button type="submit" placeholder="enviar">Envie</button>
            </form>
            <a href="index.php?sair=true">sair</a>
        </main>
    </body>
</html>