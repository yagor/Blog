<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv = "middle_container-Type" middle_container = "text/html; charset=windows-1251">
<title>Риторика</title>
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
                    include ("templates/forAdultsLeftMenu.php");
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
      <div id = "mainContentTitleBold">Семинар-тренинг  «Риторика. Актерское мастерство» </div>
      <div style="text-align: center;"> (курс-64 часа) </div>
      <br/>
      <div id = "mainContentText">
        <p>
        <div id="blue"> В программе курса направления:</div>
        Риторика. Сценическая речь. Работа над голосом. Техника речи. Культура речи. Речевые дефекты. Дыхание. Сценическая пластика. Психологический и мышечный зажим. Работа над походкой. Мимика и мимическая культура. Смайлотерапия.
        Жест. Жестотерапия. Кинесический букварь. Работа над сценическим образом. Сценический страх и волнение. Искусство импровизации. Игровая терапия.
        <div id="blue">Обучение – в группах и индивидуально по любому вопросу в рамках проекта!</div>
        </p>
        <div id="blue">ПРОЕКТЫ </div>
        <div id = "listMargin" > 1. Имиджей в году <br>
          2.Самопрезентация. <br>
          3. Хочу все и сразу. <br>
          4. Негативный позитив и позитивный негатив. <br>
          5. Смехотерапия . <br>
          6. Домашний театр. <br>
          7. Говорим молча. <br>
          8. Пьеса на каждый день. </div>
        <div id="blue" style="font-size: 16px; font-weight: bold;">Обучение и работа в проектах после прохождения собеседования </div>
        <div id="blue" style="font-size: 16px; font-weight: bold;">Программу ведет  Сальникова Оксана – режиссер-педагог.  Тел. 0992708593</div>
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
