<?php 
    


    function setSucesso(string $msg): void{
        $_SESSION['sucessos'] = $msg;
    }

    //resgatando mensagem
    function obtSucessos(): ?string{
        if(isset($_SESSION['sucessos'])){
            return $_SESSION['sucessos'];
        }else{
            return null;
        }
    }

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

    function removerErros(){
        if(isset($_SESSION['erros'])){
            unset($_SESSION['erros']);
            return;
        }
    }
    function removerSucessos(){
        if(isset($_SESSION['sucessos'])){
            //eliminar o que tiver setado
            return;
        }
    }
?>