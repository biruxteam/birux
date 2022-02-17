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
    $(document).ready(function() {
        $('#postForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '/exapi/birux.aboutChange',
                data: $(this).serialize(),
                success: function(response) {
                    var jsonData = JSON.parse(response);

                    console.log(response);
                    if (jsonData.errorcode == "1") {
                        $("#resultt").html("<div class='alert alert-dangernew container' role='alert'>Может быть, что-нибудь добавите в описание?</div>");
                    } else if (jsonData.errorcode == "0") {
                        $("#resultt").html("<div class='alert alert-successnew container' role='alert'>Описание профиля успешно изменено!</div>");
                    }
                }
            });
        });
    });
</script>
    <div class="container mt-3">
        <h2>Изменить описание профиля</h2>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/settings">Настройки</a></li>
    <li class="breadcrumb-item active" aria-current="page">Изменить описание профиля</li>
  </ol>
</nav>
<div id="resultt"></div>
<form id="postForm">
<textarea class="form-control" name="bodyabout" placeholder="Расскажите о себе, например: Программист из Запорожья, 22 года." cols="30" rows="10" value="<?php echo DB::query('SELECT about FROM users WHERE id=:id', array(':id'=>isLoggedIn()))[0]['about']; ?>"></textarea>
<button type="submit" id="createpost" class="btn btn-primary mb-3 mt-3">Изменить</button>
</form>
    </div>
</body>

</html>