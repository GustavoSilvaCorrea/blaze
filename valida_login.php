<?php

// Verifica se o cookie está definido
if (isset($_COOKIE["usuario_logado"])) {
    $dados_usuario = explode("|", $_COOKIE["usuario_logado"]);

    // Garante que o cookie está no formato correto antes de usa
    if (count($dados_usuario) == 2) {
        $cod_otario = $dados_usuario[0];
        $nome_otario = $dados_usuario[1];

        // Armazena as informações corretas na sessão
        $_SESSION["cod_otario"] = $cod_otario;
        $_SESSION["nome_otario"] = $nome_otario;
    }
}
?>
