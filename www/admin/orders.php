<?php
            if(!defined("IN_ADMIN")) die; 
?>

<a href="index.php">скайп</a>
<a href="index.php?place=news">Новости</a>
<a href="index.php?place=logout">Выйти</a>
<br>
<br>


<?php 
$hnk=mysql_connect('psihol04.mysql.ukraine.com.ua', 'psihol04_user1', 'ubivakus')  or die('Error');
mysql_select_db("psihol04_db", $hnk) or die ("error");
$resultik=mysql_query("SELECT * FROM skype  ORDER BY created DESC");



$data = mysql_fetch_row($resultik);
$count = 1;
while($data){
    echo '<br><br><br><h1>Сообщение №'.$count.'</h1>';
    echo "<table width='90%' border='1' >";
    echo "<div bgcolor='blue'> <tr><td>Текст</td><td>Дата</td><td>Удалить</td></tr></div>";
    echo "<tr>";
    echo " <td>  ".$data[1]."</td>";
    echo " <td>".$data[2]."</td>";
   
    echo "<td><a href='index.php?place=delete_order&id=".$data[0]."'> delete </a></td>";
    echo "</tr>";
   
    
    $count++;
    $data=mysql_fetch_row($resultik);
          
}
