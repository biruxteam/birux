<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/Auth.php');
$themetype = $_POST['themetype'];
$uid = isLoggedIn();
DB::query('UPDATE personalization_tokens SET themetype = :about WHERE user_id=:userid', array(':userid'=>$uid, ':about'=>$themetype));
if ($themetype === "1") {
    echo json_encode(array(
        'themetypecode' => '1',
        'error' => 0
    ));
} else {
    echo json_encode(array(
        'themetypecode' => '2',
        'error' => 0
    ));
}