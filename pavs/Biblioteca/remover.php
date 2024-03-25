<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Categoria de Leitores</title>
</head>
<body>
    <a href="home.php">HOME</a>
    <h1>Tela de Exclusão</h1>
    <div style="text-align: center;" >
        <form action=""  method="post">
            <fieldset>
                <legend>Excluir Categoria de Leitores</legend>
                <label>Nome da Categoria:</label>
                <input type="text"  name="excluirCat" ><br>
                <button type="submit" value="remover" name="rem">Remover</button>
            </fieldset>
        </form>
    </div>
</body>
</html>
<?php
	require 'conexao.php'; // requere a conexao com o Banco
	if (isset($_POST['rem'])) { // verifica se a variavel do botao existe
		$excluir = $_POST['excluirCat']; // variavel recebe os valores digitados nos inputs
		$rem = $conexao->prepare("DELETE FROM categoriasleitores WHERE nomecat = '$excluir'"); // prepara o codigo sql para ser executado no banco
		$rem->execute(); // executa o codigo sql do comando acima
		echo "<h2>Exclusão feita com sucesso!!!</h2>"; // mensagem indicativa de execução
	}
?>