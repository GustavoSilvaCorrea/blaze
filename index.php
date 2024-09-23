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
            display: flex;
            justify-content: center;
            width: 700px;
            background-color: green;
        }

        tbody td {
            width: 250px;
            padding: 5px;

        }

        td button {
            color: white;
            padding: 5px;
            background-color: black;
            border-radius: 50%;
            font-size: 15px;

        }

        #resultado {
            color: #222;
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
    <main class="banner">
    <div id="resultado"></div>
        <?php ?>
        <table border="5" class="roleta">
            <tbody>
                <td rowspan="4"><button onclick="mostrarTexto(this)">0</button></td>
                <tr>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">3</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">6</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">9</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">12</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button onclick="mostrarTexto(this)">2</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">5</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">8</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">11</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">1</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">4</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">7</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">10</button>
                    </td>

                </tr>
                <div class="nah">
                    <tr>
                        <td colspan="5"><button onclick="mostrarTexto(this)" style="border-radius: 25%;">1st 12</button></td>
                    </tr>
                    <td colspan="3"><button onclick="mostrarTexto(this)" style="border-radius: 25%;">1-18</button></td>
                    <td colspan="3"><button onclick="mostrarTexto(this)" style="border-radius: 25%;">Even</button></td>
                </div>
            </tbody>
            <tbody>
                <tr>
                    <td>
                        <button onclick="mostrarTexto(this)">15</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">18</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">21</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">24</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">14</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">17</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">20</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">23</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button onclick="mostrarTexto(this)">13</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">16</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">19</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">22</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><button onclick="mostrarTexto(this)" style="border-radius: 25%;">2nd 12</button></td>
                </tr>
                <td colspan="2">
                    <p><button onclick="mostrarTexto(this)" style="border-radius: 25%; background-color: red; width: 80px;">Red</button></p>
                </td>
                <td colspan="2">
                    <p><button onclick="mostrarTexto(this)" style="border-radius: 25%; width: 80px;">Black</button></p>
                </td>
            </tbody>
            <tbody>
                <tr>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">27</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">30</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">33</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">36</button>
                    </td>
                    <td rowspan="3"><button onclick="mostrarTexto(this)" style="margin-left: 3px;">0</button></td>
                </tr>
                <tr>
                    <td>
                        <button onclick="mostrarTexto(this)">26</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">29</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">32</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">35</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">25</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">28</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)">31</button>
                    </td>
                    <td>
                        <button onclick="mostrarTexto(this)" style="background-color: red;">34</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"><button onclick="mostrarTexto(this)" style="border-radius: 25%;">3rd 12</button></td>
                </tr>
                <td colspan="3"><button onclick="mostrarTexto(this)" style="border-radius: 25%;">Odd</button></td>
                <td colspan="3"><button onclick="mostrarTexto(this)" style="border-radius: 25%;">19-36</button></td>
            </tbody>
        </table>


    </main>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Casa de Apostas. Todos os direitos reservados.</p>
            <ul>
                <li><a href="#">Termos de Serviço</a></li>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Contato</a></li>
                <script>
                    function mostrarTexto(botao) {
                        var texto = botao.innerText;
                        document.getElementById("resultado").innerText = "Você clicou no número: " + texto;
                    }
                </script>
            </ul>
        </div>
    </footer>

</body>

</html>