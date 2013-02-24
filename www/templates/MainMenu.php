<?php
class MainMenu {
	private  $menu = '<div class="mainMenu">
    <table>
        <tr>
            <td class="tdMenu" onmouseover="this.className=\'tdMenuExt\'" onmousedown="this.className=\'tdMenuExt\'" onmouseout="this.className=\'tdMenu\'">
                <a href="index.php">Главная</a>
                <table>
                    <tr>
                        <td>
                            <a href="news.php">Новости</a>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="tdMenu" onmouseover="this.className=\'tdMenuExt\'" onmousedown="this.className=\'tdMenuExt\'" onmouseout="this.className=\'tdMenu\'">
                <a href="info.php">О центре</a>
                <table>
                    <tr>
                        <td >
                            <a href="ourPsihologists.php">Наши педагоги</a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <a href="info.php">Этический кодекс психолога</a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <a href="contract.php">Договор</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="schedule.php">Расписание</a>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="tdMenu" onmouseover="this.className=\'tdMenuExt\'" onmousedown="this.className=\'tdMenuExt\'" onmouseout="this.className=\'tdMenu\'">
                <a href="parentsAndKids.php">Родители и дети</a>
                <table>
                    <tr>
                        <td>
                            <a href="parentsAndKids.php">Подготовка к родам</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a href="parentsClub.php">Родительский клуб</a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <a href="forKids.php">Клуб «Эрудит» (от 7 до 11 лет)</a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <a href="holidays.php">Детские праздники, прокат костюмов</a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <a href="santa.php">Дед Мороз с подарками!</a>
                        </td>
                    </tr>
                </table>
            </td >
            <td class="tdMenu" onmouseover="this.className=\'tdMenuExt\'" onmousedown="this.className=\'tdMenuExt\'" onmouseout="this.className=\'tdMenu\'">
                <a href="forAdults.php">Для взрослых</a>
                <table>
                    <tr>
                        <td >
                            <a href="forAdults.php">Индивидуальное консультирование</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="artTherapy.php">Арт-терапия для всех</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="status.php">Мастерская развития личности "Статус"</a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <a href="career.php">Трудоустройство и планирование карьеры</a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <a href="inSpaceOfLove.php">Психологический клуб "В пространстве любви" от 16 и старше</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="rhetoric.php">Риторика Актерское мастерство</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="taro.php">Символика ТАРО по методу символдраммы</a>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="tdMenu" onmouseover="this.className=\'tdMenuExt\'" onmousedown="this.className=\'tdMenuExt\'" onmouseout="this.className=\'tdMenu\'">
                <a href="manager.php">Для специалистов</a>
                <table>
                    <tr>
                        <td >
                            <a href="manager.php">Менеджер по персоналу "Помощник руководителя"</a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <a href="gestalt.php">Подготовка гештальт-терапевтов</a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <a href="family_therapy.php">"Семейная терапия"</a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <a href="artTherapy.php">"Арт-терапия"</a>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="tdMenu" onmouseover="this.className=\'tdMenuExt\'" onmousedown="this.className=\'tdMenuExt\'" onmouseout="this.className=\'tdMenu\'">
                <a href="skype.php">Скайп помощь</a>
                <table>

                </table>
            </td>
            <td class="tdMenu" onmouseover="this.className=\'tdMenuExt\'" onmousedown="this.className=\'tdMenuExt\'" onmouseout="this.className=\'tdMenu\'">
                <a href="photo.php">Фотогаллерея</a>
                <table>
                    <tr>
                        <td >
                            <a href="photo.php">Взрослые</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="photo_kids.php">Дети</a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <a href="photo_teens.php">Подростки</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>';

    private function getIp() {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            if (is_ip($_SERVER['HTTP_X_FORWARDED_FOR']))
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            foreach( explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']) as $ip ) {
                $ip=trim($ip);
                if (is_ip($ip))
                    return $ip;
            }
        }
        return $_SERVER['REMOTE_ADDR'];
    }

    private function countActions(){
        $getIp = $this->getIp();
        $hnk=mysql_connect('psihol04.mysql.ukraine.com.ua', 'psihol04_user1', 'ubivakus')  or die('Error');
        mysql_select_db("psihol04_db", $hnk) or die ("error");
        $resultik=mysql_query("SELECT count(*) =1 as data FROM ips WHERE ip_name LIKE '".$getIp."'");
        $data = mysql_fetch_row($resultik);
        if($data[0] == false) {

            mysql_query("INSERT INTO ips (ip_name) VALUES ('". $getIp ."')");
            $count = $this->getCount();
            mysql_query("UPDATE counts SET count='".$count."'");
        }
        $resultik=mysql_query("SELECT count(*) =20 as data FROM ips ");
        $data = mysql_fetch_row($resultik);
        if($data[0] == true) {
            mysql_query("DELETE  FROM ips");
        }
    }

    public function getCount()
    {
        $result = mysql_query("SELECT * FROM counts");
        $data1 = mysql_fetch_row($result);
        $count = $data1[0] += 1;
        return $count;
    }

    public function getMenu() {
        $this->countActions();
		return $this->menu;
	}


}
?>