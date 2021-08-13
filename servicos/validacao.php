<?php 
    session_start();
    
    function validaCampos(string $vNome, string $vIdade): bool
    {       
        //validação
        if(empty($vNome) || empty($vIdade)){           
            setErros("<br>Todos os campos devem ser preenchidos");
            return false;
        }else if(strlen($vNome) < 3 || strlen($vNome) > 32){           
            setErros("<br>O nome deve conter mais de 3 caracteres");
            return false;			
        }else if($vIdade < 6){                     
            setErros("<br>A idade minima é 6");
            return false;		
        }else if(!is_numeric($vIdade)){                	
            setErros("<br>A idade tem que ser um valor inteiro");
            return false;	
        }else{
            return true;
        }
    }
    
?>