<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<title>Gerenciar Servi&ccedil;os</title>
</head>
<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="300" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listagem</title>
<style type="text/css">
@import url("styleconsultas.css");
</style>
</head>

<body>
<div id="all">

<div id="head">
<p class="headtext">Scripts TestLAB - Listagem</p>

</div>

<div id="conteudo">
<ul>
<li><a href="principal.php">Voltar</a></li>
<li><a href="#" onclick="window.location.reload()">Atualizar</a></li>
<li><a href="cadastro_servico.php">Adicionar Novo</a></li>
<li><a href="historico.php">Exibir Todos</a></li>
</ul>
<form id="formconsulta" method="get" action="gerenciar_servico.php">
<label class="consultal"  for="idcomputador">ID:</label>
<input class="edit" type="text" name="idcomputador"/>
<label class="consultal"  for="prioridade">Prioridade</label>
<select  name="prioridade">
<option>Prioridade</option>
<option>Alta</option>
<option>M&eacute;dia</option>
<option>Baixa</option>
</select><br/><br/>
<label class="consultal" for="datainicial">Pesquisar por data:</label>
<input class="edit" type="text" name="datainicial"/>
<label class="consultal" for="situacao">Situa&ccedil;&atilde;o</label>
<select  name="situacao">
<option>Situa&ccedil;&atilde;o</option>
<option>Em Espera</option>
<option>Executando</option>
<option>Manuten&ccedil;&atilde;o Externa</option>
<option>Conclu&iacute;do</option>
</select>
<input type="submit" name="Submit" style="width:80px;" value="Consultar"/>
</form>
<div id="consulta">
<?php
include("config.php");
$idcomputador=$_GET['idcomputador'];
$prioridade=$_GET['prioridade'];
$datainicial=$_GET['datainicial'];
$situacao=$_GET['situacao'];

#//retirando espaços
   $idcomputador=trim($idcomputador);
   $prioridade=trim($prioridade);
   $datainicial=trim($datainicial);
   $situacao=trim($situacao);
   
if($erro==0){

$query = mysql_query("SELECT * FROM servico");

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
<th>Excluir</th>
</tr>";
while($row = mysql_fetch_array($query)){

  if($prioridade == $row['prioridade']){
  echo "<tr>";
  echo "<td>" . $row['idcomputador'] . "</td>";
  echo "<td>" . $row['problema'] . "</td>";
  echo "<td>" . $row['prioridade'] . "</td>";
  echo "<td>" . $row['datainicial'] . "</td>";
  echo "<td class='situacao'>" . $row['situacao'] . "</td>";
  echo "<td class='desc'>" . $row['descricao'] . "</td>";
  echo "<td><input type='checkbox' name='check'/></td";
  echo "</tr>";
  }
  
  if($datainicial == $row['datainicial']){
  echo "<tr>";
  echo "<td>" . $row['idcomputador'] . "</td>";
  echo "<td>" . $row['problema'] . "</td>";
  echo "<td>" . $row['prioridade'] . "</td>";
  echo "<td>" . $row['datainicial'] . "</td>";
  echo "<td class='situacao'>" . $row['situacao'] . "</td>";
  echo "<td class='desc'>" . $row['descricao'] . "</td>";
  echo "</tr>";
  }
  
  if($idcomputador == $row['idcomputador']){
  echo "<tr>";
  echo "<td>" . $row['idcomputador'] . "</td>";
  echo "<td>" . $row['problema'] . "</td>";
  echo "<td>" . $row['prioridade'] . "</td>";
  echo "<td>" . $row['datainicial'] . "</td>";
  echo "<td class='situacao'>" . $row['situacao'] . "</td>";
  echo "<td class='desc'>" . $row['descricao'] . "</td>";
  echo "</tr>";
  }

  if($situacao == $row['situacao']){
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
echo "</table>";
}
}
?>
</div>
</div>
<div id="rodape">
<p class="footertext">
-- Scripts TestLAB - Copyright 2010 --
</p>
</div>
</body>
</html>
