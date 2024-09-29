<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Impact&display=swap');

        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #2b5876, #4e4376);
            font-family: 'Impact', sans-serif; /* Fonte Impact */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            width: 600px; /* Container maior */
            padding: 30px; /* Aumentando o padding */
            background: linear-gradient(to bottom right, #333, #111); /* Gradiente preto */
            border-radius: 15px; /* Bordas levemente mais arredondadas */
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.5); /* Sombra vermelha */
        }

        .login-container h1 {
            text-align: center;
            color: #ff0000; /* Título vermelho */
            font-size: 36px; /* Aumentar tamanho do título */
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container label {
            color: #fff; /* Texto branco */
            margin-bottom: 5px;
            font-size: 18px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #555;
            border-radius: 8px;
            background-color: #222; /* Campo de texto escuro */
            color: #fff; /* Texto dos campos em branco */
            font-size: 18px; /* Aumentar tamanho do texto */
        }

        .login-container input[type="submit"] {
            padding: 15px;
            border: none;
            background-color: #007bff; /* Botão azul */
            color: white;
            font-size: 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-container input[type="submit"]:hover {
            background-color: #0056b3; /* Azul mais escuro ao passar o mouse */
        }

        .login-container .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 15px;
        }

        .login-container .register-link a {
            color: #ff0000; /* Link de registro vermelho */
            text-decoration: none;
            font-weight: bold;
            font-size: 15px;
        }

        .login-container .register-link a:hover {
            color: #ff4500; /* Muda para azul ao passar o mouse */
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login do Cassino</h1>
        <form method="post" action="processa_login.php">
            <label for="username">Nome de Usuário:</label>
            <input type="text" id="username" name="username" placeholder="Digite seu nome de usuário">

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" placeholder="Digite sua senha">

            <input type="submit" value="Entrar">
        </form>
        <div class="register-link">
            <p>Não tem uma conta?<a href="cadastro.php" style="margin-left: 5px;">Cadastre-se</a></p>
        </div>
    </div>
</body>
</html>
