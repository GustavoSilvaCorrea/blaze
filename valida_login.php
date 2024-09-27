<?php
// Se o cookie estiver definido, restaura a sessão
if (isset($_COOKIE["usuario_logado"])) {
    $_SESSION["nome_otario"] = $_COOKIE["usuario_logado"];
}
if (isset($_SESSION["nome_otario"])) {
    echo "<p>Olá, " . $_SESSION["nome_otario"] . "! Você está logado.</p>";
    // Aqui você pode adicionar um botão para logout, por exemplo.
    echo "<a href='logout.php'>Sair</a>";
} else {
    echo "<p>Você não está logado.</p>";
}

