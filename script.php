<?php 
	session_start();	
	//Recebendo informações
	$vNome = $_POST['nome'];
	$vIdade = $_POST['idade'];
	$confirmar = $_POST['confirmar'];

	echo "<a href='index.php'>Voltar</a> <br>";	
	
	definirCategoria($vIdade,$vNome);
	
?>