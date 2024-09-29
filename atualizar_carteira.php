<?php
session_start(); // Certifique-se de iniciar a sessão se for usar $_SESSION
$cod_otario = $_SESSION["cod_otario"];
$novo_saldo = $_POST['novo_saldo']; // Recebe o novo saldo enviado via POST

$conectar = mysqli_connect("localhost", "root", "", "blaze");

if (!$conectar) {
    die("Erro de conexão: " . mysqli_connect_error());
}

// Atualiza o saldo no banco de dados
$sql_update = "UPDATE otario SET carteira_otario = '$novo_saldo' WHERE cod_otario = '$cod_otario'";
if (mysqli_query($conectar, $sql_update)) {
    echo "Carteira atualizada com sucesso!";
} else {
    echo "Erro ao atualizar carteira: " . mysqli_error($conectar);
}

mysqli_close($conectar);
?>
