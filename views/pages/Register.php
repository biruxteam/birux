<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/Auth.php');
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/CheckAuth.php');
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/Tracy.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/static/css/appx.css" rel="stylesheet">
    <link href="/static/fonts/sf/stylesheet.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<div id="root"></div>
<script>
	
	$(document).ready(function() {
    $('#registrationForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '/exapi/birux.register',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);

                console.log(response);
                if (jsonData.errorcode == "9") {
                    $("#result").html("<div class='alert alert-dangernew container mt-5' role='alert'>Никнейм уже занят!</div>");
                } else if (jsonData.errorcode == "8") {
                    $("#result").html("<div class='alert alert-dangernew container mt-5' role='alert'>В никнейме должно быть от 5 до 25 символов!</div>");
                } else if (jsonData.errorcode == "7") {
                    $("#result").html("<div class='alert alert-dangernew container mt-5' role='alert'>Имя должно быть от 2 до 20 символов!</div>");
                } else if (jsonData.errorcode == "6") {
                    $("#result").html("<div class='alert alert-dangernew container mt-5' role='alert'>Фамилия должна быть от 2 до 20 символов!</div>");
                } else if (jsonData.errorcode == "5") {
                    $("#result").html("<div class='alert alert-dangernew container mt-5' role='alert'>В имени пользователя некорректные символы!</div>");
                } else if (jsonData.errorcode == "4") {
                    $("#result").html("<div class='alert alert-dangernew container mt-5' role='alert'>Пароль должен быть длиннее 5 символов!</div>");
                } else if (jsonData.errorcode == "3") {
                    $("#result").html("<div class='alert alert-dangernew container mt-5' role='alert'>Почта некорректного формата!</div>");
                } else if (jsonData.errorcode == "2") {
                    $("#result").html("<div class='alert alert-dangernew container mt-5' role='alert'>Почта уже зарегистрирована</div>");
                } else if (jsonData.errorcode == "0") {
                    window.location.replace("/feed");
                }
           }
       });
     });
});

</script>
<body>
<div id="result"></div>
    <div style="background-color: #e4ebf5; border-radius: 10px;"  class="container mt-5">
        <form method="post" style="margin-top: 15px; padding-top: 15px;" id="registrationForm">
            <h2>Регистрация аккаунта Birux</h2>
            <div class="row g-3 mt-1">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Имя</label>
                    <input name="fname" type="text" class="form-control" id="txt_username" placeholder="" value="">
                </div>
                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Фамилия</label>
                    <input name="lname" type="text" class="form-control" id="lastName" placeholder="" value="">
                </div>
                <div class="col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label">Имя пользователя</label>
                    <input name="username" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label">Электронная почта</label>
                    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            <div class="mb-3 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Пароль</label>
                <input name="password" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            
            </div>
            <div class="mb-3 form-check col-sm-9">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label for="scales">Я принимаю <a href="/app/privacy">условия сбора информации</a> и <a href="/app/terms">правила сообщества</a></label>
            </div>
            <button type="submit" id="register" class="btn btn-primary mb-3 mt-3">Зарегистрироваться</button>
        </form>
    </div>
    
</body>
	

</html>