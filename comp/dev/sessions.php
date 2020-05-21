<?php
require_once 'redirection.php';
session_start();

function start_session(string $userId): void{
    $_SESSION["userId"] = $userId;
}

function is_session_active(): bool{
    if(isset( $_SESSION["userId"] )){
        return true;
    }else{return false;}
        
}

function close_session( ): void{
    if(isset( $_SESSION["userId"] )){
        unset($_SESSION["userId"]);
    }

    redirect("/");

}


?>