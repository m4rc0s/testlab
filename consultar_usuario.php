<?php include("autenticacao.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
@import url("styleconsultas.css");
</style>
<meta http-equiv="refresh" content="300" />
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<title>TestLAB - WolnaSoftwares</title>
</head>
<body>
<div id="all">
<div id="head">
<p class="headtext">TestLAB - Gestão de Usuários</p>
</div>
<div id="conteudo">
<ul class="menuconsulta">
<li class="menuconsulta"><a href="principal.php" class="menuconsultalink">Voltar</a></li>
<li class="menuconsulta"><a href="#" onclick="window.location.reload()" class="menuconsultalink">Atualizar</a></li>
<li class="menuconsulta"><a href="cadastro_usuario.php" class="menuconsultalink">Cadastrar Usuário</a></li>
<li class="menuconsulta"><a href="historico_usuarios.php" class="menuconsultalink">Exibir Todos</a></li>
</ul>
<form id="formconsultausuario" method="get" action="consultar_usuario.php">
<label for="usernome">Nome:</label>
<input type="text" name="usernome" size="30" value="Pesquisar Nome">
<br/><br/>
<label for="userlogin">Login:</label>
<input type="text" name="userlogin" size="30" value="Pesquisar Login">
<label for="userfuncao">Função:</label>
<input type="text" name="userfuncao" value="Pesquisar Função">
<input type="submit" name="submit" style="width:80px;" value="Consultar"/>
</form>

<div id="consulta">
<?php
require("config.php");

$id_usuario=$_GET['id_usuario'];
$usernome=$_GET['usernome'];
$userlogin=$_GET['userlogin'];
$userfuncao=$_GET['userfuncao'];

#//retirando espaços
   $usernome=trim($usernome);
   $userlogin=trim($userlogin);
   $userfuncao=trim($userfuncao);
   
if($erro==0){

$query = mysql_query("SELECT * FROM usuario ORDER BY id_usuario DESC");

$linhas = mysql_num_rows($query);

if($linhas == 0){

echo "Nada encontrado";
exit();
}
else{
echo"
<table border='1'>
<tr>
<th>Nome</th>
<th>Login</th>
<th>Senha</th>
<th>Função</th>
<th>Ações</th>
</tr>";
while($row = mysql_fetch_array($query)){

  if($usernome == $row['nome']){
  echo "<tr>";
  echo "<td>" . $row['nome'] . "</td>";
  echo "<td>" . $row['login'] . "</td>";
  echo "<td>" . $row['senha'] . "</td>";
  echo "<td>" . $row['funcao'] . "</td>";
  echo "<td><ul class='ulusuario'><li class='liusuario'><a href='editar_usuario.php?id_usuario=".$row['id_usuario']."' class='usuariolink'>Alterar</a><a href='deletar_usuario.php?id_usuario=".$row['id_usuario']."' class='usuariolink'>Excluir</a></ul></li></td>"; 
  echo "</tr>";
  }
  
    if($userlogin == $row['login']){
  echo "<tr>";
  echo "<td>" . $row['nome'] . "</td>";
  echo "<td>" . $row['login'] . "</td>";
  echo "<td>" . $row['senha'] . "</td>";
  echo "<td>" . $row['funcao'] . "</td>";
  echo "<td><ul class='ulusuario'><li class='liusuario'><a href='editar_usuario.php?id_usuario=".$row['id_usuario']."' class='usuariolink'>Alterar</a><a href='deletar_usuario.php?id_usuario=".$row['id_usuario']."' class='usuariolink'>Excluir</a></ul></li></td>"; 
  echo "</tr>";
  }
  
    if($userfuncao == $row['funcao']){
  echo "<tr>";
  echo "<td>" . $row['nome'] . "</td>";
  echo "<td>" . $row['login'] . "</td>";
  echo "<td>" . $row['senha'] . "</td>";
  echo "<td>" . $row['funcao'] . "</td>";
  echo "<td><ul class='ulusuario'><li class='liusuario'><a href='editar_usuario.php?id_usuario=".$row['id_usuario']."' class='usuariolink'>Alterar</a><a href='deletar_usuario.php?id_usuario=".$row['id_usuario']."' class='usuariolink'>Excluir</a></ul></li></td>"; 
  echo "</tr>";
  }
}

}
echo "</table>";
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
