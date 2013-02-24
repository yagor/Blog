<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv = "middle_container-Type" middle_container = "text/html; charset=windows-1251">
<title>Центр развития личности "Психолог и Я"</title>
<link href = "resources/css/style.css" rel = "stylesheet" type = "text/css">
</head>
<body>
<div id = "container">
  <div id = "header">
    <div id = "logo"> <img src = "resources/image/logo.png" width = "180" height = "130"/> </div>
    <h1>Центр развития личности "Психолог и Я"</h1>
    <div id = "main_menu">
      <?
                    include ("templates/MainMenu.php");
                    ?>
      <?php
                    $menu=new MainMenu();
                    echo $menu->getMenu();
                    ?>
    </div>
  </div>
  <div id = "middle_container">
    <div id = "left">
      <div id = "leftMenu">
        <table>
          <tr>
            <td height = "40px"><a href = "news.php">Новости</a> </td>
          </tr>
        </table>
      </div>
      <div id = "mainLeftInfo">
        <div id = "mainLeftInfoQuote"> Время жизни — это шанс выразить пребывание здесь самым рискованным, самым творческим
          способом, который доступен твоему воображению. </div>
        <div id = "mainLeftInfoImg"> </div>
        <div id = "mainLeftInfoQuote"> В нашей работе мы используем следующие методы современной психотерапии: </div>
        <div id = "mainLeftInfoList">
          <ul>
            <li>Гештальт-терапия</li>
            <li>Семейная системная терапия</li>
            <li>Арт-терапия</li>
            <li>Песочная терапия</li>
            <li>Символдрама</li>
            <li>Работа с метафорическими картами</li>
          </ul>
        </div>
      </div>
    </div>
    <div id = "main_content">
      <div id = "mainContentTitle"> «Я» - это осознание человеком самого себя, своих желаний и потребностей. </div>
      <div id = "mainContentTitle"> «Я» - это явление принципиально не исчерпывающееся. </div>
      <div id = "mainContentTitle"> «Я» - это развитие активных жизненных сил, раскрытие потенциала личности. </div>
      <br/>
      <br/>
      <br/>
      <div id = "mainContentContacts">
        
      </div>
      <div id = "mainContentText">

          <?php
          $hnk=mysql_connect('psihol04.mysql.ukraine.com.ua', 'psihol04_user1', 'ubivakus')  or die('Error');
          mysql_select_db("psihol04_db", $hnk) or die ("error");
          $resultik=mysql_query("SELECT * FROM news ORDER BY news.order ASC");
          $data = mysql_fetch_row($resultik);
          while($data){
              $str = str_replace("ЫЫ","И",$data[1]);
              echo "<div>".$str."</div><br>";
              $data=mysql_fetch_row($resultik);
          }
          ?>
      </div>
    </div>
    <div id = "clear"> </div>
  </div>
  <div id = "clear"> </div>
  <div id = "footer"> </div>
</div>
</body>
</html>
