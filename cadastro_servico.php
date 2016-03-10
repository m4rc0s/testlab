<?php include ("autenticacao.php"); ?>
<html>
<head>
<title>TestLAB - WolnaSoftwares</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" >
<script type="text/javascript" src="scripts/browser.js"></script>
<script type="text/javascript" src="scripts/frame.js"></script>
<script>
function mascara(o,f){
        v_obj=o
        v_fun=f
        setTimeout("execmascara()",1)
}

function execmascara(){
        v_obj.value=v_fun(v_obj.value)
}

function data(v){

        v=v.replace(/\D/g,"")
        v=v.replace(/(\d{2})(\d)/,"$1/$2")
        v=v.replace(/(\d{2})(\d)/,"$1/$2")
        return v
}
</script>

<style type="text/css">
@import url("style.css");
</style>
</head>
<body>

<div id="all">

<div id="head">
<p class="headtext">
TestLAB - Cadastro de Serviços</p>
</div>

<div id="menu">
<ul>
<li class="liservico"><a href="principal.php">Voltar</a></li>
<li class="liservico"><a href="consultar_servico.php">Consultar</a></li>
<li class="liservico"><a href="recados.php">Deixe um recado</a></li>
</ul>

</div>
<div id="conteudo">
<form id="formservico" method="post" action="cadastrando.php">
<fieldset id="fieldsetservico">
<legend>Cadastrar Serviço</legend>
<label for="idcomputador">ID-Computador:</label>
<input type="text" name="idcomputador"><br /><br />
<label for="problema">Problema:</label>
<input type="text" name="problema"><br/><br/>
<label for="prioridade">Prioridade:</label>
<select type="text" name="prioridade">
<option>Alta</option>
<option>M&eacute;dia</option>
<option>Baixa</option>
</select><br/><br/>
<label for="datainicial">Data Atual:</label>
<input type="text" name="datainicial" onKeyUp="mascara(this,data);" value="<? $data=date("d/m/Y"); 
echo "$data" ?>"><br/><br/>
<label for="situacao">Situa&ccedil;&atilde;o:</label>
<select type="text" name="situacao">
<option>Em Espera</option>
<option>Executando</option>
<option>Manuten&ccedil;&atilde;o Externa</option>
<option>Conclu&iacute;do</option>
</select><br/><br/>
<label for="procedimento">Procedimento:</label>
<textarea name="procedimento" style="height:20%;"></textarea><br /><br />
<label for="descricao">Observa&ccedil;&otilde;es:</label>
<textarea name="descricao" ></textarea><br />
<br />
<input id="submitbuttonservico" type="submit" name="submit" id="submitbutton" value="Salvar" >
<input id="submitbuttonservico" type="reset" name="limpar" id="submitbutton" value="Limpar" >
</fieldset>
</form>
</div>
<div id="rodape">
<p class="footertext">
-- Scripts TestLAB - Copyright 2010 --
</p>
</div>
</div>
</body>
</html>