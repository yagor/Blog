<?php
class InfoLeftMenu {
    private  $menu = ' <table>
            <tr>
                <td height="40px">
                    <a href="ourPsihologists.php">Наши педагоги</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="info.php">Этический кодекс психолога</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="contract.php">Договор</a>
                </td>
            </tr>
             <tr>
                <td height="40px">
                    <a href="schedule.php">Расписание</a>
                </td>
            </tr>
        </table>';
    
    public function getMenu() {
        return $this->menu;
    }
}
?>