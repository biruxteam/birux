<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/Date.php');
$fname = DB::query('SELECT fname FROM users WHERE username=:username', array(':username'=>$username))[0]['fname'];
$verified = DB::query('SELECT verified FROM users WHERE username=:username', array(':username'=>$username))[0]['verified'];
$id = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$username))[0]['id'];
$lname = DB::query('SELECT lname FROM users WHERE username=:username', array(':username'=>$username))[0]['lname'];
$photo = DB::query('SELECT photo FROM users WHERE username=:username', array(':username'=>$username))[0]['photo'];
$about = DB::query('SELECT about FROM users WHERE username=:username', array(':username'=>$username))[0]['about'];
$pinnedpost = DB::query('SELECT pinnedpost_id FROM users WHERE username=:username', array(':username'=>$username))[0]['pinnedpost_id'];
$usernamedb = DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))[0]['username'];
$lastonline = DB::query('SELECT online FROM users WHERE id=:id', array(':id'=>$id))[0]['online'];

$subscribersbd = DB::query('SELECT subscribers_pr FROM privacy_tokens WHERE user_id=:user_id', array(':user_id'=>$id))[0]['subscribers_pr'];


$pz0 = $_ENV['MYSQL_PASSWORD'];
$logz = $_ENV['MYSQL_NAME'];
$reqz = "mysql:host=".$_ENV['MYSQL_HOST'].";dbname=".$_ENV['MYSQL_DB'].";charset=utf8";
$dbh1 = new PDO($reqz, $logz, $pz0);

if ($usernamedb != $username) {
    die(include($_SERVER['DOCUMENT_ROOT'] . '/views/pages/Errors/UserNotFound.php'));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/static/css/appx.css" rel="stylesheet">
    <link href="/static/fonts/sf/stylesheet.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script>
        $(document).ready(function() {






            $('[data-id]').click(function() {
                var buttonid = $(this).attr('data-id');
                $.ajax({

                    type: "POST",
                    url: "/exapi/birux.postsLike?id=" + $(this).attr('data-id'),
                    processData: false,
                    contentType: "application/json",
                    data: '',
                    success: function(r) {
                        var res = JSON.parse(r)
                        if (res.YourLike === 0) {
                            $("[data-id='" + buttonid + "']").html('<a data-id="' + buttonid + '" style="float: left;" class="nav__link"><i class="bx bx-like nav__icon"></i><span class="nav__namec ml-3">' + res.Likes + '</span></a>')
                        } else if (res.YourLike === 1) {
                            $("[data-id='" + buttonid + "']").html('<a data-id="' + buttonid + '" style="float: left;" class="nav__link"><i style="color: #0d6efd !important;" class="bx bx-like nav__icon"></i><span style="color: #0d6efd !important;" class="nav__namec ml-3">' + res.Likes + '</span></a>')
                        }
                    },
                    error: function(r) {
                        console.log(r)
                    }

                });
            })

        $('#postForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '/exapi/birux.subscribe',
                data: $(this).serialize(),
                success: function(response) {
                    var jsonData = JSON.parse(response);

                    console.log(response);
                    if (jsonData.subscriber == "1") {
                        $("#subscribe").html('<button id="sbbtn" type="submit" style="margin-right: 15px;" class="btn btn-primary ml-5">Отписаться</button>');
                        $("#subs").html('<a id="subs" class="col-sm-10" style="color: aliceblue;">'+jsonData.btntranslate+'</a>');
                    } else if (jsonData.subscriber == "0") {
                        $("#subs").html('<a id="subs" class="col-sm-10" style="color: aliceblue;">'+jsonData.btntranslate+'</a>');
                        $("#subscribe").html('<button id="sbbtn" type="submit" style="margin-right: 15px;" class="btn btn-primary ml-5">Подписаться</button>');
                    }
                }
            });
        });

        });
    </script>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/views/components/Sidebar.php'); ?>
    <div class="container mt-3">
        <img width='75' height='75' src='<?php echo $photo; ?>' style='object-fit: cover; width: 55px; height: 55px; border-radius: 150px;' class='fill-current mp-10 mb-4'>
        <p style="padding-left: 5px;" href='testings' class='col-sm-10 d-inline-block font-weight-bold'><a href='/<?php echo $username; ?>' style="font-size: 20px;"><b><?php echo $fname;?>&nbsp;<?php echo $lname;?></b><?php if ($verified === '1') { ?> <img style="margin-left: 0px;" width="18" src="/static/img/verified.png" alt=""> <?php } ?></a>
        <?php
                                                        $usid = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$_GET['username']))[0]['id'];
                                                        $q = "SELECT COUNT(1) FROM followers WHERE `user_id`=$id"; 
                                                        $q1 = $dbh1->prepare($q);
                                                        $q1 -> execute(); 
                                                        $countusers = $q1->fetch(); 
                                                        $countusers = $countusers[0];

                                                        ?>
        <?php if ($subscribersbd === "0") { ?>
            <br><a id="subs" class="col-sm-10" style="color: aliceblue;" href=''><?php echo $countusers; if ($countusers == '1') { ?> подписчик
                                                            <?php } else if ($countusers == '2') { ?> подписчика
                                                            <?php } else if ($countusers == '3') { ?> подписчика
                                                            <?php } else if ($countusers == '4') { ?> подписчика
                                                            <?php } else { ?> подписчиков <?php } ?> </a>
                                                            <a>
                                                            <?php
                                                            if(time()-60 <= $lastonline) { ?> • В сети <?php } else { ?> • был в сети <?php echo zmdate($lastonline); } ?></a></p>
                                                        <?php } ?>
    <?php
    if ($id != isLoggedIn()) { ?>
    <div id="resultt"></div>
        <form id="postForm">
        <input type="text" name="uid" value="<?=$id?>" style="display: none;">
        <div id="subscribe">
        <?php if (!DB::query('SELECT follower_id FROM followers WHERE user_id=:userid AND follower_id=:followerid', array(':userid'=>$id, ':followerid'=>isLoggedIn()))) { ?>
        <button subscribe-id="<?=$id?>" id="sbbtn" type="submit" style="margin-right: 15px;" class="btn btn-primary ml-5">Подписаться</button>
        <?php } else { ?>
        <button subscribe-id="<?=$id?>" id="sbbtn" type="submit" style="margin-right: 15px;" class="btn btn-primary ml-5">Отписаться</button>
        <?php } ?>
        </div>
        </form>
    <?php } ?>

        <div style="border: 1;" class="card mt-2 mb-3">
            <div class="card-body">
                <h5 class="card-title">О профиле</h5>
                <p class="card-text"><?php echo $about; ?></p>
            </div>
        </div>
        <?php if ($pinnedpost != '0') { ?>
        <?php 
        $pinnedpost_body = DB::query('SELECT body FROM posts WHERE id=:id', array(':id'=>$pinnedpost))[0]['body'];
        $pinnedpost_postedat = DB::query('SELECT posted_at FROM posts WHERE id=:id', array(':id'=>$pinnedpost))[0]['posted_at'];
        $pinnedpost_likes = DB::query('SELECT likes FROM posts WHERE id=:id', array(':id'=>$pinnedpost))[0]['likes'];
        $pinnedpost_comments = DB::query('SELECT comments FROM posts WHERE id=:id', array(':id'=>$pinnedpost))[0]['comments'];
        ?>
        <div class="card mb-3">
            <div class="card-body">
            <h5 class="card-title mb-3">Закреплённый пост</h5>
            
                <img src="<?php echo $photo; ?>" style="object-fit: cover; width: 45px; height: 45px; border-radius: 150px; margin-top: -33px;" class="fill-current mp-5">
                <h5 style="margin-bottom: -0px;" href="testings" class="col-sm-10 ml-3  d-inline-block font-weight-bold"><a href="/<?php echo $username; ?>"><?php echo $fname?>&nbsp;<?php echo $lname; ?></a><br><p href="testings" style="font-size: 15px; font-weight: 500; margin-top: -45px;" class="col-sm-10 d-inline-block font-weight-bold"><?php echo zmdate($pinnedpost_postedat); ?></p></h5>
                
                <p href="testings" class="col-10 d-inline-block font-weight-bold"><?php echo $pinnedpost_body; ?></p>
                <div class="row row-cols-auto">
                    <div class="col">
                    <?php
                        if (DB::query('SELECT user_id FROM posts_likes WHERE user_id=:userid AND post_id=:postid', array(':userid' => isLoggedIn(), ':postid'=>$pinnedpost))[0]['user_id']) {
                            echo '<a data-id="'.$pinnedpost.'" style="float: left;" class="nav__link"><i style="color: #0d6efd !important;" class="bx bx-like nav__icon"></i><span style="color: #0d6efd !important;" class="nav__namec ml-3">'.$pinnedpost_likes.'</span></a>';
                        } else {
                            echo '<a data-id="'.$pinnedpost.'" style="float: left;" class="nav__link"><i class="bx bx-like nav__icon"></i><span class="nav__namec ml-3">'.$pinnedpost_likes.'</span></a>';
                        }
                    ?>
                    </div>
                    <div class="col">
                        <a href="/post/<?php echo $pinnedpost; ?>" style="float: left;" class="nav__link"><i class="bx bx-comment-detail nav__icon"></i><span class="nav__namec ml-3"><?php echo $pinnedpost_comments; ?></span></a>
                    </div> <?php
                    if ($user_id === isLoggedIn()) {
                    ?>
                    <div class="col">
                    <div class="dropdown">
                    <a id="dropdownMenuLink" href="#" data-bs-toggle="dropdown" style="float: left;" class="nav__link"><i class="bx bx-dots-horizontal-rounded nav__icon"></i><span class="nav__namec ml-3"></span></a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" style="float: left;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class="bx bx-pin nav__icon"></i><span class="nav__namec ml-3">Закрепить</span></a></li>
                        <li><a href="#" style="float: left; color: #ff1548;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class="bx bx-trash nav__icon"></i><span class="nav__namec ml-3">Удалить</span></a></li>
                    </ul>
                </div>
                        
                    </div>
                    <?php } ?>
                    
                </div>



            </div>
        </div>
        <?php } ?>
        <?php
        use Astrotomic\Twemoji\Twemoji;
        use Astrotomic\Twemoji\Replacer;


        $posts = DB::query('SELECT * FROM posts WHERE user_id=:id ORDER BY id DESC', array(':id'=>$id));
        foreach ($posts as $p) {
            $fname = DB::query('SELECT fname FROM users WHERE id=:id', array(':id'=>$p['user_id']))[0]['fname'];
            $lname = DB::query('SELECT lname FROM users WHERE id=:id', array(':id'=>$p['user_id']))[0]['lname'];
            $username = DB::query('SELECT username FROM users WHERE id=:id', array(':id'=>$p['user_id']))[0]['username'];
            $photo = DB::query('SELECT photo FROM users WHERE id=:id', array(':id'=>$p['user_id']))[0]['photo'];
            echo '<div class="card mb-3">
            <div class="card-body">
            
                <img src="'.$photo.'" style="object-fit: cover; width: 45px; height: 45px; border-radius: 150px; margin-top: -33px;" class="fill-current mp-5">
                <h5 style="margin-bottom: -0px;" href="testings" class="col-sm-10 ml-3  d-inline-block font-weight-bold"><a href="/'.$username.'">'.$fname.'&nbsp;'.$lname.'</a><br><p href="testings" style="font-size: 15px; font-weight: 500; margin-top: -45px;" class="col-sm-10 d-inline-block font-weight-bold">'.zmdate($p['posted_at']).'</p></h5>
                
                <p href="testings" class="col-10 d-inline-block font-weight-bold">'.$p['body'].'</p>
                <div class="row row-cols-auto">
                    <div class="col">';
                        if (DB::query('SELECT user_id FROM posts_likes WHERE user_id=:userid AND post_id=:postid', array(':userid' => isLoggedIn(), ':postid'=>$p['id']))[0]['user_id']) {
                            echo '<a data-id="'.$p['id'].'" style="float: left;" class="nav__link"><i style="color: #0d6efd !important;" class="bx bx-like nav__icon"></i><span style="color: #0d6efd !important;" class="nav__namec ml-3">'.$p['likes'].'</span></a>';
                        } else {
                            echo '<a data-id="'.$p['id'].'" style="float: left;" class="nav__link"><i class="bx bx-like nav__icon"></i><span class="nav__namec ml-3">'.$p['likes'].'</span></a>';
                        }
                    echo '
                    </div>
                    <div class="col">
                        <a href="/post/'.$p['id'].'" style="float: left;" class="nav__link"><i class="bx bx-comment-detail nav__icon"></i><span class="nav__namec ml-3">'.$p['comments'].'</span></a>
                    </div>';
                    if ($p['user_id'] === isLoggedIn()) {
                        echo'
                    <div class="col">
                    <div class="dropdown">
                    <a id="dropdownMenuLink" href="#" data-bs-toggle="dropdown" style="float: left;" class="nav__link"><i class="bx bx-dots-horizontal-rounded nav__icon"></i><span class="nav__namec ml-3"></span></a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" style="float: left;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class="bx bx-pin nav__icon"></i><span class="nav__namec ml-3">Закрепить</span></a></li>
                        <li><a href="#" style="float: left; color: #ff1548;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class="bx bx-trash nav__icon"></i><span class="nav__namec ml-3">Удалить</span></a></li>
                    </ul>
                </div>
                        
                    </div>';
                    }
                    echo '
                </div>



            </div>
        </div>';
        }

        ?>
    </div>
</body>

</html>
