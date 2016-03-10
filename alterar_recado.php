<?php include ("autenticacao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar</title>
</head>

<body>

<?php
require("config.php");
$id_recado = $_POST['id_recado'];
$nome = $_POST['nome'];
$assunto = $_POST['assunto'];
$destinatario = $_POST['destinatario'];
$texto = $_POST['texto'];
$data = $_POST['data'];

$SQL = "UPDATE recado 
	   SET nome='$nome',assunto='$assunto', destinatario='$destinatario', texto='$texto', data='$data'
	   WHERE id_recado = '$id_recado'";
$query = mysql_query($SQL);

echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=recados.php'>
		  <script type=\"text/javascript\">
		  alert(\"Recado alterado com sucesso.\");
		  </script>";

?>

</body>
</html>

</body>
</html>
