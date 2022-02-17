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

            <h2>Создать NEON</h2><br>
            <div class="alert alert-neonnew" role="alert">
                <h4 class="neonnewt">Представляем: NEON</h4>
                <p class="neonnewt">NEON - это маркетплейс для авторов, созданный на основе блокчейна TON. Здесь можно продавать своё творчество в виде NFT, продавать подписки к эксклюзивным постам, пополнять баланс внутреннего кошелька TON и делать многое другое.</p>
            </div>

            

        <div class="container padding" style="margin-top:30px;">
        <div class="row padding">
            <div class="col-md-4">
                
                
                <div class="card" style="margin-bottom:10px;">
                    <div class="card-body">
                    <img width="60" style="margin-bottom: 25px;" src="/static/img/web3/ton.png" alt="">
                    <h5 class="card-title">Платный пост</h5>
                    <p>Создайте пост с платным контентом</p>
                    <a href="#" class="btn btn-primary">Создать</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                
                
                <div class="card" style="margin-bottom:10px;">
                    <div class="card-body">
                    <img width="60" style="margin-bottom: 25px;" src="/static/img/web3/nft.png" alt="">
                    <h5 class="card-title">NFT</h5>
                    <p>Продавайте ваше творчество в виде фотографий</p>
                    <a href="#" class="btn btn-primary">Создать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
</body>

</html>