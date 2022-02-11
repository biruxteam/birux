<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/Date.php');
$user_id = DB::query('SELECT user_id FROM posts WHERE id=:id', array(':id'=>$id))[0]['user_id'];
$body = DB::query('SELECT body FROM posts WHERE id=:id', array(':id'=>$id))[0]['body'];
$fname = DB::query('SELECT fname FROM users WHERE id=:id', array(':id'=>$user_id))[0]['fname'];
$lname = DB::query('SELECT lname FROM users WHERE id=:id', array(':id'=>$user_id))[0]['lname'];
$username = DB::query('SELECT username FROM users WHERE id=:id', array(':id'=>$user_id))[0]['username'];
$likes = DB::query('SELECT likes FROM posts WHERE id=:id', array(':id'=>$id))[0]['likes'];
$comments = DB::query('SELECT comments FROM posts WHERE id=:id', array(':id'=>$id))[0]['comments'];
$posted_at = DB::query('SELECT posted_at FROM posts WHERE id=:id', array(':id'=>$id))[0]['posted_at'];
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
                                        url: "/exapi/birux.postsLike?id=" + $(this).attr('data-id'),
                                        processData: false,
                                        contentType: "application/json",
                                        data: '',
                                        success: function(r) {
                                                var res = JSON.parse(r)
                                                if (res.YourLike ===  0) {
                                                    $("[data-id='"+buttonid+"']").html('<a data-id="'+buttonid+'" style="float: left;" class="nav__link"><i class="bx bx-like nav__icon"></i><span class="nav__namec ml-3">'+res.Likes+'</span></a>')
                                                } else if (res.YourLike === 1) {
                                                    $("[data-id='"+buttonid+"']").html('<a data-id="'+buttonid+'" style="float: left;" class="nav__link"><i style="color: #0d6efd !important;" class="bx bx-like nav__icon"></i><span style="color: #0d6efd !important;" class="nav__namec ml-3">'+res.Likes+'</span></a>')
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
        <h2>Исследовать сообщества</h2>




            <?php
            $users = DB::query('SELECT * FROM `groups`');
            foreach ($users as $u) {
                echo '<div class="card mb-3">
                <div class="card-body">
                
                    <img src="'.$u['photo'].'" style="object-fit: cover; width: 75px; height: 75px; border-radius: 150px; margin-top: -33px;" class="fill-current mp-5 mt-1">
                    <h5 style="margin-bottom: -0px;" href="testings" class="col-sm-10 d-inline-block font-weight-bold"><a href="/g/'.$u['link'].'">'.$u['namegroup'].'</a><br><p href="testings" style="font-size: 15px; font-weight: 500; margin-top: -45px;" class="col-10 d-inline-block font-weight-bold"></p></h5>
                    
                    <p href="testings" class="col-10 d-inline-block font-weight-bold mt-3">'.htmlspecialchars($u['about']).'</p>
    
    
    
    
                </div>
            </div>';
            } ?>
        
        
    </div>
</body>

</html>