<?php 
    $conectar = mysqli_connect("localhost", "root", "", "blaze");
    $nome = $_POST["username"];
	$senha = $_POST["password"];

    $sql_consulta = "SELECT nome_otario FROM otario WHERE nome_otario = '$nome'";

    $resultado_consulta = mysqli_query($conectar, $sql_consulta);
	$linhas = mysqli_num_rows ($resultado_consulta);

	if ($linhas == 1) {
		echo "<script>
			alert('Esse usuário já existe, tente novamente')
			</script>";
		echo "<script>
			location.href = ('cadastro.php')
			</script>";
	} else {
        $sql_cadastrar = "INSERT INTO otario(nome_otario, senha_otario) VALUES ('$nome','$senha')";

        $resultado_cadastrar = mysqli_query($conectar, $sql_cadastrar);

		if ($resultado_cadastrar == true) {
			echo "<script>
				alert('$nome cadastrado com sucesso')
				</script>";

			echo "<script>
				location.href = ('login.php')
				</script>";

		}
		else{
			echo "<script>
				alert('ocorreu um erro no servidor. Tente novamente')
				</script>";

			echo "<script>
				location.href = ('cadastro.php')
				</script>";
		}
						
	}
