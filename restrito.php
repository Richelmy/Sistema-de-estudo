<?php

if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['userID'])) 
{
    session_destroy();
    header("Location: index.php"); exit;
}

?>

<p>Olá, <?php echo $_SESSION['userNome']; ?>!</p>
<h1>Página restrita!</h1>