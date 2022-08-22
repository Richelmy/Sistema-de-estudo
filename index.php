<?php

if (!isset($_SESSION)) session_start();

if (!isset($_SESSION["userID"]) || !isset($_SESSION["userNome"])) 
{
    header("Location: login.php"); exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.scss">
    <title>Sistema de estudos</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4114c29a55.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->
    <ul class="Navbar">
        <li class="navbarItem"><a href="">Home</a></li>
        <li class="navbarItem"><a href="#news">Notícias</a></li>
        <li class="navbarItem"><a href="#contact">Contato</a></li>
        <li class="navbarItem" style="float:right"><a href="logout.php">Logout</a></li>
        <li class="navbarItem" style="float:right"><a class="pointerNull">Olá, <?php echo $_SESSION['userNome']; ?>!</a></li>
    </ul>
</body>
</html>