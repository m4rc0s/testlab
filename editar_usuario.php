<?php include ("autenticacao.php"); ?>
<html>
<head>
<title>Teste de scripts</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" >
<script type="text/javascript" src="scripts/browser.js"></script>
<script type="text/javascript" src="scripts/frame.js"></script>
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
<li class="liservico"><a href="consultar_usuario.php">Consultar</a></li>
<li class="liservico"><a href="recados.php">Deixe um recado</a></li>
</ul>

</div>
<div id="conteudo">
<?php
require ("config.php");

$id_usuario = $_GET['id_usuario'];
$SQL = "SELECT * FROM usuario WHERE id_usuario='$id_usuario'";
$query = mysql_query($SQL);

$linhas = mysql_num_rows($query);
if($linhas == 0){

echo "Nada encontrado";
exit();
}
$row = mysql_fetch_array($query);
echo "<form id='form' method='post' action='alterar_usuario.php'>
<fieldset id='fieldsetusuario'>
<legend>Alterar Usuário</legend>
<input type='hidden' value='$id_usuario' name='id_usuario'>
<label for='nome'>Nome</label>
<input type='text' name='nome' value=\"".$row['nome']."\"/><br/><br/>

<label for='login'>Login</label>
<input type='text' name='login' value=\"".$row['login']."\"/><br/><br/>

<label for='senha'>Senha</label>
<input type='text' name='senha' value=\"".$row['senha']."\"/><br/><br/>

<label for='funcao'>Funcao</label>
<input type='text' name='funcao' value=\"".$row['funcao']."\"/><br/><br/>

<input id='submitbuttonusuario' type='submit' name='submit' id='submitbutton' value='Salvar'/>
<input id='submitbuttonusuario' type='reset' name='limpar' id='submitbutton' value='Limpar'/>
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