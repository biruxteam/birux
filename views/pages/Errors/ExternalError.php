<?php

$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'], '.env');
$dotenv->load();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/static/css/libs.bundle.css">
    <link rel="stylesheet" href="/static/css/theme.bundle.css">
    <link href="/static/fonts/sf/stylesheet.css" rel="stylesheet">
    <link href="/static/css/appx.css" rel="stylesheet">
    <title>Birux | Восстановление пароля</title>
    <style>
        body {
            animation-duration: 3s;
            animation-name: slidein;
        }
        
        @keyframes slidein {
            from {
                margin-left: 100%;
                width: 400%;
            }
            to {
                margin-left: 0%;
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <section>
        <div class="container d-flex flex-column">
            <div  class="row align-items-center justify-content-center gx-0 min-vh-100">
                <div  class="col-12 col-md-6 col-lg-4 py-8 py-md-11">
                    <p class="mb-0">
                            <b>Ой-ой! Что-то сломалось!</b><br><br>
                            <b>Код ошибки:</b> <?php echo filter_var ($_GET['errorcode'], FILTER_SANITIZE_STRING); ?><br>
                            <b>PHP:</b> <?php echo phpversion(); ?><br>
                            <b>hostname:</b> <?php echo gethostname(); ?> <br>
                            <b>ClaraPHP:</b> <?php echo $_ENV['CLARAPHP']; ?>
                        
                    </p>
                </div>
                <div class="col-lg-7 offset-lg-1 align-self-stretch d-none d-lg-block">
                    <div class="h-100 w-cover bg-cover" style="background-image: url(/static/img/cover-maintenance.png);"></div>
                    <div class="shape shape-start shape-fluid-y text-white">
                        <svg viewbox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h100v386l-50 772v386H0V0z" fill="currentColor"></path></svg> </div>

                </div>
            </div>
        </div>
    </section>

    <script src="./static/js/vendor.bundle.js"></script>

    <script src="./static/js/theme.bundle.js"></script>

</body>

</html>