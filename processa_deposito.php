<?php
    $deposito = $_POST["deposit"];
    $codin = $_POST["cod"];
    $cpf = $_POST["cpf"];

    $sql_cadastra = "INSERT INTO deposito (valor_dep) VALUES ('$deposito')";
    $resultado_cadastro = mysqli_query($conectar, $sql_cadastra);

    $sql_cadastra = "INSERT INTO deposito (otario_cod_otario) VALUES ('$codin')";
    $resultado_cadastro1 = mysqli_query($conectar, $sql_cadastra);


    $sql_cadastra = "INSERT INTO otario (cpf_otario) VALUES ('$cpf')";
    $resultado_cadastro2 = mysqli_query($conectar, $sql_cadastra);

    $sql_cadastra = "INSERT INTO otario (carteira_otario) VALUES ('$deposito')";
    $resultado_cadastro3 = mysqli_query($conectar, $sql_cadastra);

    if ($resultado_cadastro && $resultado_cadastro1 && $resultado_cadastro2 && $resultado_cadastro3 = true) {
        echo "<script>
            alert('$deposito adicionado a sua carteira')
            </script>";

        echo "<script>
            location.href = ('index.php')
            </script>";

    }
    else{
        echo "<script>
            alert('ocorreu um erro no servidor. Tente novamente')
            </script>";

        echo "<script>
            location.href = ('deposito.php')
            </script>";
    }
                    
