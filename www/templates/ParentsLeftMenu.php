<?php
class InfoLeftMenu {
    private  $menu = ' <table>
            <tr>
                <td height="40px">
                    <a href="parentsAndKids.php">Подготовка к родам</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="parentsClub.php">Родительский клуб</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="forKids.php">Клуб «Эрудит» (от 7 до 11 лет)</a>
                </td>
            </tr>
             <tr>
                <td height="40px">
                    <a href="holidays.php">Детские праздники, прокат костюмов</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="santa.php">Дед Мороз с подарками!</a>
                </td>
            </tr>
        </table>';
    
    public function getMenu() {
        return $this->menu;
    }
}
?>