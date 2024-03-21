<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Categoria de Leitores</h1>
	<form action="" method="POST">
		<fieldset>
			<legend>Cadastro de Categoria de Leitores</legend>
			<p>
				Nome da Categoria: <br>
				<input type="text" name="nomecat">
			</p>
			<p>
				Número de dias: <br>
				<input type="number" name="num">
			</p>
			<p><input type="submit" value="Cadastrar" name="cad"></p>
		</fieldset>
	</form>
</body>
</html>

<?php
	require 'conexao.php'; // requere a conexao com o Banco
	if (isset($_POST['cad'])) { // verifica se a variavel do botao existe
		$nc = $_POST['nomecat']; // variavel recebe os valores digitados nos inputs
		$num = $_POST['num'];
		$cad = $conexao->prepare("insert into catleitores(nome, num) values('$nc', '$num')"); // prepara o codigo sql para ser executado no banco
		$cad->execute(); // executa o codigo sql do comando acima
		echo "<h2>Cadastrado com sucesso!!!</h2>"; // mensagem indicativa de execução
	}
?>