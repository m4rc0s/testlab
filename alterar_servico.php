<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar</title>
</head>

<body>

<?php
require("config.php");
$id_servico = $_POST['id_servico'];
$problema = $_POST['problema'];
$prioridade = $_POST['prioridade'];
$datainicial = $_POST['datainicial'];
$situacao = $_POST['situacao'];
$descricao = $_POST['descricao'];
$procedimento = $_POST['procedimento'];

$SQL = "UPDATE servicos 
	   SET problema='$problema', prioridade='$prioridade', datainicial='$datainicial', situacao='$situacao', descricao='$descricao', 		            procedimento='$procedimento'
	   WHERE id_servico = '$id_servico'";
$query = mysql_query($SQL);

echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=consultar_servico.php'>
		  <script type=\"text/javascript\">
		  alert(\"Registro alterado com sucesso.\");
		  </script>";

?>

</body>
</html>
