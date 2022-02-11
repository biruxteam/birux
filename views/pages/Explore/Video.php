
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
<?php include($_SERVER['DOCUMENT_ROOT'] . '/views/components/Sidebar.php'); ?>
<div class="container padding" style="margin-top:70px">
        <div class="row row-cols-1 padding">
            <?php

            $videos = DB::query('SELECT * FROM video');
            foreach ($videos as $v) {
                $vusername = DB::query('SELECT username FROM users WHERE id=:id', array(':id'=>$v['user_id']))[0]['username'];
                echo '<div class="col-md-4">
                
                <img src="https://via.placeholder.com/1280x720" alt="">
                <img src="'.$photo.'" style="object-fit: cover; width: 45px; height: 45px; border-radius: 150px; margin-top: -33px;" class="fill-current mp-5">
                <h5 style="margin-bottom: -0px; word-break: break-word;" href="testings" class="col-10 ml-3 mt-2 d-inline-block font-weight-bold"><a href="/video/'.$v['id'].'">'.$v['name'].'</a>
                <br><p href="testings" style="font-size: 15px; font-weight: 500; margin-top: -45px;" class="col-10 d-inline-block font-weight-bold"><a href="'.$vusername.'">'.$vusername.'</a></p></h5>
            </div>';
            }

            ?>

        </div>
</div>