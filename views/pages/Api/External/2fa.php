<?php
$twofacheckbox = $_POST['twofacheckbox'];
$twofapass = $_POST['twofapass'];
$twofapassconfirm = $_POST['twofapassconfirm'];
if ($twofacheckbox === '1') {
    if ($twofapass === $twofapassconfirm) {
        if (strlen($twofapass) > 5) {
            DB::query('INSERT INTO 2fa_tokens VALUES (\'0\', :user_id, :token)', array(':user_id'=>isLoggedIn(), ':token'=>password_hash($_POST['2facode'], PASSWORD_BCRYPT)));
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
    } else {
        echo json_encode(array(
            'errorcode' => '2',
            'error' => 1
        ));
    }
} else {
    echo json_encode(array(
        'errorcode' => '3',
        'error' => 1
    ));
}