<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv = "middle_container-Type" middle_container = "text/html; charset=windows-1251">
<title>Расписание</title>
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
                    include ("templates/InfoLeftMenu.php");
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
      <div id = "mainContentTitleBold"> Расписание </div>
      <br/>
      <div id = "mainContentText" >
        <div id="schedule">
          <table cellpadding="0" cellspacing="0">
            <tr>
              <td width="10px" align="center" style="color: blue; font-weight: bold;"></td>
              <td width="50%" align="center" style="color: blue; font-weight: bold;"> Направления </td>
              <td width="23%" align="center" style="color: blue; font-weight: bold;"> Дни недели </td>
              <td width="20%" align="center" style="color: blue; font-weight: bold;"> Время работы </td>
            </tr>
            <tr>
              <td style="color: blue;"> 1 </td>
              <td> Творческая арт-мастерская "Тропинка к  своему Я" (Групповая коррекционная работа с детьми 4-12 лет) </td>
              <td> суббота:   4-6 лет
                четверг:   4-6 лет
                суббота:  7-12 лет
                среда, пятница: от 1 года до 3 лет </td>
              <td> 09.30-10.00
                16.30- 17.30
                11.00-13.00
                
                10.00-11.00 </td>
            </tr>
            <tr>
              <td style="color: blue;"> 2 </td>
              <td> Родительский клуб «Осознанное родительство»
                Подготовка к родам </td>
              <td> суббота 
                (по желанию группы) </td>
              <td> 11.00-13.00 </td>
            </tr>
            <tr>
              <td style="color: blue;"> 3 </td>
              <td> Арт-терапия для всех: рисунок, работа со сном, маски, сказкотерапия, куклы, мандалы, марионетки, глина, песок, метафорические карты. </td>
              <td> среда </td>
              <td> 18.30-20.30 </td>
            </tr>
            <tr>
              <td style="color: blue;"> 4 </td>
              <td> Мастерская развития личности  «Статус»
                Риторика и актерское мастерство. </td>
              <td> суббота </td>
              <td> 13.30 -15.30 </td>
            </tr>
            <tr>
              <td style="color: blue;"> 5 </td>
              <td> Психологический клуб  «В пространстве любви» - женско-мужские взаимоотношения. </td>
              <td> пятница </td>
              <td> 18.00-20.00 </td>
            </tr>
            <tr>
              <td style="color: blue;"> 6 </td>
              <td> Тренинги, семинары, обучающие программы </td>
              <td> по мере формирования групп. </td>
              <td></td>
            </tr>
            <tr>
              <td style="color: blue;"> 7 </td>
              <td> Индивидуальное консультирование </td>
              <td> понедельник, вторник, среда, пятница </td>
              <td> 9.00-16.00 (20.00) </td>
            </tr>
          </table>
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
