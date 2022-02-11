<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/Date.php');
$id = DB::query('SELECT id FROM `groups` WHERE link=:username', array(':username'=>$namegroup))[0]['id'];
$ownerid = DB::query('SELECT owner_id FROM `groups` WHERE link=:username', array(':username'=>$namegroup))[0]['owner_id'];
$photo = DB::query('SELECT photo FROM `groups` WHERE link=:username', array(':username'=>$namegroup))[0]['photo'];
$about = DB::query('SELECT about FROM `groups` WHERE link=:username', array(':username'=>$namegroup))[0]['about'];
$linkgroupdb = DB::query('SELECT link FROM `groups` WHERE link=:username', array(':username'=>$namegroup))[0]['link'];
$namegroupdb = DB::query('SELECT namegroup FROM `groups` WHERE link=:username', array(':username'=>$namegroup))[0]['namegroup'];
$pinnedpost = DB::query('SELECT pinnedpost_id FROM `groups` WHERE link=:username', array(':username'=>$namegroup))[0]['pinnedpost_id'];

if ($linkgroupdb != $namegroup) {
    die(include($_SERVER['DOCUMENT_ROOT'] . '/views/pages/Errors/GroupNotFound.php'));
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
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/views/components/Sidebar.php'); ?>
    <div class="container mt-3">
        <img width='75' height='75' src='<?php echo $photo; ?>' style='object-fit: cover; width: 55px; height: 55px; border-radius: 150px;' class='fill-current mp-10 mb-4'>
        <p style="padding-left: 5px;" href='testings' class='col-10 d-inline-block font-weight-bold'><a href='@" . $username_r . "' style="font-size: 20px;"><b><?php echo $namegroupdb;?></b></a>
        <br><a href=''> ⠀</a>        </p>        

        <?php if ($ownerid === isLoggedIn()) { ?>
            <div class="alert alert-warningnew" role="alert">
  <h4 class="warningnewt">Кажется, вы что-то забыли!</h4>
  <p class="warningnewt">Вашему сообществу уже присвоен свой идентификатор. А не хотели бы его сменить на буквенный? Да ещё и красивый! Это можно сделать прямо в <b>настройках вашего сообщества</b>.</p>
</div>
<?php } ?>
        <div style="border: 1;" class="card mt-2">
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
                <h5 style="margin-bottom: -0px;" href="testings" class="col-10 ml-3  d-inline-block font-weight-bold"><a href="/<?php echo $username; ?>"><?php echo $fname?>&nbsp;<?php echo $lname; ?></a><br><p href="testings" style="font-size: 15px; font-weight: 500; margin-top: -45px;" class="col-10 d-inline-block font-weight-bold"><?php echo zmdate($pinnedpost_postedat); ?></p></h5>
                
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


        $posts = DB::query('SELECT * FROM posts_groups WHERE group_id=:id ORDER BY id DESC', array(':id'=>$id));
        foreach ($posts as $p) {
            $fname = DB::query('SELECT fname FROM users WHERE id=:id', array(':id'=>$p['user_id']))[0]['fname'];
            $lname = DB::query('SELECT lname FROM users WHERE id=:id', array(':id'=>$p['user_id']))[0]['lname'];
            $username = DB::query('SELECT username FROM users WHERE id=:id', array(':id'=>$p['user_id']))[0]['username'];
            $photo = DB::query('SELECT photo FROM users WHERE id=:id', array(':id'=>$p['user_id']))[0]['photo'];
            echo '<div class="card mb-3">
            <div class="card-body">
            
                <img src="'.$photo.'" style="object-fit: cover; width: 45px; height: 45px; border-radius: 150px; margin-top: -33px;" class="fill-current mp-5">
                <h5 style="margin-bottom: -0px;" href="testings" class="col-10 ml-3  d-inline-block font-weight-bold"><a href="/'.$username.'">'.$fname.'&nbsp;'.$lname.'</a><br><p href="testings" style="font-size: 15px; font-weight: 500; margin-top: -45px;" class="col-10 d-inline-block font-weight-bold">'.zmdate($p['posted_at']).'</p></h5>
                
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