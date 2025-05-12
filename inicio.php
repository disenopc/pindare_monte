<header></header>
<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>
<h1>Bienvenido, <?= htmlspecialchars($_SESSION["usuario"]) ?>!</h1>
<a href="logout.php">Cerrar sesión</a>


// logout.php
<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>