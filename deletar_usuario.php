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
<title>Untitled Document</title>
</head>

<body>

<?php
require "config.php";

$id_usuario = $_GET['id_usuario'];
$sql = "DELETE FROM usuario WHERE id_usuario='$id_usuario'";

$resultado = @mysql_query($sql)
or die ("Não foi possível realizar a exclusão dos dados.");
echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=consultar_usuario.php'>
		  <script type=\"text/javascript\">
		  alert(\"Usuário excluído com sucesso.\");
		  </script>";


?>

</body>
</html>

</body>
</html>
