<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/Auth.php');
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/CheckAuth.php');
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
    <link href="/static/fonts/ttc/stylesheet.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    $(document).ready(function() {
        $('#registrationForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '/exapi/birux.login',
                data: $(this).serialize(),
                success: function(response) {
                    var jsonData = JSON.parse(response);

                    console.log(response);
                    if (jsonData.errorcode == "1") {
                        $("#result").html("<div class='alert alert-dangernew container mt-5' role='alert'>Неправильная почта или пароль!</div>");
                    } else {
                        window.location.replace("/feed");
                    }
                }
            });
        });
    });
</script>
<style>
    body {
        background-color: #000;
    }
    h1,h2,h3,h4,h5,h6 {
        font-family: TT Commons;
        color: aliceblue;
    }
    label {
        color: aliceblue;
    }
    .loginbox {
        background-color: #2B477D;
        -webkit-box-shadow: 0px 6px 100px 21px rgba(66, 138, 255, 0.2);
-moz-box-shadow: 0px 6px 100px 21px rgba(66, 138, 255, 0.2);
box-shadow: 0px 6px 100px 21px rgba(66, 138, 255, 0.2);
    }
    .btn {
        -webkit-box-shadow: 0px 6px 71px -14px rgba(66, 138, 255, 0.2);
-moz-box-shadow: 0px 6px 71px -14px rgba(66, 138, 255, 0.2);
box-shadow: 0px 6px 71px -14px rgba(66, 138, 255, 0.2);
background-color: #162F62;
border-color: #162F62;
    }
    .btn:hover {
        background-color: #698CD0;
border-color: #698CD0;
    }
</style>
<body>
    <div id="result"></div>
    <div style="border-radius: 10px; margin: auto;" class="loginbox container mt-5">
        <form method="post" style="margin-top: 15px; padding-top: 15px;" id="registrationForm">
            <center><h2>Авторизация в аккаунт Birux</h2></center>
            <div class="row g-3 mt-1">
                <div class="col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label">Электронная почта</label>
                    <input name="username" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label">Пароль</label>
                    <input name="password" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
            <button type="submit" id="register" class="btn btn-primary mb-3 mt-3 btn-lg">Войти в аккаунт</button>
        </form>
    </div>

</body>


</html>