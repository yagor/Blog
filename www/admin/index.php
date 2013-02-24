<?php
      // Указываем что данный файл главный, 
// определяя константу IN_ADMIN, так как 
// нигде больше эта константа не определяется, 
// но везде проверяется её существование, работать 
// с панелью администрирования можно только 
// через файл index.php 
define("IN_ADMIN", TRUE); 

// Проверяем права доступа 
include "auth.php"; 

// Получаем параметр op из URL 
$op = $_GET['place'];

// Выбираем нужное нам действие 
switch ($op) 
{ 
       
        case 'orders' : include "orders.php"; break;
        case 'news' : include "news.php"; break;
        case 'logout' : include "close.php"; break; 
        case 'delete' : include "delete.php"; break; 
        case 'delete_order' : include "delete.php"; break;
        case 'delete_news' : include "delete_news.php"; break;

        default :  include "orders.php"; 
}  
?>
