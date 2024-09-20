<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Casa de Apostas Online</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        .container h1 {
            margin: 10px 0px 15px;
        }

        header {
            background-color: #222;
            color: #fff;
            padding: 1rem 0;
        }

        header h1 {
            display: inline-block;
            margin: 0;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: space-around;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .banner {
            background-image: url('banner.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 4rem 0;
            text-align: center;
        }

        .banner h2 {
            font-size: 2.5rem;
        }

        .banner .btn {
            background-color: #ff6600;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }

        .apostas,
        .casino,
        .promocoes {
            padding: 2rem 0;
        }

        h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2rem;
            color: #333;
        }

        .esportes,
        .jogos,
        .promocoes {
            display: flex;
            justify-content: space-around;
        }

        .esporte,
        .jogo,
        .promocao {
            background-color: #fff;
            padding: 1rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 30%;
        }

        .esporte h3,
        .jogo h3,
        .promocao h3 {
            margin-bottom: 10px;
        }

        .btn {
            background-color: #ff6600;
            padding: 10px;
            color: white;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        footer ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        footer ul li {
            margin: 0 15px;
        }

        footer ul li a {
            color: #fff;
            text-decoration: none;
        }



        .roleta {
            width: 400px;
            height: 400px;
            border: 10px solid black;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
        }

        .gomo {
            width: 100%;
            height: 100%;
            position: absolute;
            clip-path: polygon(50% 50%, 100% 0%, 100% 16%);
            transform-origin: center;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Ajuste para posicionar o número no topo */
        }

        .numero {
            color: white;
            font-weight: bold;
            font-size: 14px;
            transform: rotate(0deg); /* Mantém o texto legível */
            position: absolute;
        }

        #nah {
            width: 40px;
            height: 40px;
            background-color: black;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <div class="container">
            <h1>Casa de Apostas</h1>
            <nav>
                <ul>
                    <li><a href="#apostas">Apostas</a></li>
                    <li><a href="#casino">Cassino</a></li>
                    <li><a href="#promocoes">Promoções</a></li>
                    <li><a href="#login">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Banner principal -->
    <section class="banner">
        <div class="container">
            <h2>Bem-vindo à Melhor Casa de Apostas!</h2>
            <section class="roleta">
                <?php
                // Definindo as cores dos gomos
                $cores = ["red", "black"];

                // Número total de gomos
                $totalGomos = 36;

                // Ângulo entre cada gomo
                $angulo = 360 / $totalGomos;

                // Gerar os gomos
                for ($i = 0; $i < $totalGomos; $i++) {
                    // Definir o número do gomo (inicia em 1)
                    $numero = $i + 1;

                    // Calcular o ângulo de rotação para cada gomo
                    $rotate = $angulo * $i;
                    $cor = ($rotate == 220) ? "green" : $cores[$i % 2];


                    // Gerar o gomo com estilo dinâmico
                    echo "<div class='gomo' style='background-color: $cor; transform: rotate({$rotate}deg);'>
    <span class='numero'>$numero</span>
</div>";
                }
                ?>

                <div id="nah">
                    <p style="margin-top: 4px; font-size: 25px;">◈</p>
                </div>

            </section>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Casa de Apostas. Todos os direitos reservados.</p>
            <ul>
                <li><a href="#">Termos de Serviço</a></li>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>