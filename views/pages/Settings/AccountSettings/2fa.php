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
<style>
    .hidden {
        display: none !important;
    }
</style>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/views/components/Sidebar.php'); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        function twofa() {
        var chbox;
        chbox=document.getElementById('2fa');
	    if (chbox.checked) {
            document.getElementById("2faform").classList.remove('hidden');
	    } else {
		    document.getElementById("2faform").classList.add('hidden');
	    }
    }
    $(document).ready(function() {
        $('#postForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '/exapi/birux.themeChange',
                data: $(this).serialize(),
                success: function(response) {
                    var jsonData = JSON.parse(response);

                    console.log(response);
                    if (jsonData.themetypecode == "1") {
                        $(".themetype").html("<link href='/static/css/appx.css' rel='stylesheet'>");
                    } else if (jsonData.themetypecode == "2") {
                        $(".themetype").html("<link href='/static/css/appx.dark.css' rel='stylesheet'>");
                    }
                }
            });
        });
    });
</script>
    <div class="container mt-3">
        <h2>Двухфакторная аутентификация</h2>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/settings">Настройки</a></li>
    <li class="breadcrumb-item" aria-current="page">Настройки аккаунта</li>
    <li class="breadcrumb-item active" aria-current="page">Двухфакторная аутентификация</li>
  </ol>
</nav>
<div id="resultt"></div>
<form id="postForm">
<div class="form-check form-switch">
  <input onchange="twofa()" class="form-check-input" type="checkbox" role="switch" id="2fa">
  <label class="form-check-label" for="2fa">Включить двухфакторную аутентификацию</label>
</div>
<div class="row g-3 mt-1 hidden" id="2faform">
                <div class="col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label">Введите кодовый пароль</label>
                    <input name="username" type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label">Повторите кодовый пароль</label>
                    <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
</form>
    </div>
</body>

</html>