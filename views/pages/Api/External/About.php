<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/Auth.php');
$bodyabout = $_POST['bodyabout'];
    $uid = isLoggedIn();
    if (strlen($bodyabout) < 500 or strlen($bodyabout) > 1) {
        DB::query('UPDATE users SET about = :about WHERE id=:userid', array(':userid'=>$uid, ':about'=>$bodyabout));
        echo json_encode(array(
            'errorcode' => '0',
            'error' => 0
        ));
    } else {
        echo json_encode(array(
            'errorcode' => '1',
            'error' => 1
        ));
    }