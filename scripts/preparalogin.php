<?php
include("config.php");
$login = $_POST['login'];
$senha = $_POST['senha'] ;
$query = mysql_query("SELECT * FROM usuario where login='$login'");
$linhas = mysql_num_rows($query);

if($linhas==0)
{
echo "usuario não encontrado";
echo "<br>";
echo "<a href='index.html'>Voltar</a>";
}
else
{
if($senha != mysql_result($query, 0, "senha")) // confere a senha
{
echo "a senha está errada";
echo "<br>";
echo "<a href='login.htm'>Voltar</a>";
}
else 
{
setcookie("login", $login);
setcookie("senha", $senha);
header("Location: principal.php");
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
</body>
</html>
