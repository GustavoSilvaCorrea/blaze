<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cassino Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Impact&display=swap');

        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #2b5876, #4e4376);
            font-family: 'Impact', sans-serif;
            /* Fonte Impact */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            width: 600px;
            /* Container maior */
            padding: 30px;
            /* Aumentando o padding */
            background: linear-gradient(to bottom right, #333, #111);
            /* Gradiente preto */
            border-radius: 15px;
            /* Bordas levemente mais arredondadas */
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
            /* Sombra vermelha */
        }

        .login-container h1 {
            text-align: center;
            color: #ff0000;
            /* Título vermelho */
            font-size: 36px;
            /* Aumentar tamanho do título */
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container label {
            color: #fff;
            /* Texto branco */
            margin-bottom: 5px;
            font-size: 18px;
        }

        .login-container input[type="text"] {
            padding: 15px;
            margin-bottom: 25px;
            border: 1px solid #555;
            border-radius: 8px;
            background-color: #222;
            /* Campo de texto escuro */
            color: #fff;
            /* Texto dos campos em branco */
            font-size: 18px;
            /* Aumentar tamanho do texto */
        }

        .login-container input[type="submit"] {
            padding: 15px;
            margin-top: 5px;
            border: none;
            background-color: #007bff;
            /* Botão azul */
            color: white;
            font-size: 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
            /* Azul mais escuro ao passar o mouse */
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Depositar</h1>
        <form method="post" action="processa_deposito.php">
            <?php
            include_once("valida_login.php");
            $cod_otario = $_SESSION["nome_otario"];
            $sql_consulta = "SELECT cod_otario FROM otario WHERE cod_otario = '$cod_otario'";
            $resultado_consulta = mysqli_query($conectar, $sql_consulta);
            $linhas = mysqli_num_rows($resultado_consulta);
            $codin = mysqli_fetch_row($resultado_consulta);
            ?>
            <input type="hidden" name="cod" value="<?php echo $codin; ?>">
            <label for="deposit">Valor do deposito:</label>
            <input type="text" id="deposit" name="deposit" placeholder="Digite o valor do deposito">

            <label for="cpf">Digite seu CPF:</label>
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">

            <input type="submit" value="Depositar">
        </form>
    </div>
</body>

</html>