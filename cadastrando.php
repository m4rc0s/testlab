<?php
include("config.php");

$idcomputador=$_POST['idcomputador'];
$problema=$_POST['problema'];
$prioridade=$_POST['prioridade'];
$datainicial=$_POST['datainicial'];
$descricao=$_POST['descricao'];
$situação=$_POST['situacao'];
$procedimento=$_POST['procedimento'];


#//retirando espaços
   $idcomputador=trim($idcomputador);
   $problema=trim($problema);
   $prioridade=trim($prioridade);
   $datainicial=trim($datainicial);
   $descricao=trim($descricao);
   $situacao=trim($situacao);
   $procedimento=trim($procedimento);
   
$erro=0;

   
#//encontrar números
   if( ereg("[0-9()-.,:;*&¬!?|+}{/]", $prioridade) ){
   echo '<center><font color="#FF0000">Nome incorreto!</font>';
   $erro++; }
   
   if( ereg("[A-Z a-z ()-.,:;*&¬!?|+}{/]", $idcomputador)){
   echo '<center><h1>Somente numeros</h1></center>';
   $erro++;
   }

#//verificar se campo nome foi setado
   if(empty($idcomputador)){
   echo '<center><font color="#FF0000">O ID do computador não pode ficar em branco!</font>';
   $erro++; }
   
if($erro==0){
#//insere no banco de dados se tudo for OK
   $i=mysql_query("INSERT INTO servicos (id_servico, idcomputador, problema, prioridade, datainicial, descricao, situacao, procedimento) VALUES ('','$idcomputador','$problema','$prioridade','$datainicial', '$descricao', '$situacao', '$procedimento')")
    or die( mysql_error());
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=cadastro_servico.php'>
		  <script type=\"text/javascript\">
		  alert(\"Cadastro efetuado com sucesso.\");
		  </script>";
}

?>


