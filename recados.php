<?
require("config.php");
require("autenticacao.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<title>Recados - WolnaSoftwares</title>

<style type="text/css">
@import url("stylerecados.css");
</style>
</head>

<body>
<div id="all">
<div id="headrecados">
<p class="headtext">
Scripts TestLAB - Comunicação</p>
</div>

<div id="menu">
<ul class="menu">
<li class="menu"><a href="principal.php" class="menu">Voltar</a></li>
</ul>
</div>

<div id="conteudo">
<div id="textorecados">
<h4>Deixe um recado:</h4>
<form id="formrecados" method="post" action="cadastrando_recado.php">
<input type="hidden" value="<?php echo $_GET['id_recado'] ?>" />
<label for="nome">Seu Nome</label>
<input type="text" name="nome" value="<?php echo $_SESSION["nome"]; ?>" readonly="readonly"/><br/>
<label for="assunto" >Assunto</label>
<input type="text" name="assunto" class="assunto"/><br/>
<label for="destinatario">Para</label>
<select  name="destinatario">
<option>Estagiários</option>
<option>Professores</option>
<option>Administração</option>
</select><br/><br/>
<label for="texto">Seu recado aqui:</label>
<textarea name="texto" ></textarea><br/>
<label for="data">Data Atual</label>
<input maxlength="10" class="data" type="text" name="data" onkeyup="mascara(this,data);" value="<? $data=date("d/m/Y"); 
echo "$data" ?>"/><br/>
<input type="submit" name="Submit" id="submitbuttonrecado" value="Salvar"/>
</form>
<div id="ultimos">
<h4>Ultimos recados</h4>
<?
include ("config.php");

$query = mysql_query("SELECT * FROM recado ORDER BY id_recado DESC LIMIT 2");

$linhas = mysql_num_rows($query);

if($linhas == 0){

echo "Nada encontrado";
exit();
}
elseif ($_SESSION["funcao"] == "Administrador"){
while($row = mysql_fetch_array($query)){
  echo "<div id=ultimorecado>UM RECADO!!!<br/>";
  echo "ESCRITO POR:  " . $row['nome'] . "<br/>";
  echo "ASSUNTO:  " . $row['assunto'] . "<br/>";
  echo "DESTINATARIO:  " . $row['destinatario'] . "<br/>";
  echo "DATA DA POSTAGEM:  " . $row['data'] . "<br/>";
  echo "<td>RECADO:  " . $row['texto'] . "</td><br/>";
  echo "<ul class='ultimosrecados'><li class='ultimosrecados'><a href='editar_recado.php?id_recado=".$row['id_recado']."' class='ultimosrecados'>Editar</a><a  class='ultimosrecados' href='apagar_recado.php?id_recado=".$row['id_recado']."'>Apagar</a></li></ul>";
  echo "</div>";
  echo "<div id='espaco'></div>";
  }

}
else {
while($row = mysql_fetch_array($query)){
  echo "<div id=boxrecado>UM RECADO!!!<br/>";
  echo "ESCRITO POR:  " . $row['nome'] . "<br/>";
  echo "ASSUNTO:  " . $row['assunto'] . "<br/>";
  echo "DESTINATARIO:  " . $row['destinatario'] . "<br/>";
  echo "DATA DA POSTAGEM:  " . $row['data'] . "<br/>";
  echo "<td>RECADO:  " . $row['texto'] . "</td><br/>";
  echo "</div>";
  echo "<div id='espaco'></div>";
  }
}

?>
</div>
</div>
<div id="recados">
<?
include ("config.php");

$query = mysql_query("SELECT * FROM recado ORDER BY id_recado DESC");

$linhas = mysql_num_rows($query);

if($linhas == 0){

echo "Nada encontrado";
exit();
}
elseif ($_SESSION["funcao"] == "Administrador"){
while($row = mysql_fetch_array($query)){
  echo "<div id=boxrecado>UM RECADO!!!<br/>";
  echo "ESCRITO POR:  " . $row['nome'] . "<br/>";
  echo "ASSUNTO:  " . $row['assunto'] . "<br/>";
  echo "DESTINATARIO:  " . $row['destinatario'] . "<br/>";
  echo "DATA DA POSTAGEM:  " . $row['data'] . "<br/>";
  echo "<td>RECADO:  " . $row['texto'] . "</td><br/>";
  echo "<ul class='recado'><li class='recado'><a href='editar_recado.php?id_recado=".$row['id_recado']."' class='recado'>Editar</a><a  class='recado' href='apagar_recado.php?id_recado=".$row['id_recado']."'>Apagar</a></li></ul>";
  echo "</div>";
  echo "<div id='espaco'></div>";
  }

}

else {
while($row = mysql_fetch_array($query)){
  echo "<div id=ultimorecado>UM RECADO!!!<br/>";
  echo "ESCRITO POR:  " . $row['nome'] . "<br/>";
  echo "ASSUNTO:  " . $row['assunto'] . "<br/>";
  echo "DESTINATARIO:  " . $row['destinatario'] . "<br/>";
  echo "DATA DA POSTAGEM:  " . $row['data'] . "<br/>";
  echo "<td>RECADO:  " . $row['texto'] . "</td><br/>";
  echo "</div>";
  echo "<div id='espaco'></div>";
  }
}
?>
</div>
<div id="quantidade">
  <blockquote>
    <h4>Recados cadastrados:</h4>
  </blockquote>
  <?
include ("config.php");

$query = mysql_query("SELECT * FROM recado");

$linhas = mysql_num_rows($query);

echo "<div id='totalrecados'>Total de recados: $linhas</div>";

if($linhas == 0){

echo "Nada encontrado";
exit();
}
else{
$data=date("d/m/Y"); 
while($row = mysql_fetch_array($query)){
  if($data == $row['data']){  
  $cont+=1;
  }
  if($cont == 0){
  $cont = 0;
}
}
echo "<div id='recadoshoje'>Hoje: $cont recados</div>";
}
?>
</div>
</div>
<div id="rodape">
<p class="footertext">
-- Scripts TestLAB - Copyright 2010 --
</p>
</div>
</div>
</body>
</html>