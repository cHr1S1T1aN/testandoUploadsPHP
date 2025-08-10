<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Uploads</title>
    </head>
    <body>
        <header>
            <h1>Uploads</h1>
        </header>
        <main>
            <form method="POST" action="autenticador.php" /*action="upfile.php"*/ /*enctype="multipart/form-data"*/>
                <label>Usuario:</label>
                <input name="name" type="text" placeholder="Seu usuario" required>
                <label>
                    senha:
                    <input type="password" name="pass">
                </label>
                <button type="submit" placeholder="enviar">Envie</button>
            </form>
        </main>
    </body>
</html>