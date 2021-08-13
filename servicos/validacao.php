<?php 
   
    
    function validaCampos(string $vNome, string $vIdade): bool
    {       
        //validação
        if(empty($vNome) || empty($vIdade)){           
            setErros("<br>Todos os campos devem ser preenchidos");
            header('Location: index.php');
            return false;
        }else if(strlen($vNome) < 3 || strlen($vNome) > 32){           
            setErros("<br>O nome deve conter mais de 3 caracteres");
            header('Location: index.php');
            return false;			
        }else if($vIdade < 6){                     
            setErros("<br>A idade minima é 6");
            header('Location: index.php');
            return false;		
        }else if(!is_numeric($vIdade)){                	
            setErros("<br>A idade tem que ser um valor inteiro");
            header('Location: index.php');
            return false;	
        }else{
            return true;
        }
    }
    
?>