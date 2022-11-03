<?php 
//Tela de Verificação de url
session_start();

if(!$_SESSION["nome"] && $_SESSION["nome_funcao"]){
    header ("Location: P_login.php");
    exit();
}


?>