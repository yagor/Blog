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
      <div id = "mainContentTitleBold"> Этические стандарты психолога. </div>
      <div style = "font-weight: bold; font-style: italic; text-align: center;">(выдержки из общих
        принципов) </div>
      <br/>
      <div id = "mainContentText" style = "font-weight: bold;">
        <p>- «Психология как профессия управляется принципами, общими для всех профессиональных этик:
          уважение к личности, защита человеческих прав, ответственность», «честность по отношению к
          клиенту», «профессиональная компетентность».</p>
        <p>- «Психологи должны уважать религиозные и моральные убеждения своих клиентов». </p>
        <p>- «Психологи не должны использовать власть или превосходство по отношению к клиенту,
          которые дает их профессия, для извлечения прибыли или получения преимуществ, как для себя, так
          и для третьих лиц. </p>
        <p>- «Психологи не должны применять манипулятивные процедуры с целью добиться обращения к ним
          определенных клиентов, а также действовать таким образом, чтобы оказаться монополистами в
          своей области». </p>
        <p>- «Психолог не должен применять методы и процедуры, не прошедшие достаточной апробации в
          рамках современных научных знаний». </p>
        <p>- «Осуществляя вмешательство», «психолог должен предоставить необходимую информацию об
          основных решаемых проблемах, поставленных целях и используемых методах. В случае
          несовершеннолетних или юридически недееспособных лиц, родители или опекуны должны быть
          проинформированы». </p>
        <p>- «Следует поощрять способность клиента принимать решения на основе достаточной
          информации». </p>
        <p>- «Психологи не должны пользоваться властью, которую их статус может им дать, для
          требования особых условий или оплаты, превосходящей принятую в обычных обстоятельствах». </p>
        <p>- «Психологи не должны вмешиваться в действия, предпринятые другими специалистами». </p>
        <p>- «Психологи должны соблюдать особую осторожность в том, чтобы не вызвать необоснованных
          ожиданий, осуществить которые они впоследствии окажутся профессионально не способны». </p>
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