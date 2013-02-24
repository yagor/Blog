<?php
class InfoLeftMenu {
    private  $menu = ' <table>
            <tr>
                <td height="40px">
                    <a href="forAdults.php">Индивидуальное консультирование</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="artTherapy.php">Арт-терапия для всех</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="status.php">Мастерская развития личности "Статус"</a>
                </td>
            </tr>
             <tr>
                <td height="40px">
                    <a href="career.php">Трудоустройство и планирование карьеры</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="inSpaceOfLove.php">Психологический клуб "В пространстве любви" от 16 и старше</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="rhetoric.php">Риторика Актерское мастерство</a>
                </td>
            </tr>
            <tr>
                <td height="40px">
                    <a href="taro.php">Символика ТАРО по методу символдраммы</a>
                </td>
            </tr>
        </table>';
    
    public function getMenu() {
        return $this->menu;
    }
}
?>