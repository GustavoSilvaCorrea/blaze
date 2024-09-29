<?php 
$conectar = mysqli_connect("localhost", "root", "", "blaze");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST["username"];
    $senha = $_POST["password"];

    // Consulta para verificar o usuário no banco de dados
    $sql_consulta = "SELECT cod_otario, nome_otario FROM otario WHERE nome_otario = '$nome' AND senha_otario = '$senha'";
    $resultado_consulta = mysqli_query($conectar, $sql_consulta);
    $linhas = mysqli_num_rows($resultado_consulta);

    if ($linhas == 1) {
        // Captura o resultado da consulta e define as variáveis corretamente
        $registro = mysqli_fetch_assoc($resultado_consulta);

        // Corrigir as variáveis para que nome e código sejam definidos corretamente
        $_SESSION['cod_otario'] = $registro['cod_otario']; // Código correto
        $_SESSION['nome_otario'] = $registro['nome_otario']; // Nome correto

        // Definir o cookie com os dados corretos
        setcookie("usuario_logado", $registro['cod_otario'] . "|" . $registro['nome_otario'], time() + (86400 * 1), "/");

        // Redirecionar para a página inicial
        header("Location: index.php");
        exit();
    } else {
        echo "<script>
                alert('Login ou Senha Incorretos! Digite Novamente!');
              </script>";
        echo "<script>
                location.href = ('login.php');
              </script>";
    }
}
?>
