<?php 

session_start(); 

// Verifica se existe os dados da sessão de login 
if((!isset($_SESSION["login"])) && (!isset($_SESSION["funcao"])))
{ 
    header("Location: index.php"); 
    exit; 
} 
?>