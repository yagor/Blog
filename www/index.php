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
          <div style="text-align: center; border: 1px solid black; color: yellow; background: none repeat scroll 0 0 #3399FF; border-radius: 5px 5px 5px 5px;">
            <?php
            echo $menu->getCount();

          ?>
          </div>
      </div>
    </div>

    <div id = "main_content">
        <div class="rightContainer">
            <div><h3>Новости</h3></div>
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
      <div id = "mainContentTitle"> «Я» - это осознание человеком самого себя, своих желаний и потребностей. </div>
      <div id = "mainContentTitle"> «Я» - это явление принципиально не исчерпывающееся. </div>
      <div id = "mainContentTitle"> «Я» - это развитие активных жизненных сил, раскрытие потенциала личности. </div>
      <br/>
      <br/>
      <br/>
      <div id = "mainContentContacts">
        <table>
          <tr>
            <td width = "230px"> 49094, г. Днепропетровск Набережная Победы, дом 5 тел. <b>097-390-42-27,
              095-243-29-98, 098-438-68-36</b> </td>
            <td><a href = "resources/image/map.jpg" target = "_blank"> <img src = "resources/image/logomap.jpg" width = "169" height = "62"
                                         alt = "Открыть карту"/> </td>
          </tr>
          <tr>
            <td><b>e-mail:</b> mira_divo@mail.ru treningkurs@ukr.net <a href = "http://psiholog-dnepr.narod2.ru">http://psiholog-dnepr.narod2.ru</a> </td>
            <td><img src = "resources/image/email.gif" width = "169" height = "62"/> </td>
          </tr>
        </table>
      </div>
      <div id = "mainContentText">
        <p>Основной целью центра «Психолог и Я» является популяризация психологии и психотерапии,
          профессиональное сопровождение и становление личности. Основные принципы, которыми мы
          руководствуемся в своей работе – это принятие уникальности и ценности каждого человека, это
          индивидуальный подход, уважение, конфиденциальность и твердое следование этическим нормам
          психолога. Мы верим в людей и знаем, что каждый человек талантлив и обладает собственной
          уникальной способностью к росту и изменениям.</p>
        <p>Работники центра молоды душой, активны, жизнерадостны и любят творческий подход. Мы открыты
          новым направлениям и готовы покорять новые горизонты и вершины!</p>
        <p>Спасибо вам за доверие к нашему профессиональному Я.</p>
      </div>

      <div id = "mainContentTitle"> Основные направления работы Психологического центра </div>
      <div id = "mainList">
        <ul>
          <li> Индивидуальное психологическое консультирование:
            <ol id = "olo">
              <li>взаимоотношения между мужчинами и женщинами (расставания и разводы, любовные
                треугольники);</li>
              <li>страхи, тревога, неврозы, комплексы;</li>
              <li>взаимоотношения детей и родителей;</li>
              <li>самореализация, личностный рост;</li>
              <li>возрастные кризисы, в т.ч и детские;</li>
              <li>депрессии, одиночество, поиск смысла жизни;</li>
              <li>повышение самооценки, успешности;</li>
              <li>заниженная самооценка, чувство неполноценности;</li>
              <li>проблемы профессионального самоопределения (потеря работы).</li>
            </ol>
          </li>
          <li> Семейное консультирование. </li>
          <li> Консультации детского психолога. </li>
          <li> Развивающие занятия для детей (от 4-х лет). </li>
          <li> Психологические тренинги. </li>
          <li> Обучающие программы «Менеджнр по пероналу», «Помощник руководителя», «Актерское<br>
            мастерство. Риторика». </li>
          <li> Обучающие семинары для психологов по гештальт-терапии, семейной системной терапии,<br>
            арт-терапии, психосоматике, «ТАРО в работе по технике символдрамы». </li>
          <li> Бизнес-тренинги. Коучинг. </li>
        </ul>
      </div>
      <div id = "mainContentTitle"> В нашем Центре соблюдается Этический Кодекс психотерапевта </div>
    </div>
    <div id = "clear"> </div>
  </div>
  <div id = "clear"> </div>
  <div id = "footer"> </div>
</div>
</body>
</html>
