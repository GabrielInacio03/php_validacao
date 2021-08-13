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