<?php
class InfoLeftMenu {
    private  $menu = ' <table>
            <tr>
                <td height="40px">
                    <a href="manager.php">Менеджер по персоналу "Помощник руководителя"</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="gestalt.php">Подготовка гештальт-терапевтов</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="family_therapy.php">"Семейная терапия"</a>
                </td>
            </tr>
             <tr>
                <td height="40px">
                    <a href="artTherapy.php">"Арт-терапия"</a>
                </td>
            </tr>
        </table>';
    
    public function getMenu() {
        return $this->menu;
    }
}
?>