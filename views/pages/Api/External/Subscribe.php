<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/Auth.php');
$pz0 = '';
$logz = 'root';
$reqz = "mysql:host=localhost;dbname=birux;charset=utf8";
$dbh1 = new PDO($reqz, $logz, $pz0);

$sid = $_POST['uid'];

    if (isLoggedIn() != $sid) {

            if (!DB::query('SELECT follower_id FROM followers WHERE user_id=:userid AND follower_id=:followerid', array(':userid'=>$_POST['uid'], ':followerid'=>isLoggedIn()))) {
                    DB::query('INSERT INTO followers VALUES (\'0\', :userid, :followerid)', array(':userid'=>$_POST['uid'], ':followerid'=>isLoggedIn()));
                    $q = "SELECT COUNT(1) FROM followers WHERE `user_id`=$sid"; 
                    $q1 = $dbh1->prepare($q);
                    $q1 -> execute(); 
                    $countusers = $q1->fetch(); 
                    $countusers = $countusers[0];

                    if ($countusers == '1') { 
                            $countusers.' подписчик'; 
                        } else if ($countusers == '2') { 
                                $btnsb = $countusers.' подписчика'; 
                        } else if ($countusers == '3') { 
                                $btnsb = $countusers.' подписчика'; 
                        } else if ($countusers == '4') { 
                                $btnsb = $countusers.' подписчика'; 
                        } else { 
                                $btnsb = $countusers.' подписчиков'; 
                        } 
                    
                    echo json_encode(array(
                        'subscribers' => $countusers,
                        'subscriber' => 1,
                        'error' => 0,
                        'sid' => $sid,
                        'btntranslate' => $btnsb
                    ));
                    
            } else {
                    DB::query('DELETE FROM followers WHERE user_id=:userid AND follower_id=:followerid', array(':userid'=>$_POST['uid'], ':followerid'=>isLoggedIn()));
                    $q = "SELECT COUNT(1) FROM followers WHERE `user_id`=$sid"; 
                    $q1 = $dbh1->prepare($q);
                    $q1 -> execute(); 
                    $countusers = $q1->fetch(); 
                    $countusers = $countusers[0];

                    if ($countusers == '1') { 
                        $countusers.' подписчик'; 
                    } else if ($countusers == '2') { 
                            $btnsb = $countusers.' подписчика'; 
                    } else if ($countusers == '3') { 
                            $btnsb = $countusers.' подписчика'; 
                    } else if ($countusers == '4') { 
                            $btnsb = $countusers.' подписчика'; 
                    } else { 
                            $btnsb = $countusers.' подписчиков'; 
                    } 
                    
                    echo json_encode(array(
                        'subscribers' => $countusers,
                        'subscriber' => 0,
                        'error' => 0,
                        'sid' => $sid,
                        'btntranslate' => $btnsb
                    ));
            }
    }

