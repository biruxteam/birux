<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$about = 'Привет, я пользователь Birux!';
$photourl = '/static/img/avatar.png';
$url = 'https://www.google.com/recaptcha/api/siteverify';
$key = '6Lft_vEcAAAAAEU1FG2KnTsP6O7HIbF65YE388wH';
$query = $url.'?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip'.$_SERVER['REMOTE_ADDR'];
$data = json_decode(file_get_contents($query));
        if (!DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))) {

            if (strlen($username) >= 5 && strlen($username) <= 25) {

                if (strlen($fname) >= 2 && strlen($fname) <= 20) {
                    
                    if (strlen($lname) >= 2 && strlen($lname) <= 20) {

                    if (preg_match('/[a-zA-Z0-9_]+/', $username)) {

                            if (strlen($password) >= 5 && strlen($password) <= 120) {

                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                            if (!DB::query('SELECT email FROM users WHERE email=:email', array(':email'=>$email))) {


                                    DB::query('INSERT INTO users VALUES (\'0\', :fname, :lname, :username, :email, :password, :online, \'0\', :photo, \'0\', :2fa_on, :about, :alpha, :pinnedpost, :emojistatus, :betatester)', array(':username'=>$username, ':password'=>password_hash($password, PASSWORD_BCRYPT), ':online'=>time(), ':email'=>$email, ':about'=>$about, ':2fa_on'=>'0', ':photo'=>$photourl, ':fname'=>$fname, ':lname'=>$lname, ':alpha'=>'0', ':pinnedpost'=>'0', ':emojistatus'=>'0', ':betatester'=>'0'));
                                    if (isset($_GET['forwardurl'])) {
                                        header("Location: {$_GET['forwardurl']}");
                                    } else {
                                    }
                                    $cstrong = True;
                                    $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                                    $user_id = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$username))[0]['id'];
                                    DB::query('INSERT INTO login_tokens VALUES (\'0\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));

                                    setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                                    setcookie("SNID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);
                                    echo json_encode(array(
                                        'errorcode' => '0',
                                        'error' => 0
                                    ));
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
                    } else {
                        echo json_encode(array(
                            'errorcode' => '4',
                            'error' => 1
                        ));
                    }
                    } else {
                        echo json_encode(array(
                            'errorcode' => '5',
                            'error' => 1
                        ));
                    }
                    } else {
                        echo json_encode(array(
                            'errorcode' => '6',
                            'error' => 1
                        ));
                    }
                } else {
                    echo json_encode(array(
                        'errorcode' => '7',
                        'error' => 1
                    ));
                }
            } else {
                echo json_encode(array(
                    'errorcode' => '8',
                    'error' => 1
                ));
            }

    } else {
        echo json_encode(array(
            'errorcode' => '9',
            'error' => 1
        ));
    }
        