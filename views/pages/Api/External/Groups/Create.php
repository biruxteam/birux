<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/Auth.php');
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/CheckAuthLogged.php');
$namegroup = $_POST['namegroup'];
$bodygroup = $_POST['bodygroup'];
    $usrid = isLoggedIn();
    if (strlen($namegroup) > 500 || strlen($namegroup) < 1) {
        echo json_encode(array(
            'errorcode' => '1',
            'error' => 1
        ));
    } else {
        function generateRandomString($length = 5) {
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        $lastid = DB::query('SELECT * FROM groups ORDER BY id DESC LIMIT 1')[0]['id'];

        $futurelink = $lastid+1;
        if (strlen($bodygroup) < 1) {
            $bodygroup = 'Это моё сообщество в Birux!';
        }
        DB::query('INSERT INTO `groups` VALUES (\'0\', :namegroup, :link, :about, :photo, :owner_id, \'0\', \'0\', :pinnedpost)', array(':namegroup'=>$namegroup, ':link'=>$futurelink, ':about'=>$bodygroup, ':photo'=>'/static/img/group.png', ':owner_id'=>isLoggedIn(), ':pinnedpost'=>'0'));
        $link = DB::query('SELECT link FROM `groups` ORDER BY id DESC LIMIT 1')[0]['link'];
        echo json_encode(array(
            'link' => $link,
            'errorcode' => '0',
            'error' => 0
        ));
    }
?>