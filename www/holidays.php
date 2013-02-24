<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv = "middle_container-Type" middle_container = "text/html; charset=windows-1251">
<title>Родители и Дети</title>
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
                    $menu        =new MainMenu();
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
      <div id = "mainContentTitleBold">Проведение праздников. Прокат костюмов. </div>
      <br/>
      <div id = "mainContentText" >
        <p>Мы проводим праздники для деток от 3-х до 12-ти лет! </p>
        <p>Детские праздники с выездом на дом, в детский сад, в школу, в кафе, на природу. 
          Программа насыщена интерактивными играми и конкурсами, веселыми затеями. 
          Каждый ребенок, присутствующий на празднике, получает приз! 
          Наша программа проходит полностью под музыкальное сопровождение (персонажа сопровождает администратор программы, который озвучивает праздник). </p>
      </div>
      <div id = "mainContentText"> <b>Прокат костюмов для детей и взрослых:</b>
        <div id = "mainList">
          <ul>
            <li>к выпускным вечерам; </li>
            <li>свадебные, бальные, вечерние, праздничные платья;</li>
            <li>карнавальные костюмы; </li>
            <li>аксессуары, парики, маски.</li>
          </ul>
          <div style="font-size: 24px; color: blue; font-weight: bold;">Тел : 785-53-96</div>
          <img src = "resources/image/kids.png" width="700px"/><br>
        </div>
      </div>
    </div>
  </div>
  <div id = "clear"> </div>
</div>
<div id = "clear"> </div>
<div id = "footer"> </div>
</div>
</body>
</html>
