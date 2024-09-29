<?php
$conectar = mysqli_connect("localhost", "root", "", "blaze");

// Recuperando os valores enviados via POST
$deposito = $_POST["deposit"];
$codin = $_POST["cod"];
echo $codin;
$cpf = $_POST["cpf"];

// Primeiro, verifica se o usuário já existe na tabela `otario` com o `codin` especificado
$sql_busca = "SELECT cod_otario FROM otario WHERE cod_otario = '$codin'";
$resultado_busca = mysqli_query($conectar, $sql_busca);

// Se o usuário for encontrado, atualiza as informações
if (mysqli_num_rows($resultado_busca) > 0) {
    // Atualiza a carteira e o CPF do usuário com base no ID fornecido
    $sql_atualiza = "UPDATE otario SET carteira_otario = carteira_otario + '$deposito', cpf_otario = '$cpf' WHERE cod_otario = '$codin'";
    $resultado_atualiza = mysqli_query($conectar, $sql_atualiza);

    // Se a atualização for bem-sucedida, adiciona o depósito na tabela `deposito`
    if ($resultado_atualiza) {
        $sql_cadastra_deposito = "INSERT INTO deposito (valor_dep, otario_cod_otario) VALUES ('$deposito', '$codin')";
        $resultado_deposito = mysqli_query($conectar, $sql_cadastra_deposito);

        if ($resultado_deposito) {
            echo "<script>
                    alert('$deposito adicionado a sua carteira');
                    location.href = 'index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Erro ao adicionar depósito');
                    location.href = 'deposito.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Erro ao atualizar informações do usuário.');
                location.href = 'deposito.php';
              </script>";
    }
} else {
    // Caso o `codin` não seja encontrado, exibe uma mensagem de erro
    echo "<script>
            alert('Usuário não encontrado.');
            
          </script>";
}
?>
