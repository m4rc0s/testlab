<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" >
<style type="text/css">
@import url("style.css");
</style>
<title>Hist&oacute;rico geral</title></head>
<body>
<div id="all" style="background-color:#006699">
<p style="font-size:15pt; font-family:verdana;">&nbsp;Exibindo todos os cadastros de servi&ccedil;os que foram realizados</p>
<p><a href="consultar_servico.php">Voltar</a></p>
<div id="consulta" style="padding-top:10px;">
<?php
include("config.php");
$idcomputador=$_GET['idcomputador'];
$prioridade=$_GET['prioridade'];
$datainicial=$_GET['datainicial'];
$situação=$_GET['situacao'];

#//retirando espaços
   $idcomputador=trim($idcomputador);
   $prioridade=trim($prioridade);
   $datainicial=trim($datainicial);
   $situacao=trim($situacao);
   
if($erro==0){

$query = mysql_query("SELECT * FROM servicos");

$linhas = mysql_num_rows($query);

if($linhas == 0){

echo "Nada encontrado";
exit();
}
else{
echo"
<table border='1'>
<tr>
<th>Id Computador</th>
<th>Problema</th>
<th>Prioridade</th>
<th>Data de requisição</th>
<th>Situação</th>
<th>Observações</th>
</tr>";
while($row = mysql_fetch_array($query)){
  echo "<tr>";
  echo "<td>" . $row['idcomputador'] . "</td>";
  echo "<td>" . $row['problema'] . "</td>";
  echo "<td>" . $row['prioridade'] . "</td>";
  echo "<td>" . $row['datainicial'] . "</td>";
  echo "<td class='situacao'>" . $row['situacao'] . "</td>";
  echo "<td class='desc'>" . $row['descricao'] . "</td>";
  echo "</tr>";
  }
  }
  }
  ?>
</div>
</div>
</body>