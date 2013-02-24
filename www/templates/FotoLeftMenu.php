<?php
class InfoLeftMenu {
    private  $menu = ' <table>
            <tr>
                <td height="40px">
                    <a href="photo.php">Взрослые</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="photo_kids.php">Дети</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="photo_teens.php">Подростки</a>
                </td>
            </tr>
           
        </table>';
    
    public function getMenu() {
        return $this->menu;
    }
}
?>