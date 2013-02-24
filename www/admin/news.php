<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; utf-8">
</head>


<?php
            if(!defined("IN_ADMIN")) die; 
?>

<a href="index.php">скайп</a>
<a href="index.php?place=news">Новости</a>
<a href="index.php?place=logout">Выйти</a>

<br><br>


<?php 
$hnk=mysql_connect('psihol04.mysql.ukraine.com.ua', 'psihol04_user1', 'ubivakus')  or die('Error');
mysql_select_db("psihol04_db", $hnk) or die ("error");
$resultik=mysql_query("SELECT * FROM news ORDER BY news.order ASC");
$data = mysql_fetch_row($resultik);
$count = 1;
while($data){
    $str = str_replace("ЫЫ","И",$data[1]);
    echo "<table style='width: 100%; border: 1px solid black; text-align: center;'  >";
    echo "<div bgcolor='blue'> <tr><td>Текст</td><td>порядок</td><td>Удалить</td></tr></div>";
    echo "<tr>";
    echo " <td width=40%><div style='border-right: 1px solid black; text-align: left;'>  ".$str."</div></td>";
    echo " <td width=40%>".$data[2]."</td>";
   
    echo "<td width=20%><a href='index.php?place=delete_news&id=".$data[0]."'> delete </a></td>";
    echo "</tr> </table> <br><br>";
   
    
    $count++;
    $data=mysql_fetch_row($resultik);
}
?>

    <form action = "" method = "post" name = "newsForm">
    <table style="vertical-align: top;">
        <tr>
            <td>Текст</td>
            <td>порядок</td>
        </tr>
        <tr>
            <td><textarea cols="100" rows="8" name="news_text">
            </textarea>
            <td><input name = "order"  type = "text"/></td>
        </tr>
        <tr>
            <td><input name = "submit"  type = "submit"/></td>
            <td><a href="index.php?place=news">ОБНОВИТЬ</a></td>
        </tr>
    </table>
</form>
<?php

if ($_POST['submit']) {
    $text = $_POST['news_text'];
    $order = $_POST['order'];
    $resultikw=mysql_query("INSERT INTO news (news.text, news.order) VALUES ('".$text."', '".$order."')");
    header("Location: index.php?place=news");
    }

?>
</html>