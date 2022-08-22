<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.scss">
    <title>Faça o login</title>
</head>
<body>

<form action="validacao.php" method="post">
    <fieldset>
        <legend>Login</legend>
        <label for="loginUser">Usuário</label>
        <input type="text" name="usuario" id="loginUser" maxlength="25" />
        <label for="loginSenha">Senha</label>
        <input type="password" name="senha" id="loginSenha" />

        <input type="submit" value="Entrar" />
    </fieldset>
</form>

</body>
</html>