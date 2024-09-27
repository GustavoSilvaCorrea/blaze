<?php 
include("connect.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST["username"];
    $senha = $_POST["password"];

    $sql_consulta = "SELECT cod_otario, nome_otario, senha_otario FROM otario WHERE nome_otario = '$nome' AND senha_otario = '$senha'";
    $resultado_consulta = mysqli_query($conectar, $sql_consulta);
    $linhas = mysqli_num_rows($resultado_consulta);

    if ($linhas == 1) {
        $registro = mysqli_fetch_row($resultado_consulta);
        
        // Armazenar os dados do usuário na sessão
        $_SESSION['cod_otario'] = $registro[0];
        $_SESSION['nome_otario'] = $registro[1];

        // Definindo um cookie para lembrar o login por 1 dia
        setcookie("usuario_logado", $registro[1], time() + (86400 * 1), "/"); // 86400 = 1 dia

        header("Location: index.php"); // Redireciona para a página inicial
        exit();
    } else {
        echo "<script>
                alert('Login ou Senha Incorretos! Digite Novamente!!');
              </script>";
        echo "<script>
                location.href = ('login.php');
              </script>";
    }
}
?>
