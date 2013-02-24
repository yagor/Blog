<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv = "middle_container-Type" middle_container = "text/html; charset=windows-1251">
<title>В пространстве любви</title>
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
      <div id = "mainContentTitleBold">Психологический клуб «В пространстве любви» </div>
      <br/>
      <div id = "mainContentText"> <img src = "resources/image/love1.png" style = "float: right;"/>
        <p><b>Какую историю мы бы не придумали, в ней всегда будут МУЖЧИНА И ЖЕНЩИНА и их отношения. В
          чем разница между мужчинами и женщинами? Почему мужчины и женщины мыслят по-разному? Что
          должна знать каждая женщина о мужчинах, что должен знать каждый мужчина о женщинах? Обо всем
          этом и не только - в нашем клубе для тех, кому от 16… и старше.</b></p>
        <p><b>Цель:</b> вы узнаете о секретах взаимоотношений Мужчин и Женщин, увидите , что вы можете
          делать по-новому. Вы найдете новые мотивы для новых поступков, которые укрепят существующие
          отношения, вы научитесь лучше слышать и понимать любимых, друзей, детей, партнеров, коллег.</p>
        <iframe style="float: right;" width="380" height="250" src="http://www.youtube.com/embed/qHgOOm8kjoM?feature=player_embedded" frameborder="0" allowfullscreen></iframe>
        <p><b>Темы: </b></p>
        <div id = "listMargin"> 1. Счастье на двоих. <br>
          2. Мир мужчин и мир женщин. <br>
          3. Твоя сексуальность. <br>
          4. «Моя половинка». <br>
          5. С чем едят конфликт. Попробуем договориться. <br>
          6. Роли мужчин и женщин в семье. <br>
          7. Счастливые родители – счастливые дети. <br>
          8. Слушать и слышать. <br>
          9. Измены. Почему? <br>
          10. Кризисы отношений. Грамотно пережить. </div>
        <p><b>Направления работы:</b></p>
        <div id = "listMargin"> - Арт-терапия <br>
          - Гештальт-подход. <br>
          - Телесно-ориентированный подход.
          <iframe style="float: right;" width="380" height="250" src="http://www.youtube.com/embed/qTd-DGtp42M?feature=player_embedded" frameborder="0" allowfullscreen></iframe>
        </div>
        <p><b>Ведущие авторской программы:</b><br>
          Криворучко Елена Васильевна  - психолог, арт-терапевт, гештальт-терапевт.<br>
          Дирявка Ирина Ивановна – психолог, арт-терапевт, гештальт-терапевт. </p>
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
