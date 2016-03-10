<?php include ("autenticacao.php"); ?>
<html>
<head>
<title>Teste de scripts</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" >
<script type="text/javascript" src="scripts/browser.js"></script>
<style type="text/css">
@import url("style.css");
</style>
</head>
<body>

<div id="all">

<div id="head">
<p class="headtext">
Scripts TestLAB - Gest&atilde;o de servi&ccedil;os</p>
</div>

<div id="menu">
<ul>
<li class="liservico"><a href="principal.php">Voltar</a></li>
<li class="liservico"><a href="consultar_servico.php">Consultar</a></li>
<li class="liservico"><a href="recados.php">Deixe um recado</a></li>
</ul>

</div>
<div id="conteudo">
<?php
require ("config.php");

$id_recado = $_GET['id_recado'];
$SQL = "SELECT * FROM recado WHERE id_recado='$id_recado'";
$query = mysql_query($SQL);

$linhas = mysql_num_rows($query);
if($linhas == 0){

echo "Nada encontrado";
exit();
}
$row = mysql_fetch_array($query);
echo "<form id='formservico' method='post' action='alterar_recado.php'>
<fieldset id='fieldsetservico'>
<legend>Alterar Recado</legend>
<input type='hidden' value='$id_recado' name='id_recado'>
<label for='nome'>Nome:</label>
<input type='text' name='nome' readonly='readonly' value=\"".$row['nome']."\"/><br/><br/>
<label for='assunto'>Assunto:</label>
<input type='text' name='assunto' value=\"".$row['assunto']."\"/><br/><br/>
<label for='destinatario'>Para:</label>
<select type='text' name='destinatario'>
<option>Estagiários</option>
<option>Professores</option>
<option>Administração</option>
</select><br/><br/>
<label for='texto'>Modifique seu recado:</label>
<textarea name='texto'>".$row['texto']."</textarea><br/><br/>
<label for='data'>Data Atual:</label>
<input maxlength='10' class='data' type='text' name='data' value=\"" .$row['data']. "\"/><br/><br/>
<input id='submitbuttonservico' type='submit' name='submit' value='Salvar'/>
<input id='submitbuttonservico' type='reset' name='limpar' value='Limpar'/>
</fieldset>
</form>"
?>
</div>
<div id="rodape">
<p class="footertext">
-- Scripts TestLAB - Copyright 2010 --
</p>
</div>
</div>
</body>
</html>