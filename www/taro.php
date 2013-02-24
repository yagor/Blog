<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv = "middle_container-Type" middle_container = "text/html; charset=windows-1251">
<title>карты ТАРО</title>
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
      <div id = "mainContentTitleBold">Семинар-тренинг
        «Анализ символики духовных традиций– использование экзистенциальных символов старших арканов ТАРО в работе по технике символдрамы». </div>
      <br>
      <div style="text-align: center; color: red;"> На семинар приглашаются все желающие!</div>
      <br/>
      <div id = "mainContentText"> <img src = "resources/image/taro1.png" style = "float: right;"/>
        <p>ТАРО – это уникальная, древняя система знаний о мире и человеке. К изучению и использованию ТАРО в психотерапии обращались многие известные психотерапевты. К.Г.Юнг считал, что ТАРО отражает важнейшие архетипы коллективного бессознательного и позволяет получить прямой доступ к его энергиям и силам. </p>
        <p>
        <div id="blue"> В программе курса направления:</div>
        <p>Семинар знакомит с возможностью использования символики духовных традиций в психотерапии по методу символдрамы. Участники смогут проследить соответствие сюжетов ТАРО содержанию коллективного бессознательного; познакомятся с понятиями архетип и миф; с архетипами Анимы (карта Верховная жрица); Великой Матери (карта Императрица); архетипом Анимуса и эдипальной проблематикой (Император); Духовного Отца, Учителя, Наставника, работой со Сверх-Я (карта Иерофант); узнают, как можно прорабатывать проблемы партнёрских отношений, работа с Анимой и Анимусом  (карта Влюблённые).</p>
        <p>Семинар включает 7 встреч, рассматриваются как теоретическая часть, так и практические упражнения. На каждом семинаре  участники знакомятся по 3 карты старших Арканов.</p>
        <br>
        <div style="text-align: center; color: red; font-weight: bold;"> Внимание! На семинаре не рассматриваются мантические (гадательные) аспекты.</div>
        <div style="text-align: center; ">(либо по индивидуальному запросу)</div>
        </p>
        Программу ведут: <br>
        <span id="blue">Дирявка Ирина </span>- психолог, гештальт-терапевт(II ступень), арт-терапевт, сертификат по картам ТАРО международной организации символдрамы, опыт психологической практики - 7 лет. <br>
        <span id="blue">Криворучко Елена </span>– психолог, гештальт-терапевт (II ступень), арт-терапевт, телесно-ориентированному подходу,опыт психологической практики – 12 лет.<br>
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
