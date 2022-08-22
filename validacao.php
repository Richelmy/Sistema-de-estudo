<?php

if (empty($_POST['usuario']) OR empty($_POST['senha']))
{
    header("Location: login.php"); exit;
}

if (mysqli_connect_errno()) 
{
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

$mysqli = new mysqli('localhost', 'root', 'unl0ck@phpmyadmin', 'sistemaestudo');

$usuario = ($_POST['usuario']);
$senha = ($_POST['senha']);

$query = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) != 1) 
{
    echo "Login inválido!"; exit;
} 
else 
{
    $resultado = mysqli_fetch_assoc($result);

    if (!isset($_SESSION)) session_start();

    $_SESSION['userID'] = $resultado['id'];
    $_SESSION['userNome'] = $resultado['nome'];
    $_SESSION['userNivel'] = $resultado['nivel'];

    $nivel_necessario = 2;

    if (!isset($_SESSION['userID']) OR ($_SESSION['userNivel'] < $nivel_necessario)) 
    {
        session_destroy();
        header("Location: login.php"); exit;
    }

    header("Location: index.php"); exit;
}

?>