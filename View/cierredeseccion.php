<?php
session_start();
session_destroy(); // Destruye toda la sesión
header("Location: home.php"); // Redirige al formulario principal
exit();
?>
