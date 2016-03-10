<?php include("autenticacao.php"); 
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="300" />
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<title>Gestão de Serviços - WolnaSoftwares</title>
<style type="text/css">
@import url("styleconsultas.css");
</style>
</head>

<body>
<div id="all">

<div id="head">
<p class="headtext">TestLAB - Gestão de Serviços</p>

</div>

<div id="conteudo">
<ul class="menuconsulta">
<li class="menuconsulta"><a href="principal.php" class="menuconsultalink">Voltar</a></li>
<li class="menuconsulta"><a href="#" onclick="window.location.reload()" class="menuconsultalink">Atualizar</a></li>
<li class="menuconsulta"><a href="cadastro_servico.php" class="menuconsultalink">Adicionar Novo</a></li>
<li class="menuconsulta"><a href="historico.php" class="menuconsultalink">Exibir Todos</a></li>
</ul>
<form id="formconsultaservico" method="get" action="consultar_servico.php">
<label class="consultal"  for="idcomputador">ID:</label>
<select name="idcomputador"/>
<option>Id-Computador</option>
<?php
if($erro==0){

$query = mysql_query("SELECT * FROM servicos ORDER BY id_servico");

$linhas = mysql_num_rows($query);

if($linhas == 0){

echo "Nada encontrado";
exit();
}
else{
while($row = mysql_fetch_array($query)){
echo "<option>". $row['idcomputador'] ."</option>";
}
}
}
?>
</select>
<label class="consultal"  for="prioridade">Prioridade:</label>
<select  name="prioridade">
<option>Prioridade</option>
<option>Alta</option>
<option>Média</option>
<option>Baixa</option>
</select><br/><br/>
<label class="consultal" for="datainicial">Pesquisar por data:</label>
<select  name="datainicial"/>
<option>Data Inicial</option>
<?php
if($erro==0){

$query = mysql_query("SELECT * FROM servicos ORDER BY id_servico");

$linhas = mysql_num_rows($query);

if($linhas == 0){

echo "Nada encontrado";
exit();
}
else{
while($row = mysql_fetch_array($query)){
echo "<option>". $row['datainicial'] ."</option>";
}
}
}
?>
</select>
<label class="consultal" for="situacao">Situaçao:</label>
<select  name="situacao">
<option>Situação</option>
<option>Em Espera</option>
<option>Executando</option>
<option>Manutenção Externa</option>
<option>Concluído</option>
</select>
<input type="submit" name="Submit" style="width:80px;" value="Consultar"/>
</form>
<div id="consulta">
<?php
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

$query = mysql_query("SELECT * FROM servicos ORDER BY id_servico");

$linhas = mysql_num_rows($query);

if($linhas == 0){

echo "Nada encontrado";
exit();
}
elseif ($_SESSION["funcao"] != "Administrador"){
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

  if($prioridade == $row['prioridade']){
  echo "<tr>";
  echo "<td>" . $row['idcomputador'] . "</td>";
  echo "<td>" . $row['problema'] . "</td>";
  echo "<td>" . $row['prioridade'] . "</td>";
  echo "<td>" . $row['datainicial'] . "</td>";
  echo "<td class='situacao'>" . $row['situacao'] . "</td>";
  echo "<td class='desc'>" . $row['descricao'] . "</td>";
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
else {
 if ($_SESSION["funcao"] == "Administrador"){

echo"
<table border='1'>
<tr>
<th>Id Computador</th>
<th>Problema</th>
<th>Prioridade</th>
<th>Data de requisição</th>
<th>Situação</th>
<th>Observações</th>
<th>Ações</th>
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
  echo "<td><ul class='ulservico'><li class='liservico'><a class='servicolink' class='ulservico' href='editar_servico.php?id_servico=".$row['id_servico']."'>Alterar</a><a class='servicolink' href='deletar.php?idcomputador=".$row['idcomputador']."'>Deletar</a></li></ul></td>";
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
  echo "<td><ul class='ulservico'><li class='liservico'><a class='servicolink' class='ulservico' href='editar_servico.php?id_servico=".$row['id_servico']."'>Alterar</a><a class='servicolink' href='deletar.php?idcomputador=".$row['idcomputador']."'>Deletar</a></li></ul></td>";
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
 echo "<td><ul class='ulservico'><li class='liservico'><a class='servicolink' class='ulservico' href='editar_servico.php?id_servico=".$row['id_servico']."'>Alterar</a><a class='servicolink' href='deletar.php?idcomputador=".$row['idcomputador']."'>Deletar</a></li></ul></td>";
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
  echo "<td><ul class='ulservico'><li class='liservico'><a class='servicolink' class='ulservico' href='editar_servico.php?id_servico=".$row['id_servico']."'>Alterar</a><a class='servicolink' href='deletar.php?idcomputador=".$row['idcomputador']."'>Deletar</a></li></ul></td>";
  echo "</tr>";
  }
  }
echo "</table>";
}

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