<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/Date.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docu</title>
    <link href="/static/fonts/sf/stylesheet.css" rel="stylesheet">
    <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<body id="root">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/views/components/Sidebar.php'); ?>
    <div class="container mt-3">
        <h2>Уведомления</h2>
        
        <?php

        use Astrotomic\Twemoji\Twemoji;
        use Astrotomic\Twemoji\Replacer;


        $posts = DB::query('SELECT * FROM notifications WHERE recipient_id=:id ORDER BY id DESC', array(':id'=>isLoggedIn()));
        foreach ($posts as $p) {
            $fname = DB::query('SELECT fname FROM users WHERE id=:id', array(':id' => $p['sender_id']))[0]['fname'];
            $lname = DB::query('SELECT lname FROM users WHERE id=:id', array(':id' => $p['sender_id']))[0]['lname'];
            $username = DB::query('SELECT username FROM users WHERE id=:id', array(':id' => $p['sender_id']))[0]['username'];
            $photo = DB::query('SELECT photo FROM users WHERE id=:id', array(':id' => $p['sender_id']))[0]['photo'];
            echo '<div class="card mb-3">
            <div class="card-body">
            
                <img src="' . $photo . '" style="object-fit: cover; width: 45px; height: 45px; border-radius: 150px; margin-top: -33px;" class="fill-current mp-5">
                <h5 style="margin-bottom: -0px;" href="testings" class="col-10 ml-3  d-inline-block font-weight-bold"><a href="/' . $username . '">' . $fname . '&nbsp;' . $lname . '</a><br><p href="testings" style="font-size: 15px; font-weight: 500; margin-top: -45px;" class="col-10 d-inline-block font-weight-bold">' . zmdate($p['date']) . '</p></h5>';
                if ($p['token'] === 'VIDEO_LIKE') {
                    echo '<p href="testings" class="col-10 d-inline-block font-weight-bold">Пользователю понравилось ваше видео</p>';
                }
                if ($p['token'] === 'REGISTRATION_FIRST') {
                    echo '<p href="testings" class="col-10 d-inline-block font-weight-bold">Ура, вы зарегистрировали свой аккаунт в Birux! Пора открывать новые группы и находить новых друзей.</p>';
                }
                if ($p['token'] === 'BETATESTER') {
                    echo '<p href="testings" class="col-10 d-inline-block font-weight-bold">Спасибо за участие в Birux Beta! Бейдж уже выдан к вам в профиль.</p>';
                }
                if ($p['token'] === 'COMMENTARY_POST') {
                    //echo "<div style='word-break: break-word !important; font-weight: 500 !important;' class='d-block w-100'>" . preg_replace('!(http://[a-z0-9_./?=&-]+)!i', '<a target="_blank" href="$1">$1</a>', preg_replace('!(https://[a-z0-9_./?=&-]+)!i', '<a target="_blank" href="$1">$1</a>', (nl2br(Post::link_add(bbcode(htmlspecialchars($p["fname"]))).' оставил комментарий под вашим <a href="/app/post'.$p["link"].'">постом</a>'))))."</div>";
                }
                echo '
                <div class="row row-cols-auto">
                    <div class="col">';
           
            echo '
                    </div>
                    <div class="col">
                        
                    </div>';
            
            echo '
                </div>



            </div>
        </div>';
        }

        ?>

    </div>
</body>

</html>