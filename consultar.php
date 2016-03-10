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
<th>Data de requisicao</th>
<th>Situacao</th>
<th>Observacoes</th>
</tr>";
while($row = mysql_fetch_array($query)){
  
  if( $prioridade == $row['situacao']){
  echo "<td>" . $row['idcomputador'] . "</td>";
  echo "<td>" . $row['problema'] . "</td>";
  echo "<td>" . $row['prioridade'] . "</td>";
  echo "<td>" . $row['datainicial'] . "</td>";
  echo "<td class='situacao'>" . $row['situacao'] . "</td>";
  echo "<td class='desc'>" . $row['descricao'] . "</td>";
  echo "</tr>";
  }
  
  if( $situacao == $row['situacao']){
  echo "<td>" . $row['idcomputador'] . "</td>";
  echo "<td>" . $row['problema'] . "</td>";
  echo "<td>" . $row['prioridade'] . "</td>";
  echo "<td>" . $row['datainicial'] . "</td>";
  echo "<td class='situacao'>" . $row['situacao'] . "</td>";
  echo "<td class='desc'>" . $row['descricao'] . "</td>";
  echo "</tr>";
  }
  }
echo "</table>";
}
  
}
?>