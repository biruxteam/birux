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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    $(document).ready(function() {
        $('#postForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '/exapi/birux.groupCreate',
                data: $(this).serialize(),
                success: function(response) {
                    var jsonData = JSON.parse(response);

                    console.log(response);
                    if (jsonData.errorcode == "1") {
                        $("#result").html("<div class='alert alert-dangernew container' role='alert'>Может, что-нибудь напишите в свой пост?</div>");
                    } else {
                        window.location.replace('/g/'+jsonData.link);
                    }
                }
            });
        });
    });
</script>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/views/components/Sidebar.php'); ?>
    <div class="container mt-3">
        <h2>Создание сообщества</h2>      

        <div id="result" class="result"></div>
        <form id="postForm">
        <label class="mt-3">Название сообщества</label>
        <input type="text" class="form-control" name="namegroup"></input>
        <label class="mt-3">Описание</label>
        <textarea type="text" class="form-control" name="bodygroup"></textarea>
        <button type="submit" id="createpost" class="btn btn-primary mb-3 mt-3">Создать</button>
        </form>

    </div>
</body>

</html>