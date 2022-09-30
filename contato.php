<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EMail</title>
    </head>
    <body>
    <h1>Contato</h1>
        <form action="enviar_email.php" method="post">
            <label for="nome">Digite seu nome:</label>
            <input type="text" name="nome" required /><br />
            <label for="email">Digite seu email:</label>
            <input type="email" name="email" required /><br />
            <label for="nome">Digite a mensagem:</label><br />
            <textarea name="mensagem"></textarea><br />
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>