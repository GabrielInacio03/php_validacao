<?php  

    
    function definirCategoria($vNome, $vIdade){
        $categoria = [];
        $categoria [] = "Infântil";
        $categoria [] = "Adolescente";
        $categoria [] = "Adulto";	


        //chamando validação
        if(validaCampos($vNome,$vIdade)){
            //condições
            if($vIdade >= 6 && $vIdade <= 12){
                for ($i=0; $i < count($categoria); $i++) { 
                    if($categoria[$i] == "Infantil"){
                        echo "Atleta: ".$vNome."<br>";
                        echo "Idade: ".$vIdade."<br>";
                        echo "Categoria: ".$categoria[$i]."<br>";
                        return null;
                    }
                }
            } else if($vIdade >12 && $vIdade <= 18){
                for ($i=0; $i < count($categoria); $i++) { 
                    if($categoria[$i] == "Adolescente"){
                        echo "Atleta: ".$vNome."<br>";
                        echo "Idade: ".$vIdade."<br>";
                        echo "Categoria: ".$categoria[$i]."<br>";
                        return null;
                    }
                }
            } else {
                for ($i=0; $i < count($categoria); $i++) { 
                    if($categoria[$i] == "Adulto"){
                        echo "Atleta: ".$vNome."<br>";
                        echo "Idade: ".$vIdade."<br>";
                        echo "Categoria: ".$categoria[$i]."<br>";
                        return null;
                    }
                }
            }		
        } else {
            return obtErros();                   
        }      
    }
?>