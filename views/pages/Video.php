<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/Date.php');
if (!DB::query('SELECT id FROM video WHERE id=:id', array(':id'=>$id))[0]['id']) {
    die(include($_SERVER['DOCUMENT_ROOT'] . '/views/pages/Errors/VideoNotFound.php'));
}
$user_id = DB::query('SELECT user_id FROM video WHERE id=:id', array(':id'=>$id))[0]['user_id'];
$body = DB::query('SELECT name FROM video WHERE id=:id', array(':id'=>$id))[0]['name'];
$fname = DB::query('SELECT fname FROM users WHERE id=:id', array(':id'=>$user_id))[0]['fname'];
$lname = DB::query('SELECT lname FROM users WHERE id=:id', array(':id'=>$user_id))[0]['lname'];
$username = DB::query('SELECT username FROM users WHERE id=:id', array(':id'=>$user_id))[0]['username'];
$likes = DB::query('SELECT likes FROM video WHERE id=:id', array(':id'=>$id))[0]['likes'];
$dislikes = DB::query('SELECT dislikes FROM video WHERE id=:id', array(':id'=>$id))[0]['dislikes'];
//$comments = DB::query('SELECT comments FROM video WHERE id=:id', array(':id'=>$id))[0]['comments'];
$posted_at = DB::query('SELECT date FROM video WHERE id=:id', array(':id'=>$id))[0]['date'];
$sourceurl = DB::query('SELECT sourceurl FROM video WHERE id=:id', array(':id'=>$id))[0]['sourceurl'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docu</title>
    <link href="/static/css/appx.css" rel="stylesheet">
    <link href="/static/fonts/sf/stylesheet.css" rel="stylesheet">
    <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<body>

<script>
        $(document).ready(function() {






            $('[data-id]').click(function() {
                var buttonid = $(this).attr('data-id');
                $.ajax({

                    type: "POST",
                    url: "/exapi/birux.videoLike?likeid=1&id=" + $(this).attr('data-id'),
                    processData: false,
                    contentType: "application/json",
                    data: '',
                    success: function(r) {
                        var res = JSON.parse(r)
                        if (res.yourlike === 0) {
                            $("[data-id='" + buttonid + "']").html('<a data-id="' + buttonid + '" style="float: left;" class="nav__link"><i class="bx bx-like nav__icon"></i><span class="nav__namec ml-3">' + res.likes + '</span></a>')
                        } else if (res.yourlike === 1) {
                            $("[data-id='" + buttonid + "']").html('<a data-id="' + buttonid + '" style="float: left;" class="nav__link"><i style="color: #0d6efd !important;" class="bx bx-like nav__icon"></i><span style="color: #0d6efd !important;" class="nav__namec ml-3">' + res.likes + '</span></a>')
                        }
                        if (res.yourdislike === 0) {
                            $("[datad-id='" + buttonid + "']").html('<a datad-id="' + buttonid + '" style="float: left;" class="nav__link"><i class="bx bx-dislike nav__icon"></i><span class="nav__namec ml-3">' + res.dislikes + '</span></a>')
                        } else if (res.yourdislike === 1) {
                            $("[datad-id='" + buttonid + "']").html('<a datad-id="' + buttonid + '" style="float: left;" class="nav__link"><i style="color: #0d6efd !important;" class="bx bx-dislike nav__icon"></i><span style="color: #0d6efd !important;" class="nav__namec ml-3">' + res.dislikes + '</span></a>')
                        }
                    },
                    error: function(r) {
                        console.log(r)
                    }

                });
            })

            $('[datad-id]').click(function() {
                var buttonid = $(this).attr('datad-id');
                $.ajax({

                    type: "POST",
                    url: "/exapi/birux.videoLike?dislikeid=1&id=" + $(this).attr('datad-id'),
                    processData: false,
                    contentType: "application/json",
                    data: '',
                    success: function(r) {
                        var res = JSON.parse(r)
                        if (res.yourlike === 0) {
                            $("[data-id='" + buttonid + "']").html('<a data-id="' + buttonid + '" style="float: left;" class="nav__link"><i class="bx bx-like nav__icon"></i><span class="nav__namec ml-3">' + res.likes + '</span></a>')
                        } else if (res.yourlike === 1) {
                            $("[data-id='" + buttonid + "']").html('<a data-id="' + buttonid + '" style="float: left;" class="nav__link"><i style="color: #0d6efd !important;" class="bx bx-like nav__icon"></i><span style="color: #0d6efd !important;" class="nav__namec ml-3">' + res.likes + '</span></a>')
                        }
                        if (res.yourdislike === 0) {
                            $("[datad-id='" + buttonid + "']").html('<a datad-id="' + buttonid + '" style="float: left;" class="nav__link"><i class="bx bx-dislike nav__icon"></i><span class="nav__namec ml-3">' + res.dislikes + '</span></a>')
                        } else if (res.yourdislike === 1) {
                            $("[datad-id='" + buttonid + "']").html('<a datad-id="' + buttonid + '" style="float: left;" class="nav__link"><i style="color: #0d6efd !important;" class="bx bx-dislike nav__icon"></i><span style="color: #0d6efd !important;" class="nav__namec ml-3">' + res.dislikes + '</span></a>')
                        }
                    },
                    error: function(r) {
                        console.log(r)
                    }

                });
            })

        });
    </script>
    
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/views/components/Sidebar.php'); ?>
    <div class="container mt-3">
        <h2>Видео</h2>




            <div class="card mb-3">
            <div class="card-body">
            <center><video src="<?=$sourceurl?>" class="w-50" controls="controls" poster="video/duel.jpg"></video></center>
            
                <img src="<?php echo $photo; ?>" style="object-fit: cover; width: 45px; height: 45px; border-radius: 150px; margin-top: -33px;" class="fill-current mp-5">
                <h5 style="margin-bottom: -0px;" href="testings" class="col-10 ml-3  d-inline-block font-weight-bold"><a href="/<?php echo $username; ?>"><?php echo $fname?>&nbsp;<?php echo $lname; ?></a><br><p href="testings" style="font-size: 15px; font-weight: 500; margin-top: -45px;" class="col-10 d-inline-block font-weight-bold"><?php echo zmdate($posted_at); ?></p></h5>
                
                <p href="testings" class="col-10 d-inline-block font-weight-bold"><?php echo htmlspecialchars($body); ?></p>
                
                <div class="row row-cols-auto">
                    <div class="col">
                    <?php
                        if (DB::query('SELECT user_id FROM posts_likes WHERE user_id=:userid AND post_id=:postid', array(':userid' => isLoggedIn(), ':postid'=>$p['id']))[0]['user_id']) {
                            echo '<a data-id="'.$id.'" style="float: left;" class="nav__link"><i style="color: #0d6efd !important;" class="bx bx-like nav__icon"></i><span style="color: #0d6efd !important;" class="nav__namec ml-3">'.$likes.'</span></a>';
                        } else {
                            echo '<a data-id="'.$id.'" style="float: left;" class="nav__link"><i class="bx bx-like nav__icon"></i><span class="nav__namec ml-3">'.$likes.'</span></a>';
                        }
                    ?>
                    </div>
                    <div class="col">
                    <?php
                        if (DB::query('SELECT user_id FROM posts_likes WHERE user_id=:userid AND post_id=:postid', array(':userid' => isLoggedIn(), ':postid'=>$p['id']))[0]['user_id']) {
                            echo '<a datad-id="'.$id.'" style="float: left;" class="nav__link"><i style="color: #0d6efd !important;" class="bx bx-dislike nav__icon"></i><span style="color: #0d6efd !important;" class="nav__namec ml-3">'.$dislikes.'</span></a>';
                        } else {
                            echo '<a datad-id="'.$id.'" style="float: left;" class="nav__link"><i class="bx bx-dislike nav__icon"></i><span class="nav__namec ml-3">'.$dislikes.'</span></a>';
                        }
                    ?>
                    </div> <?php
                    if ($user_id === isLoggedIn()) {
                    ?>
                    <div class="col">
                    <!--div class="dropdown">
                    <a id="dropdownMenuLink" href="#" data-bs-toggle="dropdown" style="float: left;" class="nav__link"><i class="bx bx-dots-horizontal-rounded nav__icon"></i><span class="nav__namec ml-3"></span></a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" style="float: left;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class="bx bx-pin nav__icon"></i><span class="nav__namec ml-3">Закрепить</span></a></li>
                        <li><a href="#" style="float: left; color: #ff1548;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class="bx bx-trash nav__icon"></i><span class="nav__namec ml-3">Удалить</span></a></li>
                    </ul>
                </div-->
                        
                    </div>
                    <?php } ?>
                    
                </div>



            </div>
        </div>
        
        
    </div>
</body>

</html>