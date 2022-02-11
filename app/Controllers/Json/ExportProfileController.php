<?php


$array = array(
  'first_name' => $fname,
  'last_name' => $lname,
  'username' => $username,
  'postid' => $p['id'],
  'body' => $p['body'],
  'posted_at' => $p['posted_at'],
  'userid' => $p['user_id'],
  'likes' => $p['likes'],
  'comments' => $p['comments'],
  'views' => $p['views'],
  'reposts' => $p['repost'],
);

$json = json_encode($array);
$file = fopen($_SERVER['DOCUMENT_ROOT'].'/cdn/docs/'.generateRandomString().'.json', "w");
fwrite($file, $json);
fclose($file);
if ($_ENV['CDN'] === 'true') {
    header("Location: {$_ENV['CDNURL']}/cdn/docs/".generateRandomString().".json");
}

?>