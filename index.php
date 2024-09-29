<?php
session_start(); // Certifique-se de que está aqui, no início do arquivo
?>
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
            background: linear-gradient(135deg, #2b5876, #4e4376);
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        header {
            background-color: #222;
            color: #fff;
            padding: 1.5rem 0;
            margin-bottom: 20px;
        }

        header h1 {
            display: inline-block;
            margin: 0;
            font-size: 2.5rem;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav ul li {
            margin: 0;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #ff6600;
        }

        .banner {
            padding: 2rem;
            text-align: center;
        }

        .banner h2 {
            font-size: 2.5rem;
            color: #fff;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #ff6600;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ff4500;
        }

        h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2rem;
            color: #fff;
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 40px;
        }

        footer ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        footer ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer ul li a:hover {
            color: #ff6600;
        }

        .roleta {
            display: flex;
            width: 1149px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .roleta td {
            padding: 15px;
            text-align: center;
        }

        button {
            color: white;
            background-color: #444;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .roleta button:hover {
            background-color: #ff6600;
        }

        .roleta button[style*="background-color: red;"] {
            background-color: black;
        }

        #resultado {
            margin: 0 auto;
            padding: 5px;
            border: 5px solid #808080;
            max-width: 170px;
            color: #fff;
            background-color: #222;
            font-size: 20px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        section {
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
        }

        section input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 15px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        section input[type="number"]:focus {
            outline: none;
            border-color: #ff6600;
        }

        section button {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            background-color: #ff6600;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        section a {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-decoration: none;
            background-color: #ff6600;
            color: #fff;
            border: none;
            padding: 18px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        section button:hover {
            background-color: #ff4500;
        }

        .flex-container {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        @media (max-width: 768px) {
            .flex-container {
                flex-direction: column;
                align-items: center;
            }

            .roleta,
            section {
                width: 100%;
            }
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
                    <li><a href="login.php" target="_parent">Login</a></li>
                    <?php
                    include_once("valida_login.php");
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Banner principal -->
    <main class="banner">

        <div class="flex-container">
            <div>
                <div id="resultado">
                    <p>Sua aposta:</p>
                </div>
                <!-- Seção valor da aposta -->
                <section id="valor">
                    <h2>Valor da Aposta</h2>
                    <input type="number" placeholder="Digite o valor da aposta" min="1" id="numberInput">
                    <p id="output"></p>
                    <p id="output2"></p>
                    <p id="output3"></p>
                    <button onclick="getNumberValue()">Apostar</button>
                </section>
                <section id="valor">
                    <h2>Depositos</h2>
                    <a href="deposito.php">Depositar</a>
                </section>
            </div>

            <table border="5" class="roleta">
                <tbody>
                    <td rowspan="4"><button onclick="mostrarTexto(this)" style="background-color: limegreen;">0</button></td>
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
                            <td colspan="5"><button onclick="mostrarTexto(this)" style="border-radius: 25%; background-color: limegreen;">1st 12</button></td>
                        </tr>
                        <td colspan="2"><button onclick="mostrarTexto(this)" style="border-radius: 25%;background-color: limegreen;">1-18</button></td>
                        <td colspan="3"><button onclick="mostrarTexto(this)" style="border-radius: 25%; background-color: limegreen;">Even</button></td>
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
                        <td colspan="4"><button onclick="mostrarTexto(this)" style="border-radius: 25%; background-color: limegreen;">2nd 12</button></td>
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
                        <td rowspan="3"><button onclick="mostrarTexto(this)" style="margin-left: 3px; background-color: limegreen;">0</button></td>
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
                        <td colspan="5"><button onclick="mostrarTexto(this)" style="border-radius: 25%; background-color: limegreen;">3rd 12</button></td>
                    </tr>
                    <td colspan="3"><button onclick="mostrarTexto(this)" style="border-radius: 25%; background-color: limegreen;">Odd</button></td>
                    <td colspan="3"><button onclick="mostrarTexto(this)" style="border-radius: 25%; background-color: limegreen;">19-36</button></td>
                </tbody>
            </table>
        </div>
    </main>

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

    <script>
        function mostrarTexto(botao) {
            var apostado = botao.innerText;
            var corFundo = botao.style.backgroundColor; // Pega a cor de fundo do botão
            var resultadoDiv = document.getElementById("resultado");

            resultadoDiv.innerText = "Sua aposta: " + apostado;
            resultadoDiv.style.backgroundColor = corFundo; // Aplica a cor de fundo ao resultado
        }
    </script>
    <script src="ajax.js"></script>
    <script>
        function getNumberValue() {
            // Obtém a aposta do elemento de resultado
            var bet = document.getElementById('resultado').innerText;
            let bets = bet.slice(11, 18);
            var nah = document.getElementById("output");

            // Definição de bet1 e bet2
            let bet1, bet2;
            if (bets.length <= 3) {
                bet1 = parseInt(bets);
                nah.innerText = bet1;
            } else {
                bet2 = bets.trim(); // .trim() para evitar espaços extras
                nah.innerText = bet2;
            }

            // Obtém o valor do número gerado
            const numberInput = document.getElementById('numberInput').value;
            const numberValue = parseFloat(numberInput);

            // Gera um número entre 0-36
            const nr = Math.random() * 1;
            var nr2 = parseInt(nr);
            var nah = document.getElementById("output2");
            nah.innerText = nr2;

            // Variável de controle para verificar se alguma condição foi satisfeita
            let ganhou = false;

            <?php
            $cod_otario = $_SESSION["cod_otario"];
            $conectar = mysqli_connect("localhost", "root", "", "blaze");

            $sql_consulta = "SELECT carteira_otario FROM otario WHERE cod_otario = '$cod_otario'";
            $resultado_consulta = mysqli_query($conectar, $sql_consulta);

            if ($resultado_consulta && mysqli_num_rows($resultado_consulta) > 0) {
                $linhas = mysqli_fetch_assoc($resultado_consulta);
                $valor_carteira = $linhas['carteira_otario']; // Armazena o valor da carteira na variável
            } else {
                $valor_carteira = 0; // Valor padrão caso não haja resultados
            }
            ?>
            // Verifica número exato
            if (nr2 === bet1) {
                // Passa o valor da carteira do PHP para o JS
                var valorCarteira = <?php echo $valor_carteira; ?>;
                // Calcula o lucro
                const lucro = numberValue * 37;

                valorCarteira += lucro;

                // Chama a função para atualizar a carteira no banco de dados
                atualizarCarteira(valorCarteira);
                ganhou = true;
            }

        // Verifica apostas de cores
        if (bet2 && bet2.includes("Red")) {
            const redNumbers = [1, 3, 5, 7, 9, 12, 14, 16, 18, 19, 21, 23, 25, 27, 30, 32, 34, 36];
            if (redNumbers.includes(nr2)) {

                var valorCarteira = <?php echo $valor_carteira; ?>;
                const lucro = numberValue * 2;
                valorCarteira += lucro;

                // Chama a função para atualizar a carteira no banco de dados
                atualizarCarteira(valorCarteira);
                ganhou = true;
            }
        }

        if (bet2 && bet2.includes("Black")) {
            const blackNumbers = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20, 22, 24, 26, 28, 29, 31, 33, 35];
            if (blackNumbers.includes(nr2)) {

                var valorCarteira = <?php echo $valor_carteira; ?>;
                const lucro = numberValue * 2;
                valorCarteira += lucro;

                // Chama a função para atualizar a carteira no banco de dados
                atualizarCarteira(valorCarteira);
                ganhou = true;
            }
        }

        // Verifica se a aposta foi em números pares ou ímpares
        if (bet2 && bet2.includes("Even")) {
            if (nr2 % 2 === 0) {

                var valorCarteira = <?php echo $valor_carteira; ?>;
                const lucro = numberValue * 2;
                valorCarteira += lucro;

                // Chama a função para atualizar a carteira no banco de dados
                atualizarCarteira(valorCarteira);
                ganhou = true;
            }
        }

        if (bet2 && bet2.includes("Odd")) {
            if (nr2 % 2 !== 0) {

                var valorCarteira = <?php echo $valor_carteira; ?>;
                const lucro = numberValue * 2;
                valorCarteira += lucro;

                // Chama a função para atualizar a carteira no banco de dados
                atualizarCarteira(valorCarteira);
                ganhou = true;
            }
        }

        // Verifica se a aposta está nos primeiros, segundos ou terceiros grupos de 12 números
        if (bet2 && bet2.includes("1st 12")) {
            const Numbers1st = [1, 4, 7, 10, 13, 16, 19, 22, 25, 28, 31, 34];
            if (Numbers1st.includes(nr2)) {

                var valorCarteira = <?php echo $valor_carteira; ?>;
                const lucro = numberValue * 3;
                valorCarteira += lucro;

                // Chama a função para atualizar a carteira no banco de dados
                atualizarCarteira(valorCarteira);
                ganhou = true;
            }
        }

        if (bet2 && bet2.includes("2nd 12")) {
            const Numbers2nd = [2, 5, 8, 11, 14, 17, 20, 23, 26, 29, 32, 35];
            if (Numbers2nd.includes(nr2)) {

                var valorCarteira = <?php echo $valor_carteira; ?>;
                const lucro = numberValue * 3;
                valorCarteira += lucro;

                // Chama a função para atualizar a carteira no banco de dados
                atualizarCarteira(valorCarteira);
                ganhou = true;
            }
        }

        if (bet2 && bet2.includes("3rd 12")) {
            const Numbers3rd = [3, 6, 9, 12, 15, 18, 21, 24, 27, 30, 33, 36];
            if (Numbers3rd.includes(nr2)) {

                var valorCarteira = <?php echo $valor_carteira; ?>;
                const lucro = numberValue * 3;
                valorCarteira += lucro;

                // Chama a função para atualizar a carteira no banco de dados
                atualizarCarteira(valorCarteira);
                ganhou = true;
            }
        }

        // Verifica se a aposta foi feita no intervalo de 1-18 ou 19-36
        if (bet2 && bet2.includes("1-18")) {
            if (nr2 >= 1 && nr2 <= 18) {

                var valorCarteira = <?php echo $valor_carteira; ?>;
                const lucro = numberValue * 2;
                valorCarteira += lucro;

                // Chama a função para atualizar a carteira no banco de dados
                atualizarCarteira(valorCarteira);
                ganhou = true;
            }
        }

        if (bet2 && bet2.includes("19-36")) {
            if (nr2 >= 19 && nr2 <= 36) {
                var valorCarteira = <?php echo $valor_carteira; ?>;
                const lucro = numberValue * 2;
                valorCarteira += lucro;

                // Chama a função para atualizar a carteira no banco de dados
                atualizarCarteira(valorCarteira);
                ganhou = true;
            }
        }

        // Se nenhuma das apostas for verdadeira, exibe que perdeu
        if (!ganhou) {
            var valorCarteira = <?php echo $valor_carteira; ?>;
            const perda = numberValue;
            valorCarteira -= perda;

                // Chama a função para atualizar a carteira no banco de dados
                atualizarCarteira(valorCarteira);
        }
        }
    </script>




</body>

</html>