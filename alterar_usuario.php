<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar</title>
</head>

<body>

<?php
require("config.php");
$id_usuario = $_POST['id_usuario'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;
$funcao = $_POST['funcao'];

$SQL = "UPDATE usuario 
	   SET nome='$nome', login='$login', senha='$senha', funcao='$funcao'
	   WHERE id_usuario='$id_usuario'";
$query = mysql_query($SQL);

echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=consultar_usuario.php'>
		  <script type=\"text/javascript\">
		  alert(\"Usuário alterado com sucesso.\");
		  </script>";

?>

</body>
</html>