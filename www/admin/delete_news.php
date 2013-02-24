<?php
   if(!defined("IN_ADMIN")) die; 
$hnk=mysql_connect('psihol04.mysql.ukraine.com.ua', 'psihol04_user1', 'ubivakus')  or die('Error');
mysql_select_db("psihol04_db", $hnk) or die ("error");
$resultik=mysql_query("DELETE FROM news WHERE news_id=".(int)$_GET[id]);
header("Location: index.php?place=news");
?>
