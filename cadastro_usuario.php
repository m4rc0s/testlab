<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<title>TestLab - WolnaSoftwares</title>
<style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>
<body>
<div id="all">
<div id="head">
<p class="headtext">TestLab - Cadastro de Usuários</p>
</div>
<div id="menu">
<ul class="ulindex">
<li><a href="consultar_usuario.php">Voltar</a></li>
</ul>
</div>
<div id="conteudo">
<form id="formusuario" method="post" action="cadastrando_usuario.php">
<fieldset id="fieldsetusuario">
<legend>Cadastrar Usuário</legend>
<label for="nome">Nome</label><br/>
<input type="text" name="nome" size="30">
<br /><br />
<label for="login">Login</label><br />
<input type="text" name="login" size="30">
<br /><br />
<label for="senha">Senha</label><br />
<input type="password" name="senha" size="10"><br/><br />
<label for="funcao">Fun&ccedil;&atilde;o</label><br />
<input type="text" name="funcao"><br/><br />
<input id="submitbuttonusuario" type="submit" name="enviar" value="Salvar">
</fieldset>
</form>
</p>

</div>
<div id="rodape">
<p class="footertext">
-- TestLAB - Copyright 2010 --
</p>
</div>
</div>
</body>
</html>
