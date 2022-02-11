<?php
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'], '.env');
$dotenv->load();
function microtime_float() {
  list($usec, $sec) = explode(" ", microtime());
  return ((float)$usec + (float)$sec);
}

$start = microtime_float();
$fp = fsockopen($_ENV['STATUSURL1'], 80, $errno, $errstr, 30);
$end = microtime_float();
$ms = ($end - $start) * 1000;

$one = sprintf('%s ms', $ms);

$startt = microtime_float();
$fpp = fsockopen($_ENV['STATUSURL2'], 80, $errno, $errstr, 30);
$endd = microtime_float();
$mss = ($endd - $startt) * 1000;

$two = sprintf('%s ms', $mss);

$starttt = microtime_float();
$fppp = fsockopen($_ENV['STATUSURL3'], 80, $errno, $errstr, 30);
$enddd = microtime_float();
$msss = ($enddd - $starttt) * 1000;

$three = sprintf('%s ms', $msss);



include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/Ping.php');

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
    <div class="container mt-3">
        <h2>Статус сервисов</h2>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Service</th>
      <th scope="col">Ping</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">register</th>
      <td><?=$one?></td>
      <td><?php if ($one < 100) { ?> <span class="badge bg-success">OK</span> <?php } else if ($one < 200) { ?> <span class="badge bg-warning">WARNING</span> <?php } else if ($one < 400) { ?> <span class="badge bg-danger">BAD</span> <?php } else { ?> <span class="badge bg-danger">BAD</span> <?php } ?></td>
    </tr>
    <tr>
      <th scope="row">posts</th>
      <td><?=$two?></td>
      <td><?php if ($two < 100) { ?> <span class="badge bg-success">OK</span> <?php } else if ($two < 200) { ?> <span class="badge bg-warning">WARNING</span> <?php } else if ($two < 400) { ?> <span class="badge bg-danger">BAD</span> <?php } else { ?> <span class="badge bg-danger">BAD</span> <?php } ?></td>
    </tr>
    <tr>
      <th scope="row">profile</th>
      <td><?=$three?></td>
      <td><?php if ($three < 100) { ?> <span class="badge bg-success">OK</span> <?php } else if ($three < 200) { ?> <span class="badge bg-warning">WARNING</span> <?php } else if ($three < 400) { ?> <span class="badge bg-danger">BAD</span> <?php } else { ?> <span class="badge bg-danger">BAD</span> <?php } ?></td>
    </tr>
  </tbody>
</table>
        
    </div>
</body>

</html>