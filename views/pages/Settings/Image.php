<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Controllers/ChangePhoto.php');

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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>

    function photoChange() {
        $("#r").html('<br><button class="btn btn-primary" type="button" disabled><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Загрузка...</button>');
    }
        
</script>
    <div class="container mt-3">
        <h2>Изменить фотографию профиля</h2>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/settings">Настройки</a></li>
    <li class="breadcrumb-item active" aria-current="page">Изменить фотографию профиля</li>
  </ol>
</nav>
<div id="resultt"></div>
<form action="/settings/image" method="post" id="postForm" enctype="multipart/form-data">
<p class="lead">Здесь вы можете обновить фотографию вашего профиля. Сейчас она выглядит вот так:</p>
                                                            <img src="<?=$_PHOTO?>" width="200"><br><br>
                                                            <input type="text" value="<?=isLoggedIn()?>" name="uid" style="display: none;">
                                                            <input id="filebody" type="file" name="filebody"></input><br>
                                                            <div id="r"><br><button id="t" name="submit" type="submit" name="updateimg" class="btn btn-primary">Обновить</button></div>
</form>
    </div>
</body>

</html>