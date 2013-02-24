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
      <div id = "mainContentTitleBold">Обучающий семинар 
        «Помощник руководителя». </div>
      <div style="text-align: center;"> (68 часов)
        <div id="blue">Мастерская развития личности "Статус"
          (от 16 и ... старше) </div>
      </div>
      <br/>
      <div id = "mainContentText"> <img src = "resources/image/status.png" style = "float: left;"/>
        <div id = "listMargin" style="font-size: 18px; font-weight: bold;"> •    Как реализовать талант? <br>
          •    Моя цель - карьера! <br>
          •    Управление будущим! <br>
          •    Твоя жизнь – твой выбор! </div>
        <div id="blue" style="font-size: 16px; font-weight: bold;">10 шагов к успешной карьере:</div>
        <div id = "listMargin" style="font-size: 16px; font-weight: bold; font-style: italic;"> 1.    Основы менеджмента<br>
          2.    Основы управления персоналом<br>
          3.    Оcновы маркетинга<br>
          4.    Психология рекламы<br>
          5.    Психология общения<br>
          6.    Основы делопроизводства<br>
          7.    Кадровое законодательство<br>
          8.    Ораторское искусство<br>
          9.    Риторика, культура речи <br>
          10.    Актерское мастерство </div>
        <p><span id="blue">По желанию дополнительно: деловой украинский и английский языки. А также Встречи с интересными людьми, путешествия по Украине и многое другое…</span></p>
        <p style="font-weight: bold;"><ins>После окончания семинаров каждый участник получит: </ins> <br>
          • обучающие материалы; <br>
          • сертификат «Помощник руководителя» </p>
        <p>
        <div id="blue"><ins>Программу ведут:</ins><br>
          Сальникова Оксана – режиссер-педагог. <br>
          Ирина Дирявка - HR-менеджер, практический психолог, гештальт-терапевт. </div>
        </p>
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
