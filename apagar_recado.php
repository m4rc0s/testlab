<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
require "config.php";

$id_recado = $_GET['id_recado'];
$sql = "DELETE FROM recado WHERE id_recado='$id_recado'";

$resultado = @mysql_query($sql)
or die ("Não foi possível realizar a exclusão dos dados.");
echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=recados.php'>
		  <script type=\"text/javascript\">
		  alert(\"Recado excluído com sucesso.\");
		  </script>";


?>
