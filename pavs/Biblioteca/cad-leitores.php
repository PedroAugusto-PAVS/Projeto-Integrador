<!--nome, endereço, cidade, estado, telefone, Email, Documento de
Identificação, Categoria de Leitor e Data de Nascimento.-->
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
			<legend>Cadastro de Leitores</legend>
			<p>
				Nome: <br>
				<input type="text" name="nome" required>
			</p>
			
			<p>
				Endereço: <br>
				<input type="text" name="endereco" required>
			</p>

			<p>
				Cidade: <br>
				<input type="text" name="cidade" required>
			</p>

			<p>
				Estado: <br>
				<input type="text" name="estado" required>
			</p>

			<p>
				Telefone: <br>
				<input type="tel" name="telefone" required>
			</p>

			<p>
				Email: <br>
				<input type="email" name="email" required>
			</p>

			<p>
				Documento de Identificação: <br>
				<input type="text" name="documento_identificacao" required>
			</p>

			<p>
				Categoria de Leitor: <br>
				<input type="text" name="categoria_id" required>
			</p>

			<p>
				Data de Nascimento: <br>
				<input type="date" name="data_nascimento" required>
			</p>

			<p>
				<input type="submit" value="Cadastrar" name="cad">
				<button >
					<a href="alterarLeitores.php">Alterar</a>
				</button>
				<button>
					<a href="removerLeitores.php">Remover</a>
				</button>
			</p>
		</fieldset>
	</form>
</body>
</html>

<?php
	require 'conexao.php'; // requere a conexao com o Banco
	if (isset($_POST['cad'])) { // verifica se a variavel do botao existe
		$nome = $_POST['nome']; // variavel recebe os valores digitados nos inputs
		$endereco = $_POST['endereco'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$di = $_POST['documento_identificacao'];
		$cl = $_POST['categoria_id'];
		$dn = $_POST['data_nascimento'];
		$cad = $conexao->prepare("insert into leitores(nome, endereco, cidade, estado, telefone, email, documento_identificacao, categoria_id, data_nascimento) values('$nome', '$endereco', '$cidade', '$estado', '$telefone', '$email', '$di', '$cl', '$dn')"); // prepara o codigo sql para ser executado no banco
		$cad->execute(); // executa o codigo sql do comando acima
		echo "<h2>Leitor Cadastrado com sucesso!!!</h2>"; // mensagem indicativa de execução
	}
?>