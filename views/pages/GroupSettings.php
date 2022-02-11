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
        <h2>Выберите сообщество</h2>
        <?php
        $groups = DB::query('SELECT * FROM groups WHERE owner_id=:id', array(':id'=>isLoggedIn()));
        foreach ($groups as $g) {
            $link = $g['link'];
            $namegroup = $g['namegroup'];
            $photo = $g['photo'];
            echo '<div class="card">
            <div class="card-body">
                <img src="'.$photo.'" style="object-fit: cover; width: 45px; height: 45px; border-radius: 150px; border: 150 solid #000;" class="fill-current mp-5">
                <h5 href="testings" class="col-10 ml-3 d-inline-block font-weight-bold"><a href="/g/'.$link.'/settings">'.$namegroup.'</a></h5>
            </div>
        </div><br>';
        }
        ?>
        
        
        
    </div>
</body>

</html>