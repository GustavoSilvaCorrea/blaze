<?php
session_start();
session_destroy(); // Destroi a sessão
setcookie("usuario_logado", "", time() - 3600, "/"); // Remove o cookie
header("Location: login.php"); // Redireciona para a página de login
exit();
