<?php
/*********************************
*   Tutorial :: Fazendo cadastros
*   Por: felipensp
**********************************/

# >> Defina o título do site
   $titulo="Cadastro";
   
# >> Dados do mySql
   $user="root"; # usuário do mySql
   $pass="vertrigo"; # senha do mySql
   $bd="servico"; # nome do banco de dados
   
# >> Conexão
   @mysql_connect("localhost", $user, $pass);
   mysql_select_db($bd);
?>