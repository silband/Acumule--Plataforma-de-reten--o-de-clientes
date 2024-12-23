<?php
include("app/config.php");

session_destroy(); // Destrói a sessão limpando todos os valores salvos
header("Location: ". URL . "/login.php");
exit; // Redireciona o visitante
?>