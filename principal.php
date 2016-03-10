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
<li><a href="consultar_servico.php">Serviços</a></li>
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
<p class="textoindex">No item serviços no menu ao lado, você encontrará um formulário de consulta onde você poderá buscar todos os registros de Serviços, e ver os seus detalhes, mantendo-se então informado em relação a execução de determinadas tarefas.</p>
<p class="textoindex">No item recados, você poderá se comunicar com outros usuários que estejam logados no sistema, enviar avisos ou fazer solicitações de tarefas não relacionadas diretamente com manutenção e que sejam de responsabilidade da informática,como reserva de aparelhos, montagem, entre outros.</p>
<?php if($_SESSION["funcao"] == "Administrador"){
 echo"<p class='textoindex'>No item usuários, você pode consultar os usuários do sistema, cadastrar novos usuários, excluir, alterar seus dados, principalmente a função para que possam ter, ou não, acesso de administrador</p>";
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