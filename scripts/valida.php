<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
include("config.php");
if(isset($_COOKIE["login"]))
$login = $_COOKIE["login"];
if(isset($_COOKIE["senha"]))
$senha = $_COOKIE["senha"];

if(!(empty($login) OR empty($senha)))
{
$query = mysql_query("SELECT * from usuario where login='$login'");
if(mysql_num_rows($query)==1)
{
if($senha != mysql_result($query,0,"senha"))
{
setcookie("login");
setcookie("senha");
echo "você não esta logado";
exit;
}
}
else
{
setcookie("login");
setcookie("senha");
echo "você não esta logado";
exit;
}
}
else
{
echo "Você não efetuou o login!!";
exit;
}
?>

</body>
</html>
