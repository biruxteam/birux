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
        <h2>Персонализация</h2>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/settings">Настройки</a></li>
    <li class="breadcrumb-item active" aria-current="page">Персонализация</li>
  </ol>
</nav>
<div id="resultt"></div>
<form id="postForm">
<label for="i_not_found_page">Тип темы</label>
                                                            <select name="themetype" class="form-select" aria-label="Default select example">
                                                                <option value="1" <?php if ($_THEMETYPE === '1') { ?> selected <?php } ?>>Светлая</option>
                                                                <option value="2" <?php if ($_THEMETYPE === '2') { ?> selected <?php } ?>>Тёмная</option>
                                                            </select><br>
<button type="submit" id="createpost" class="btn btn-primary mb-3 mt-3">Изменить</button>
</form>
    </div>
</body>

</html>