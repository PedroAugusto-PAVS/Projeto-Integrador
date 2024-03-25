<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Categoria de Leitores</title>
</head>
<body>
<a href="home.php">HOME</a>
    <h1>Alterar Categoria de Leitores</h1>
    <form action="" method="post">
        <label>Nome Atual da Categoria:</label>
        <input type="text" name="nome_atual"><br>
        
        <label>Novo Nome da Categoria:</label>
        <input type="text"  name="novo_nome" ><br>
        
        <label>Novo Máximo de Dias de Empréstimo:</label>
        <input type="number"  name="novo_numDias" ><br>
        
    <button type="submit" value="alterar" name="alt">Salvar</button>
    </form>
</body>
</html>
<?php
	require 'conexao.php'; // requere a conexao com o Banco
	if (isset($_POST['alt'])) { // verifica se a variavel do botao existe
		$nome_atual = $_POST['nome_atual']; // variavel recebe os valores digitados nos inputs
		$novo_nome = $_POST['novo_nome'];
        $novo_numDias = $_POST['novo_numDias'];
		$alt = $conexao->prepare("UPDATE categoriasLeitores SET nomecat = '$novo_nome', numDias='$novo_numDias' WHERE nomecat='$nome_atual'"); // prepara o codigo sql para ser executado no banco
		$alt->execute(); // executa o codigo sql do comando acima
		echo "<h2>Alteração feita com sucesso!!!</h2>"; // mensagem indicativa de execução
	}
?>