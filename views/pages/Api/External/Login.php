<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (DB::query('SELECT email FROM users WHERE email=:username', array(':username'=>$username))) {

    if (password_verify($password, DB::query('SELECT password FROM users WHERE email=:username', array(':username'=>$username))[0]['password'])) {
            $cstrong = True;
            $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
            $user_id = DB::query('SELECT id FROM users WHERE email=:username', array(':username'=>$username))[0]['id'];
            /*if (DB::query('SELECT 2fa_on FROM users WHERE id=:id', array(':id'=>$user_id))[0]['2fa_on'] === "1") {
                function generateRandomString($length = 768) {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                    for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                    }
                    return $randomString;
                }
                $twofa_token = generateRandomString();
                DB::query('INSERT INTO 2fa_sessions VALUES (\'0\', :user_id, :token)', array(':token'=>$twofa_token, ':user_id'=>$user_id));
                header("Location: https://{$_SERVER['SERVER_NAME']}/~/app?type=2fa&2fatoken={$twofa_token}");
            } else {*/
                DB::query('INSERT INTO login_tokens VALUES (\'0\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));

                setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                setcookie("SNID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);
                if (isset($_GET['forwardurl'])) {
                    //header("Location: {$_GET['forwardurl']}");
                } else {
                    //header("Location: https://{$_SERVER['SERVER_NAME']}/app/feed");
                    echo json_encode(array(
                        'errorcode' => '0',
                        'error' => 0
                    ));
                }
            //}
       
            } else {
                echo json_encode(array(
                    'errorcode' => '1',
                    'error' => 1
                ));
        }

} else {
    echo json_encode(array(
        'errorcode' => '1',
        'error' => 1
    ));
}