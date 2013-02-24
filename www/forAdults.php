<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv = "middle_container-Type" middle_container = "text/html; charset=windows-1251">
<title>Индивидуальное консультирование</title>
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
      <div id = "mainContentTitleBold"> Психологическое консультирование </div>
      <br/>
      <div id = "mainContentText" style="clear: both;"> <img src = "resources/image/tree.png"  width="150"  style="float: left;"/>
        <p><span id="blueAndItalic">Психологическое консультирование (counselling)</span> - это внелечебная психологическая помощь, оказываемая специалистами здоровым людям с целью коррекции отношений и повышения качества жизни. <br>
          <span id="blue">Консультирование</span> - широко распространенный сегодня и один из основных инструментов в области интеллектуальных технологий. Консультативная практика применяется в любой сфере, где используются психологические знания: в организациях и управлении, в медицине и психотерапии, в педагогике и образовании, в кадровой и менеджерской работе. В настоящее время в каждой из этих областей накоплен значительный потенциал знаний и опыт практического использования различных техник консультирования, который может быть полезен для специалистов других сфер практики. знания, в той или иной мере применяется консультирование как одна из форм работы. </p>
        <p>Обратитесь с вашими проблемами к психологу ведь душевное спокойствие неотъемлемая часть здоровья:</p>
        - взаимоотношения между мужчинами и женщинами (расставания и разводы, любовные треугольники); <br>
        - страхи, тревога, неврозы, комплексы; <br>
        - взаимоотношения детей и родителей¸конфликты; <br>
        - возрастные кризисы, в т.ч и детские; <br>
        - повышение самооценки, успешности; <br>
        - заниженная самооценка, чувство неполноценности <br>
        - проблемы профессионального самоопределения (потеря работы). <img src = "resources/image/adults.png"  width="260"  style="float: right;"/>
        <p><span id="blueAndItalic">Детская психотерапия</span> - это вид психологической помощи детям и подросткам для решения самых разнообразных проблем, которые могут беспокоить как самих детей, так и их родителей.</p>
        <b>С чем обращаются к детскому психологу или психотерапевту? </b>
        <p><span id="blue">Причиной обращения могут быть:</span></p>
        - нарушения эмоционального состояния ребенка – частые изменения настроения, высокая тревожность, страхи, заикания, тики, энурез, нарушения сна; <br>
        - нарушения поведения – агрессивность, непослушание, истерики; <br>
        - проблемы обучения; <br>
        - трудности в общении со сверстниками; <br>
        - конфликтные отношения в семье, развод, потеря близких и т.д.
        <p>Первые встречи с детским психологом являются диагностическими и, как правило, проводятся совместно с родителями. После чего, с родителями обсуждается форма дальнейшей работы с ребенком. Это могут быть индивидуальные занятия с ребенком, совместные встречи с родителями, посещение детских или подростковых психотерапевтических групп.
          Вне зависимости от предложенной формы работы, фокус в детской психотерапии всегда направлен на ребенка с учетом его индивидуальных способностей и особенностей его психики. </p>
        <p><span id="blueAndItalic">Особенность детской психотерапии:</span> <span id="blue"> это сотрудничество и параллельная консультативная работа с родителями.</span></p>
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