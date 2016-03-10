<?php include("autenticacao.php"); ?>
<html>
<head>
<title>TestLAB - WolnaSoftwares</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<style type="text/css">
@import url("style.css");
</style>
</head>
<body>

<div id="all">
<div id="head">
<p class="headtext">
TestLAB - Desenvolvido por WolnaSoftwares</p>
</div>

<div id="menu">
<ul>
<li><a href="consultar_servico.php">Servi�os</a></li>
<li><a href="recados.php">Recados</a></li>
<?php if($_SESSION["funcao"] == "Administrador"){
 echo"<li><a href='consultar_usuario.php'>Usuarios</a>";
 } 
?>
<li><a href="sair.php">Sair</a></li>
</ul>

</div>
<div id="conteudo">
<div id="textohome">
<p class="textoindex">No item servi�os no menu ao lado, voc� encontrar� um formul�rio de consulta onde voc� poder� buscar todos os registros de Servi�os, e ver os seus detalhes, mantendo-se ent�o informado em rela��o a execu��o de determinadas tarefas.</p>
<p class="textoindex">No item recados, voc� poder� se comunicar com outros usu�rios que estejam logados no sistema, enviar avisos ou fazer solicita��es de tarefas n�o relacionadas diretamente com manuten��o e que sejam de responsabilidade da inform�tica,como reserva de aparelhos, montagem, entre outros.</p>
<?php if($_SESSION["funcao"] == "Administrador"){
 echo"<p class='textoindex'>No item usu�rios, voc� pode consultar os usu�rios do sistema, cadastrar novos usu�rios, excluir, alterar seus dados, principalmente a fun��o para que possam ter, ou n�o, acesso de administrador</p>";
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