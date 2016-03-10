<?php include("autenticacao.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("config.php");

$nome = $_POST["nome"];
$login = $_POST["login"]; 
$senha = $_POST["senha"] ? md5(trim($_POST["senha"])) : FALSE;
$funcao = $_POST["funcao"];

$i=mysql_query("INSERT INTO usuario (id_usuario, nome, login, senha, funcao) VALUES ('','$nome','$login','$senha','$funcao')")
    or die( mysql_error());
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=cadastrando_usuario.php'>
		  <script type=\"text/javascript\">
		  alert(\"Usuario Cadastrado.\");
		  </script>";

?>
</body>
</html>
