<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv = "middle_container-Type" middle_container = "text/html; charset=windows-1251">
<title>Дед мороз с подарками</title>
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
      <?
                    include ("templates/ParentsLeftMenu.php");
                    ?>
      <?php
                    $menu = new MainMenu();
                    echo $menu->getMenu();
                    ?>
    </div>
  </div>
  <div id = "middle_container">
    <div id = "left">
      <div id = "leftMenu">
        <?php
                        $leftMenu=new InfoLeftMenu();
                        echo $leftMenu->getMenu();
                        ?>
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

      <div id = "mainContentText">  <img src = "resources/image/santa.png"  width="400"  style="float: right;"/>
          <div id="blueAndItalic" style="font-size: 16px">
          Кто пришел? Что принес?<br>
          Знаю я –  Дед Мороз!<br>
          Говорят, под Новый Год,<br>
          что не пожелается<br>
          Все всегда произойдет,<br>
          все всегда сбывается!<br>
          Могут даже у ребят<br>
          сбыться все желания<br>
          Нужно только,  говорят,<br>
          приложить старания! </div>    С.Михалков
          <br>
          <br>
          <div style="color: red; font-weight: bold; font-size: 20px;">   Дорогие, папы и мамы!</div>


         <p> Я действительно самая настоящая Снегурочка, внучка настоящего Деда Мороза! А по совместительству еще и личный секретарь моего любимого Дедушки. Если Ваши соседи, родственники, друзья, сослуживцы задают вопрос : - Как найти и пригласить Деда Мороза и Снегурочку на дом, в детский сад, в школу, в офис - отправляйте их смело ко мне. Я смогу быстро откорректировать наш с Дедушкой график поездок.</p>
          <br>
          <iframe width="540" height="360" src="http://www.youtube.com/embed/hH-Wr6soEZc?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
          <br>
          <div style="color: red; font-weight: bold; font-size: 20px;"> Приемная : 097-390-42-27; 095-243-29-95 </div>
      </div>
  <div id = "clear"> </div>
</div>
<div id = "clear"> </div>
<div id = "footer"> </div>
</div>
</body>
</html>
