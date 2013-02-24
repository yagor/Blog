<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv = "middle_container-Type" middle_container = "text/html; charset=windows-1251">
<title>Менеджер по персоналу</title>
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
                    include ("templates/ForSpecialistsLeftMenu.php");
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
                       
                        //                        echo $leftMenu->getMenu();
                        ?>
              <img src = "resources/image/email.gif" width = "160" height = "62"/>            
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
  <div id = "mainContentTitleBold">Скайп-помощь </div>
  <br/>
  <div id = "mainContentText">
    <p>Современный психолог использует различные средства связи. Максимальный эффект, конечно,
      дают те виды общения, которые наиболее близки к личной встрече. <span id = "blue">Скайп</span> является наиболее приемлемым вариантом для тех, кто живет в другом городе или в другой стране.
      К тому же, скайп – это один из самых мобильных видов встречи в наше время. </p>
    <div id = "blue"><ins>Важно:</ins> </div>
    <div id = "blue">ЧТО НУЖНО ДЛЯ КОНСУЛЬТИРОВАНИЯ ПО СКАЙПУ: </div>
    <div id = "listMargin">• Ваше желание разобраться в тревожащей Вас ситуации. <br>
      • Компьютер, подключенный к Интернету. <br>
      • Программа Skype, установленная на компьютере. Ее можно скачать с сайта <a href = "http://www.skype.com/">www.skype.com</a>, следуя пошаговым инструкциям. <br>
      • Видеокамера на Вашем компьютере желательно должна быть максимально современной, чтобы
      Вас было хорошо видно, Интернет – быстрым, освещение – достаточным. <br>
      • Первая встреча в Скайпе – для знакомства и обсуждения организационных и технических
      вопросов на 15-20 минут – оплаты не требует. <br>
      • Записаться на <span id = "blue">он-лайн консультацию</span> с помощью скайпа можно,
      написав мне личное сообщение через форму для контакта (см. ниже), кратко описав проблему и
      указав свое имя в скайпе. <br>
      • Вопросы оплаты скайп-консультации обсуждаются по e-mail: treningkurs@ukr.net. <br>
      Ваше имя (обязательно) </div>
    <form action = "" method = "post" name = "fkypeForm">
      <table>
        <tr>
          <td>Имя:</td>
          <td><input name = "name" type = "text" required placeholder='Ваше имя'/></td>
        </tr>
        <tr>
          <td>e-mail:</td>
          <td><input name = "email" type='email' required placeholder='Ваш email'/></td>
        </tr>
       
        <tr>
          <td>Тема</td>
          <td><input name = "them" type = "text" required placeholder='Тема письма'/></td>
        </tr>
      </table>
      <table>
        <tr>
          <td>Текст сообщения</td>
        </tr>
        <tr>
          <td><textarea name = "message" cols = "50" rows = "20" required placeholder='текст сообщения'></textarea></td>
        </tr>
        <tr>
          <td><input name = "submit"  type = "submit"/></td>
        </tr>
      </table>
    </form>
    <?php      
    $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type:  text/html; charset=iso-8859-1' . "\r\n";
$hnk=mysql_connect('psihol04.mysql.ukraine.com.ua', 'psihol04_user1', 'ubivakus')  or die('Error');
mysql_select_db("psihol04_db", $hnk) or die ("error");

                                         
                                          $message =  'Тема: ' . $_POST['them']. '<br>' .  'Имя: ' . $_POST['name'] . '<br>' . 'email: ' . $_POST['email']
                                                                  . '<br>' . '<br>' . '<br>' . $_POST['message'] ;

                        if ($_POST['submit']) {
                            $isMailed = mail("mira_divo@mail.ru", "SKYPE HELP", "New Message was added", $headers);
                            mail("treningkurs@ukr.net", "SKYPE HELP", "New Message was added", $headers);
                            $resultik=mysql_query("INSERT INTO skype (message) VALUES ('$message') ");
                            if($isMailed) {
                                echo 'Ваше сообщение успешно отправлено' ;
                            } else {
                                echo 'Не удалось отправить';
                            }
                        }
                        
//$resultik=mysql_query("SELECT * FROM skype");
//$data=mysql_fetch_row($resultik);
// while($data){
//    echo "<tr>";
//    echo " <td>  ".$data[1]."</td>";
// 
// 
//    echo "</tr>";
//    $data=mysql_fetch_row($resultik);
//     
//}
                        ?>
    <div id = "clear"> </div>
  </div>
  <div id = "clear"> </div>
  <div id = "footer"> </div>
</div>
</body>
</html>
