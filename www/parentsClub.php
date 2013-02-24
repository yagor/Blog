<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv = "middle_container-Type" middle_container = "text/html; charset=windows-1251">
<title>Родительский клуб</title>
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
        <div class="vk_block">
            <a href="http://vk.com/event49747358" target="_blank"> МЫ VKONTAKTE</a>
        </div>
      <div id = "mainContentTitleBold"> Родительский клуб «Осознанное родительство» </div>
      <br/>
      <div id = "mainContentText" > <img src = "resources/image/hands.png"  width="" alt = "Открыть карту" style="float: left;"/>
        <p>Основной целью нашего проекта является профессиональное психологическое сопровождение развития и воспитания ребенка, психологическая поддержка родителей.</p>
        <p>Наш клуб – это активные мамы и папы, а также малыши, которых объединяют принципы естественного и гармоничного развития. Основная задача клуба – общение и развитие наших детей, раскрытие внутреннего творческого потенциала, познание окружающего мира без излишних социальных ограничений, а также обмен полезным родительским опытом. 
          Встречи проходят в разнообразных формах – от простого общения, проведения праздников до консультаций специалистов по взращиванию детишек и познавательных лекций и тренингов. 
          Мы приглашаем Вас к открытому обсуждению существующих проблем, какими бы сложными они ни </p>
      </div>
      <div id = "mainContentText"> <b>Раз в неделю по субботам Вы можете:</b>
        <div id = "mainList">
          <ul>
            <li> обсудить все интересующие лично Вас вопросы воспитания своего ребёнка, </li>
            <li>прослушать лекции по разным темам детской психологии (темы встреч корректируются по запросу участников клуба), Нам важно, чтобы наша работа была интересна и полезна именно Вам</li>
            <li>пройти диагностику стиля родительского воспитания, используемого Вами </li>
            <li>общаться с другими родителями, узнать об их уникальном опыте воспитания детей</li>
            <li>принять участие в психологических тренингах ("тренинге эффективного родителя", тренинге личностного роста для родителей и т.д.) </li>
          </ul>
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
