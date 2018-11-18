<?php $db = mysql_connect(':/Applications/MAMP/tmp/mysql/mysql.sock', 'Dasha', 'dasha');
$selected = mysql_select_db('News',$db);
mysql_set_charset("utf8");  
?>