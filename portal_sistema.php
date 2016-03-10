<?php include("autenticacao.php") ?>
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
<p class="headtext">Script TestLab</p>
</div>
<div id="menu">
<ul class="ulindex">
<li class="liindex"><a href="principal.php">Iniciar</a></li>
<li><a href="#">Info</a></li>
<li><a href="#">Contato</a></li>
</ul>
</div>
<div id="conteudo">
<div id="textohome">
<p class="textoindex">Olá <?php echo $_SESSION["nome"]?><br/><br/> Seja Bem vindo ao TestLab!<br/><br/>Você pode utilizar as funcionalidades do sistema clicando em INICIAR no menu ao lado.</p>
</div>
</div>
<div id="rodape">
<p class="footertext">
-- TestLAB - Copyright 2010 --
</p>
</div>
</div>
</body>
</html>