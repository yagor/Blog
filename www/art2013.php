<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv = "middle_container-Type" middle_container = "text/html; charset=windows-1251">
<title>Родители и Дети</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script>
        !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
    </script>
    <script type="text/javascript" src="lib/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="lib/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="lib/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<link href = "resources/css/style.css" rel = "stylesheet" type = "text/css">
<script type="text/javascript">
        $(document).ready(function() {
            /*
            *   Examples - images
            */

            $("a#example1").fancybox();

            $("a#example2").fancybox({
                'overlayShow'    : false,
                'transitionIn'    : 'elastic',
                'transitionOut'    : 'elastic'
            });

            $("a#example3").fancybox({
                'transitionIn'    : 'none',
                'transitionOut'    : 'none'    
            });

            $("a#example4").fancybox({
                'opacity'        : true,
                'overlayShow'    : false,
                'transitionIn'    : 'elastic',
                'transitionOut'    : 'none'
            });

            $("a#example5").fancybox();

            $("a#example6").fancybox({
                'titlePosition'        : 'outside',
                'overlayColor'        : '#000',
                'overlayOpacity'    : 0.9
            });

            $("a#example7").fancybox({
                'titlePosition'    : 'inside'
            });

            $("a#example8").fancybox({
                'titlePosition'    : 'over'
            });

            $("a[rel=example_group]").fancybox({
                'transitionIn'        : 'none',
                'transitionOut'        : 'none',
                'titlePosition'     : 'over',
                'titleFormat'        : function(title, currentArray, currentIndex, currentOpts) {
                    return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                }
            });

            /*
            *   Examples - various
            */

            $("#various1").fancybox({
                'titlePosition'        : 'inside',
                'transitionIn'        : 'none',
                'transitionOut'        : 'none'
            });

            $("#various2").fancybox();

            $("#various3").fancybox({
                'width'                : '75%',
                'height'            : '75%',
                'autoScale'            : false,
                'transitionIn'        : 'none',
                'transitionOut'        : 'none',
                'type'                : 'iframe'
            });

            $("#various4").fancybox({
                'padding'            : 0,
                'autoScale'            : false,
                'transitionIn'        : 'none',
                'transitionOut'        : 'none'
            });
        });
    </script>
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
                    include ("templates/FotoLeftMenu.php");
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
      <div id = "mainContentTitleBold">
      </div>
    
      <br/>
      <div id = "mainContentText" style="clear: both;">
         <p id="foto" style="text-align: center; ">
        
  

        <a rel="example_group" href="resources/image/foto/art_adult2013/000001.jpg" title=""><img src="resources/image/foto/art_adult2013/000001.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/art_adult2013/000002.jpg" title=""><img src="resources/image/foto/art_adult2013/000002.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/art_adult2013/000003.jpg" title=""><img src="resources/image/foto/art_adult2013/000003.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/art_adult2013/000004.jpg" title=""><img src="resources/image/foto/art_adult2013/000004.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

             <a rel="example_group" href="resources/image/foto/art_adult2013/000005.jpg" title=""><img src="resources/image/foto/art_adult2013/000005.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000006.jpg" title=""><img src="resources/image/foto/art_adult2013/000006.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000007.jpg" title=""><img src="resources/image/foto/art_adult2013/000007.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000008.jpg" title=""><img src="resources/image/foto/art_adult2013/000008.jpg" alt="" width="100" height="75" /></a>
             <br /><br />

             <a rel="example_group" href="resources/image/foto/art_adult2013/000009.jpg" title=""><img src="resources/image/foto/art_adult2013/000009.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000010.jpg" title=""><img src="resources/image/foto/art_adult2013/000010.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000011.jpg" title=""><img src="resources/image/foto/art_adult2013/000011.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000012.jpg" title=""><img src="resources/image/foto/art_adult2013/000012.jpg" alt="" width="100" height="75" /></a>
             <br /><br />

             <a rel="example_group" href="resources/image/foto/art_adult2013/000013.jpg" title=""><img src="resources/image/foto/art_adult2013/000013.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000014.jpg" title=""><img src="resources/image/foto/art_adult2013/000014.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000015.jpg" title=""><img src="resources/image/foto/art_adult2013/000015.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000016.jpg" title=""><img src="resources/image/foto/art_adult2013/000016.jpg" alt="" width="100" height="75" /></a>
             <br /><br />

             <a rel="example_group" href="resources/image/foto/art_adult2013/000017.jpg" title=""><img src="resources/image/foto/art_adult2013/000017.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000018.jpg" title=""><img src="resources/image/foto/art_adult2013/000018.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000019.jpg" title=""><img src="resources/image/foto/art_adult2013/000019.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000020.jpg" title=""><img src="resources/image/foto/art_adult2013/000020.jpg" alt="" width="100" height="75" /></a>
             <br /><br />

             <a rel="example_group" href="resources/image/foto/art_adult2013/000021.jpg" title=""><img src="resources/image/foto/art_adult2013/000021.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000022.jpg" title=""><img src="resources/image/foto/art_adult2013/000022.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000023.jpg" title=""><img src="resources/image/foto/art_adult2013/000023.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000024.jpg" title=""><img src="resources/image/foto/art_adult2013/000024.jpg" alt="" width="100" height="75" /></a>
             <br /><br />

             <a rel="example_group" href="resources/image/foto/art_adult2013/000025.jpg" title=""><img src="resources/image/foto/art_adult2013/000025.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000026.jpg" title=""><img src="resources/image/foto/art_adult2013/000026.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000027.jpg" title=""><img src="resources/image/foto/art_adult2013/000027.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000028.jpg" title=""><img src="resources/image/foto/art_adult2013/000028.jpg" alt="" width="100" height="75" /></a>
             <br /><br />

             <a rel="example_group" href="resources/image/foto/art_adult2013/000029.jpg" title=""><img src="resources/image/foto/art_adult2013/000029.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000030.jpg" title=""><img src="resources/image/foto/art_adult2013/000030.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000031.jpg" title=""><img src="resources/image/foto/art_adult2013/000031.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000032.jpg" title=""><img src="resources/image/foto/art_adult2013/000032.jpg" alt="" width="100" height="75" /></a>
             <br /><br />

             <a rel="example_group" href="resources/image/foto/art_adult2013/000033.jpg" title=""><img src="resources/image/foto/art_adult2013/000033.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000034.jpg" title=""><img src="resources/image/foto/art_adult2013/000034.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000035.jpg" title=""><img src="resources/image/foto/art_adult2013/000035.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000036.jpg" title=""><img src="resources/image/foto/art_adult2013/000036.jpg" alt="" width="100" height="75" /></a>
             <br /><br />

             <a rel="example_group" href="resources/image/foto/art_adult2013/000037.jpg" title=""><img src="resources/image/foto/art_adult2013/000037.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000038.jpg" title=""><img src="resources/image/foto/art_adult2013/000038.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000039.jpg" title=""><img src="resources/image/foto/art_adult2013/000039.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000040.jpg" title=""><img src="resources/image/foto/art_adult2013/000040.jpg" alt="" width="100" height="75" /></a>
             <br /><br />

             <a rel="example_group" href="resources/image/foto/art_adult2013/000041.jpg" title=""><img src="resources/image/foto/art_adult2013/000041.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000042.jpg" title=""><img src="resources/image/foto/art_adult2013/000042.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000043.jpg" title=""><img src="resources/image/foto/art_adult2013/000043.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000044.jpg" title=""><img src="resources/image/foto/art_adult2013/000044.jpg" alt="" width="100" height="75" /></a>
             <br /><br />

             <a rel="example_group" href="resources/image/foto/art_adult2013/000045.jpg" title=""><img src="resources/image/foto/art_adult2013/000045.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000046.jpg" title=""><img src="resources/image/foto/art_adult2013/000046.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000047.jpg" title=""><img src="resources/image/foto/art_adult2013/000047.jpg" alt="" width="100" height="75" /></a>
             <a rel="example_group" href="resources/image/foto/art_adult2013/000048.jpg" title=""><img src="resources/image/foto/art_adult2013/000048.jpg" alt="" width="100" height="75" /></a>
             <br /><br />


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
