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
TestLAB - Agendar Projetor</p>
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
<legend>Agendar Projetor</legend>
<br/>
<label for="nome">Seu Nome:</label>
<input type="text" name="nome" value="<?php echo $_SESSION["nome"]; ?>" readonly="readonly"/><br/><br/>
<label for="projetor">Projetor:</label>
<select type="text" name="projetor">
<option>Projetor</option>
</select><br/><br/>
<label for="agenda">Agendar Para:</label>
<input type="text" name="agenda"><br/><br/>
<label for="datainicial">Data Atual:</label>
<input type="text" name="datainicial" onKeyUp="mascara(this,data);" value="<? $data=date("d/m/Y"); 
echo "$data" ?>"><br/><br/>
<label for="motivo">Motivo:</label>
<textarea name="motivo" ></textarea><br />
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
