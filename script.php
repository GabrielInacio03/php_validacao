<?php 
	session_start();	

	include 'servicos/categoria.php';
	include 'servicos/mensagens.php';
	include 'servicos/validacao.php';

	//Recebendo informações
	$vNome = $_POST['nome'];
	$vIdade = $_POST['idade'];	
	echo "<a href='index.php'>Voltar</a> <br>";	
	
	definirCategoria($vNome, $vIdade);			
?>