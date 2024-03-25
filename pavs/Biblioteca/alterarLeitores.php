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
			<legend>Alterar Cadastro de Leitores</legend>
            <p>
                Nome Atual: <br>
                <input type="text" name="nome_atual" required>
            </p>
			<p>
				Novo Nome: <br>
				<input type="text" name="novo_nome">
			</p>
			
			<p>
				Novo Endereço: <br>
				<input type="text" name="novo_endereco">
			</p>

			<p>
				Nova Cidade: <br>
				<input type="text" name="nova_cidade">
			</p>

			<p>
				Novo Estado: <br>
				<input type="text" name="novo_estado">
			</p>

			<p>
				Novo Telefone: <br>
				<input type="tel" name="novo_telefone">
			</p>

			<p>
				Novo Email: <br>
				<input type="email" name="novo_email">
			</p>

			<p>
				Novo Documento de Identificação: <br>
				<input type="text" name="novo_documento_identificacao">
			</p>

			<p>
				Nova Data de Nascimento: <br>
				<input type="date" name="nova_data_nascimento">
			</p>

			<p>
                <button type="submit" value="alterar" name="alt">Salvar</button>
			</p>
		</fieldset>
	</form>
</body>
</html>

<?php
	require 'conexao.php'; // requere a conexao com o Banco
	if (isset($_POST['alt'])) { // verifica se a variavel do botao existe
		$nome = $_POST['nome_atual']; // variavel recebe os valores digitados nos inputs
        $novo_nome = $_POST['novo_nome'];
		$endereco = $_POST['novo_endereco'];
		$cidade = $_POST['nova_cidade'];
		$estado = $_POST['novo_estado'];
		$telefone = $_POST['novo_telefone'];
		$email = $_POST['novo_email'];
		$di = $_POST['novo_documento_identificacao'];
		$dn = $_POST['nova_data_nascimento'];
		$alt = $conexao->prepare("UPDATE leitores SET nome='$nome', endereco='$endereco', cidade='$cidade', estado='$estado', telefone='$telefone', email='$email', documento_identificacao='$di', data_nascimento='$dn' WHERE nome='$nome'"); // prepara o codigo sql para ser executado no banco
		$alt->execute(); // executa o codigo sql do comando acima
		echo "<h2>Leitor Alterado com sucesso!!!</h2>"; // mensagem indicativa de execução
	}
?>