<?php
	try {
		$conexao = new PDO('mysql:host=localhost; dbname=siscad2023', 'root', '');
	} catch (Exception $e) {
		echo $e->getMessage();
		echo "<br>";
		echo $e->getCode();
	}
?>
  