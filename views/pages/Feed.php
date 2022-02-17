<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/Date.php');
include($_SERVER['DOCUMENT_ROOT'] . '/app/Controllers/Posts/CreateController.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$_ENV['PROJECT_NAME']?> | Лента новостей</title>
    <link href="/static/fonts/sf/stylesheet.css" rel="stylesheet">
    <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<body id="root">
    <script>
        $(document).ready(function() {
        $('#postForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '/exapi/birux.postsCreate',
                data: $(this).serialize(),
                success: function(response) {
                    var jsonData = JSON.parse(response);

                    console.log(response);
                    if (jsonData.errorcode == "1") {
                        $("#resultt").html("<div class='alert alert-dangernew container' role='alert'>Может, что-нибудь напишите в свой пост?</div>");
                    } else {
                        window.location.replace("/feed");
                    }
                }
            });
        });
    });
    </script>
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

        });
    </script>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/views/components/Sidebar.php'); ?>


    <div class="container mt-3">
        <h2>Лента новостей</h2>
        <div class="card mb-3">
            <div class="resultt" id="resultt"></div>
            <div class="card-body">

                <form action="/feed" method="POST" enctype="multipart/form-data">
                    <input style="display: none;" name="token" value="<?php echo $_TOKEN; ?>">
                    <input style="display: none;" name="uid" value="<?php echo isLoggedIn(); ?>">
                    <textarea class="form-control" name="bodypost" placeholder="Вы можете написать свою историю" cols="15" rows="5"></textarea>
                    <div class="col-md-auto d-flex align-items-center">
                    <button style="margin-right: 15px;" type="submit" name="createpost" class="btn btn-primary mb-3 mt-3">Опубликовать</button>
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="uppload-button" data-bs-toggle="dropdown" aria-expanded="false">
                            Прикрепить...
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="uppload-button">
                            <label for="upload-button" class='dropdown-item'><img style="margin-right: 10px;" width="24" src="/static/img/image.png"></img>Фотографию</label>
                            <label for="upload-button" class='dropdown-item'><img style="margin-right: 10px;" width="24" src="/static/img/music.png"></img>Музыку</label>
                            <label for="upload-button" class='dropdown-item'><img style="margin-right: 10px;" width="24" src="/static/img/video.png"></img>Видео</label>
                            <label data-toggle='modal' data-target='#pollModal' class='dropdown-item'><img style="margin-right: 10px;" width="24" src="/static/img/poll.png"></img>Опрос</label>
                        </ul>
                    </div>
                    </div>
                    <input name="filebody" type="file" id="upload-button" style="display: none;">
                    <script>
                                                let uploadButton = document.getElementById("upload-button");
                                                let upploadButton = document.getElementById("uppload-button");
                                                let chosenImage = document.getElementById("chosen-image");
                                                let fileName = document.getElementById("file-name");

                                                uploadButton.onchange = () => {
                                                    let reader = new FileReader();
                                                    reader.readAsDataURL(uploadButton.files[0]);
                                                    reader.onload = () => {
                                                        chosenImage.setAttribute("src", reader.result);
                                                    }
                                                    upploadButton.textContent = uploadButton.files[0].name;
                                                }
                                            </script>
                </form>



            </div>
        </div>
        <?php

        use Astrotomic\Twemoji\Twemoji;
        use Astrotomic\Twemoji\Replacer;


        $posts = DB::query('SELECT * FROM posts ORDER BY id DESC LIMIT 10');
        foreach ($posts as $p) {
            $fname = DB::query('SELECT fname FROM users WHERE id=:id', array(':id' => $p['user_id']))[0]['fname'];
            $lname = DB::query('SELECT lname FROM users WHERE id=:id', array(':id' => $p['user_id']))[0]['lname'];
            $username = DB::query('SELECT username FROM users WHERE id=:id', array(':id' => $p['user_id']))[0]['username'];
            $photo = DB::query('SELECT photo FROM users WHERE id=:id', array(':id' => $p['user_id']))[0]['photo'];
            $photopost_exists = DB::query('SELECT photopost_exists FROM posts WHERE id=:postid', array(':postid' => $p['id']))[0]['photopost_exists'];
                $audiopost_exists = DB::query('SELECT audiopost_exists FROM posts WHERE id=:postid', array(':postid' => $p['id']))[0]['audiopost_exists'];
                $videopost_exists = DB::query('SELECT videopost_exists FROM posts WHERE id=:postid', array(':postid' => $p['id']))[0]['videopost_exists'];
            echo '<div class="card mb-3">
            <div class="card-body">
            
                <img src="' . $photo . '" style="object-fit: cover; width: 45px; height: 45px; border-radius: 150px; margin-top: -33px;" class="fill-current mp-5">
                <h5 style="margin-bottom: -0px;" href="testings" class="col-10 ml-3  d-inline-block font-weight-bold"><a href="/' . $username . '">' . $fname . '&nbsp;' . $lname . '</a><br><p href="testings" style="font-size: 15px; font-weight: 500; margin-top: -45px;" class="col-10 d-inline-block font-weight-bold">' . zmdate($p['posted_at']) . '</p></h5>
                
                <p href="testings" class="col-10 d-inline-block font-weight-bold">' .nl2br(preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\r\n", htmlspecialchars($p['body']))) . '</p>';
                if ($photopost_exists === "1") {
                    echo "<br><a data-fancybox='group-1' class='colorbox' href='".$p['photopost']."'><img style='width: 300px !Important; border-radius: 15px !important;' class='col-10 d-block w-100 text-muted postimg' width='500' src=" . $p['photopost'] . " alt='display: none;'></a><br>";
                } else if ($audiopost_exists === "1") {
                    echo "<br><audio width='235' style='border-radius: 15px !important;' controls><source src='".$p['audiopost']."' controls></audio><br>";
                } else if ($videopost_exists === "1") {
                    echo '<br><video width="250" style="border-radius: 15px !important;" controls="controls" autoplay controls muted><source src="'.$p['videopost'].'"></video><br>';
                }
                echo '
                <div class="row row-cols-auto">
                    <div class="col">';
            if (DB::query('SELECT user_id FROM posts_likes WHERE user_id=:userid AND post_id=:postid', array(':userid' => isLoggedIn(), ':postid' => $p['id']))[0]['user_id']) {
                echo '<a data-id="' . $p['id'] . '" style="float: left;" class="nav__link"><i style="color: #0d6efd !important;" class="bx bx-like nav__icon"></i><span style="color: #0d6efd !important;" class="nav__namec ml-3">' . $p['likes'] . '</span></a>';
            } else {
                echo '<a data-id="' . $p['id'] . '" style="float: left;" class="nav__link"><i class="bx bx-like nav__icon"></i><span class="nav__namec ml-3">' . $p['likes'] . '</span></a>';
            }
            echo '
                    </div>
                    <div class="col">
                        <a href="/post/' . $p['id'] . '" style="float: left;" class="nav__link"><i class="bx bx-comment-detail nav__icon"></i><span class="nav__namec ml-3">' . $p['comments'] . '</span></a>
                    </div>';
                if ($p['user_id'] === isLoggedIn() || $photopost_exists === "1" || $audiopost_exists === "1" || $videopost_exists === "1") {
                echo '
                    <div class="col">
                    <div class="dropdown">
                    <a id="dropdownMenuLink" href="#" data-bs-toggle="dropdown" style="float: left;" class="nav__link"><i class="bx bx-dots-horizontal-rounded nav__icon"></i><span class="nav__namec ml-3"></span></a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <form method="post">';
                        echo '<li><a href="/act?act=json_post&postid='.$p['id'].'" name="jsondownload" style="float: left;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class="bx bx-download nav__icon"></i><span class="nav__namec ml-3">Скачать JSON поста</span></a></li>';
                        if ($photopost_exists === "1") {
                            echo '<li><a href="'.$p['photopost'].'" name="pinpost" style="float: left;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class="bx bx-download nav__icon"></i><span class="nav__namec ml-3">Скачать оригинал</span></a></li>';
                        } else if ($audiopost_exists === "1") {
                            echo '<li><a href="'.$p['audiopost'].'" name="pinpost" style="float: left;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class="bx bx-download nav__icon"></i><span class="nav__namec ml-3">Скачать оригинал</span></a></li>';
                        } else if ($videopost_exists === "1") {
                            echo '<li><a href="'.$p['videopost'].'" name="pinpost" style="float: left;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class="bx bx-download nav__icon"></i><span class="nav__namec ml-3">Скачать оригинал</span></a></li>';
                        }
                        if ($p['user_id'] === isLoggedIn()) {
                        echo '
                        <li><a href="/act?act=pin&postid='.$p['id'].'&token='.$_TOKEN.'" name="pinpost" style="float: left;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class="bx bx-pin nav__icon"></i><span class="nav__namec ml-3">Закрепить</span></a></li>
                        <li><a data-bs-toggle="modal" data-bs-target="#exampleModal'.$p['id'].'" style="float: left; color: #ff1548;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class="bx bx-trash nav__icon"></i><span class="nav__namec ml-3">Удалить</span></a></li>
                        '; }
                        echo '
                        </form>
                    </ul>
                </div>
                        
                    </div>'; }
            echo '
                </div>



            </div>
        </div>
        <div class="modal fade" id="exampleModal'.$p['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удаление поста</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Вы действительно хотите удалить этот пост? Действие нельзя будет отменить.
      </div>
      <div class="modal-footer">
        <div><button type="button" class="btn-r btn-secondary" data-bs-dismiss="modal">Отмена</button></div>
        <div><a href="/act?act=delete&postid='.$p['id'].'&token='.$_TOKEN.'" type="button" class="btn-r btn-danger">Удалить</a></div>
      </div>
    </div>
  </div>
</div>';
        }

        ?>

    </div>
</body>

</html>