<?php 
    session_start();
    function validaCampos(string $nome, string $idade): bool
    {       
        //validação
        if(empty($vNome) || empty($vIdade)){
            $_SESSION['erro'] = '<br>Todos os campos devem ser preenchidos';		            
            return false;
        }else if(strlen($vNome) < 3 || strlen($vNome) > 32){
            $_SESSION['erro'] = '<br>O nome deve conter mais de 3 caracteres';          
            return false;			
        }else if($vIdade < 6){
            $_SESSION['erro'] = '<br>A idade minima é 6';	            
            return false;		
        }else if(!is_numeric($vIdade)){
            $_SESSION['erro'] = '<br>A idade tem que ser um valor inteiro';		           	
            return false;	
        }else{
            return true;
        }
    }
    
?>