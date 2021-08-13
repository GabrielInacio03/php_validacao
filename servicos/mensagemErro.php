<?php 
    session_start();


    function setErros(string $msg): void{
        $_SESSION['erros'] = $msg;
    }

    //resgatando mensagem
    function obtErros(): ?string{
        if(isset($_SESSION['erros'])){
            return $_SESSION['erros'];
        }else{
            return null;
        }
    }
?>