<?php 
require "config.php"; 
session_start(); 
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE; 
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

if(!$login || !$senha) 
{ 
    echo "Você deve digitar sua senha e login!"; 
    exit; 
} 

$SQL = "SELECT * FROM usuario where login='$login'"; 
$query = @mysql_query($SQL) or die("Erro no banco de dados!"); 
$linhas = @mysql_num_rows($query); 

// Caso o usuário tenha digitado um login válido o número de linhas será 1.. 
if($linhas) 
{ 
    // Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão 
    $dados = @mysql_fetch_array($query);

    // Agora verifica a senha 
    if(!strcmp($senha, $dados["senha"])) 
    { 
        // TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário 
        
		$_SESSION["funcao"] = $dados["funcao"];
		$_SESSION["nome"] = $dados["nome"];
		$_SESSION["login"] = $dados["login"]; 
        header("Location: portal_sistema.php"); 
        exit; 
    } 
    // Senha inválida 
    else 
    { 
        echo "Senha inválida!"; 
        exit; 
    } 
} 
// Login inválido 
else 
{ 
    echo "O login fornecido por você é inexistente!"; 
    exit; 
} 
?>
