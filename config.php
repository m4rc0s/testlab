<?php
/*********************************
*   Tutorial :: Fazendo cadastros
*   Por: felipensp
**********************************/

# >> Defina o t�tulo do site
   $titulo="Cadastro";
   
# >> Dados do mySql
   $user="root"; # usu�rio do mySql
   $pass="vertrigo"; # senha do mySql
   $bd="servico"; # nome do banco de dados
   
# >> Conex�o
   @mysql_connect("localhost", $user, $pass);
   mysql_select_db($bd);
?>