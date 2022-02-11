<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/Auth.php');
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/CheckAuthLogged.php');
$postbody = $_POST['bodypost'];
    $usrid = isLoggedIn();
    if (strlen($postbody) > 500 || strlen($postbody) < 1) {
        echo json_encode(array(
            'errorcode' => '1',
            'error' => 1
        ));
    } else {
        DB::query('INSERT INTO posts VALUES (\'0\', :postbody, :time, :userid, 0, :photo, :audio, :video, :ppexists, :audioexists, :videoexists, :views, :comments, :repost)', array(':postbody'=>$postbody, ':userid'=>$usrid, ':time'=>time(), ':photo'=>'NONE', 'audio'=>'NONE', ':video'=>'NONE', ':ppexists'=>'0', ':audioexists'=>'0', ':videoexists'=>'0', ':views'=>'0', ':comments'=>'0', ':repost'=>'0'));
        echo json_encode(array(
            'errorcode' => '0',
            'error' => 0
        ));
    }
?>