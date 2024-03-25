<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="home.php">HOME</a>
	<h1>Categoria de Leitores</h1>
	<form action="" method="POST">
		<fieldset>
			<legend>Cadastro de Categoria de Leitores</legend>
			<p>
				Nome da Categoria: <br>
				<input type="text" name="nomecat" required>
			</p>
			<p>
				Número Max de dias : <br>
				<input type="number" name="numDias" required>
			</p>
			<p>
				<input type="submit" value="Cadastrar" name="cad">
				<button >
					<a href="alterar.php">Alterar</a>
				</button>
				<button>
					<a href="remover.php">Remover</a>
				</button>
			</p>
		</fieldset>
	</form>
</body>
</html>

<?php
	require 'conexao.php'; // requere a conexao com o Banco
	if (isset($_POST['cad'])) { // verifica se a variavel do botao existe
		$nomecat = $_POST['nomecat']; // variavel recebe os valores digitados nos inputs
		$numDias = $_POST['numDias'];
		$cad = $conexao->prepare("insert into categoriasleitores(nomecat, numDias) values('$nomecat', '$numDias')"); // prepara o codigo sql para ser executado no banco
		$cad->execute(); // executa o codigo sql do comando acima
		echo "<h2>Cadastrado com sucesso!!!</h2>"; // mensagem indicativa de execução
	}
?>