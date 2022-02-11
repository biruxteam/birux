
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
        <h2>Изменить данные профиля</h2>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/settings">Настройки</a></li>
    <li class="breadcrumb-item active" aria-current="page">Изменить данные профиля</li>
  </ol>
</nav>
<div id="resultt"></div>
<form action="/settings/image" method="post" id="postForm" enctype="multipart/form-data">
<div class="d-flex">
                                                        <div class="d-block">
                                                            <div class="top-0 right-0 bottom-0 left-0"></div>
                                                            </div>
                                                        <div class="ml-1 col-12">
                                                            <form action="settings?page=profileedit" method="post">
                                                            <div class="d-block w-100">
                                                            </div><div class="form-group">
                                                            <div class="row g-3">
                                                                <div class="col-sm-6">
                                                                    <label for="firstName" style="color: #fff;" class="form-label">Имя</label>
                                                                    <br><input name="fnamed" type="text" class="form-control" id="firstName" placeholder="" value="Maksim"><br>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label for="lastName" style="color: #fff;" class="form-label">Фамилия</label>
                                                                    <input name="lnamed" type="text" class="form-control" id="lastName" placeholder="" value="Zhuykov">
                                                                </div>
                                                            </div><br>
                                                            <label for="lastName" style="color: #fff;" class="form-label">Никнейм</label>
                                                            <div class="input-group mb-2">
                                                                            <div class="input-group-prepend">
                                                                                
                                                                            <div class="input-group-text">@</div>
                                                                            </div>
                                                                            <input name="usernamed" type="text" class="form-control" id="inlineFormInputGroup" placeholder="" value="Mohooks">
                                                                        </div>
                                                            <br><button type="submit" name="updateflname" class="btn btn-primary">Обновить</button>
                                                            
                                                    </div></form>
                                                        </div>
                                                    </div>
</form>
    </div>
</body>

</html>