<?php
	try {
		$conexao = new PDO('mysql:host=localhost; dbname=biblioteca', 'root', '');
	} catch (Exception $e) {
		echo $e->getMessage();
		echo "<br>";
		echo $e->getCode();
	}
?>
  