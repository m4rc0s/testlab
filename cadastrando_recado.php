<?php
include("config.php");

$nome=$_POST['nome'];
$assunto=$_POST['assunto'];
$destinatario=$_POST['destinatario'];
$data=$_POST['data'];
$texto=$_POST['texto'];



#//retirando espaços
   $nome=trim($nome);
   $assunto=trim($assunto);
   $destinatario=trim($destinatario);
   $data=trim($data);
   $texto=trim($texto);
      
$erro=0;

   
#//encontrar números
   if( ereg("[0-9()-.,:;*&¬!?|+}{/]", $nome) ){
   echo '<center><font color="#FF0000">Nome incorreto!</font>';
   $erro++; }
   
  
#//verificar se campo nome foi setado
   if(empty($nome)){
   echo '<center><font color="#FF0000">O campo nome não pode ficar em branco!</font>';
   $erro++; }


if($erro==0){
#//insere no banco de dados se tudo for OK
   $i=mysql_query("INSERT INTO recado (id_recado, nome, assunto, destinatario, data, texto) VALUES ('','$nome','$assunto','$destinatario','$data', '$texto')")
    or die( mysql_error());  
   include ("recados.php");
   echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=recados.php'>
		  <script type=\"text/javascript\">
		  alert(\"Recado enviado.\");
		  </script>";
}
?>