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
        
  

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/1.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/1.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/2.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/2.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/3.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/3.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/4.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/4.jpg" alt="" width="100" height="75" /></a>
        <br /><br />
  

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/5.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/5.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/6.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/6.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/7.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/7.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/8.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/8.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/9.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/9.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/10.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/10.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/11.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/11.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/12.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/12.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/13.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/13.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/14.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/14.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/15.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/15.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/16.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/16.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/17.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/17.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/18.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/18.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/19.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/19.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/20.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/20.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/21.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/21.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/22.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/22.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/23.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/23.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/24.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/24.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/25.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/25.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/26.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/26.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/27.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/27.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/28.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/28.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/29.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/29.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/30.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/30.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/31.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/31.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/32.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/32.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/33.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/33.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/34.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/34.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/35.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/35.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/36.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/36.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/37.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/37.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/38.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/38.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/39.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/39.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/40.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/40.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/41.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/41.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/42.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/42.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/43.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/43.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/44.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/44.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/45.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/45.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/46.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/46.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/47.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/47.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/48.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/48.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/49.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/49.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/50.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/50.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/51.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/51.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/52.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/52.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/53.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/53.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/54.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/54.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/55.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/55.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/56.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/56.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/57.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/57.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/58.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/58.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/59.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/59.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/60.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/60.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/61.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/61.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/62.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/62.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/63.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/63.jpg" alt="" width="100" height="75" /></a>
        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/64.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/64.jpg" alt="" width="100" height="75" /></a>
        <br /><br />

        <a rel="example_group" href="resources/image/foto/adult/art2011/foto/65.jpg" title=""><img src="resources/image/foto/adult/art2011/logo/65.jpg" alt="" width="100" height="75" /></a>
        
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
