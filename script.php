<?php 
	session_start();

	$categoria = [];
	$categoria [] = "Infântil";
	$categoria [] = "Adolescente";
	$categoria [] = "Adulto";	

	//Recebendo informações
	$vNome = $_POST['nome'];
	$vIdade = $_POST['idade'];
	$confirmar = $_POST['confirmar'];

	echo "<a href='index.php'>Voltar</a> <br>";	
	
	//validação
	if(empty($vNome) || empty($vIdade)){
		$_SESSION['erro'] = '<br>Todos os campos devem ser preenchidos';		
		header('Location:index.php');
		return;
	}else if(strlen($vNome) < 3 || strlen($vNome) > 32){
		$_SESSION['erro'] = '<br>O nome deve conter mais de 3 caracteres';
		header('Location:index.php');	
		return;			
	}else if($vIdade < 6){
		$_SESSION['erro'] = '<br>A idade minima é 6';	
		header('Location:index.php');	
		return;		
	}else if(!is_numeric($vIdade)){
		$_SESSION['erro'] = '<br>A idade tem que ser um valor inteiro';		
		header('Location:index.php');	
		return;	
	}
	//condições
	if($vIdade >= 6 && $vIdade <= 12){
		for ($i=0; $i < count($categoria); $i++) { 
			if($categoria[$i] == "Infantil"){
				echo "Atleta: ".$vNome."<br>";
				echo "Idade: ".$vIdade."<br>";
				echo "Categoria: ".$categoria[$i]."<br>";
			}
		}
	} else if($vIdade >12 && $vIdade <= 18){
		for ($i=0; $i < count($categoria); $i++) { 
			if($categoria[$i] == "Adolescente"){
				echo "Atleta: ".$vNome."<br>";
				echo "Idade: ".$vIdade."<br>";
				echo "Categoria: ".$categoria[$i]."<br>";
			}
		}
	} else {
		for ($i=0; $i < count($categoria); $i++) { 
			if($categoria[$i] == "Adulto"){
				echo "Atleta: ".$vNome."<br>";
				echo "Idade: ".$vIdade."<br>";
				echo "Categoria: ".$categoria[$i]."<br>";
			}
		}
	}		

	
?>