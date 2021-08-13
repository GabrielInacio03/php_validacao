<?php 
	session_start();
	include 'servicos/categoria.php';
	include 'servicos/mensagens.php';
	include 'servicos/validacao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>

	<style>

		label{
			display: none;
		}
		input {
			display: block;
			margin: 5px 0;
		}

	</style>
</head>
<body>	
	<h1>PHP</h1>
	<p>formulário para inscrição de competidores</p>

	<form action="script.php" method="POST">
		<?php 
			$erro = obtErros();

			if(!empty($erro)){
				echo $erro;							
			}			
		?>
		<label for="nome">Nome:</label>
		<input type="text" name="nome" placeholder="seu nome">		
		<label for="idade">Idade</label>
		<input type="text" name="idade" placeholder="sua idade">


		<input type="submit" name="confirmar" value="Enviar">

	</form>
</body>
</html>