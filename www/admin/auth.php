<?php
     
if(!defined("IN_ADMIN")) die;  


session_start();  
// Помещаем содержимое файла в массив  
$access = array();  
$access = file("access.php");  
// Разносим значения по переменным – пропуская первую строку файла - 0  
$login = trim($access[1]);  
$passw = trim($access[2]);  
// Проверям были ли посланы данные  
if(!empty($_POST['enter']))  
{  
        $_SESSION['login'] = $_POST['login'];  
        $_SESSION['passw'] = $_POST['passw'];  
}  

// Если ввода не было, или они не верны  
// просим их ввести  
if(empty($_SESSION['login']) or  
   $login != $_SESSION['login'] or  
   $passw != $_SESSION['passw']    )  

{  
   ?>       
   <table>
     <tr>
     
     <form action=index.php method=post>  
     
     <td>
     Логин <input class=input name=login value="">  
     </td>
     </tr>
     <tr>
     <td>
     Пароль <input class=input name=passw value="">  
     </td>
     
     <input type=hidden name=enter value=yes>  
     
     </tr>
         <input class=button type=submit value="Вход">  
     
     </table>
   <?php  
   die;  
}  
?>
