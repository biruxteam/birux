<?php


if (isset($_GET['postid'])) {

$user_id = DB::query('SELECT user_id FROM posts WHERE id=:id', array(':id'=>$_GET['postid']))[0]['user_id'];
$fname = DB::query('SELECT fname FROM users WHERE id=:id', array(':id'=>$user_id))[0]['fname'];
$lname = DB::query('SELECT lname FROM users WHERE id=:id', array(':id'=>$user_id))[0]['lname'];
$username = DB::query('SELECT username FROM users WHERE id=:id', array(':id'=>$user_id))[0]['username'];
$array = array(
    'first_name' => $fname,
    'last_name' => $lname,
    'username' => $username,
    'postid' => $_GET['postid'],
    'body' => DB::query('SELECT body FROM posts WHERE id=:id', array(':id'=>$_GET['postid']))[0]['body'],
    'posted_at' => DB::query('SELECT posted_at FROM posts WHERE id=:id', array(':id'=>$_GET['postid']))[0]['posted_at'],
    'userid' => DB::query('SELECT user_id FROM posts WHERE id=:id', array(':id'=>$_GET['postid']))[0]['user_id'],
    'likes' => DB::query('SELECT likes FROM posts WHERE id=:id', array(':id'=>$_GET['postid']))[0]['likes'],
    'comments' => DB::query('SELECT comments FROM posts WHERE id=:id', array(':id'=>$_GET['postid']))[0]['comments'],
    'views' => DB::query('SELECT views FROM posts WHERE id=:id', array(':id'=>$_GET['postid']))[0]['views'],
    'reposts' => DB::query('SELECT repost FROM posts WHERE id=:id', array(':id'=>$_GET['postid']))[0]['repost'],
  );
  
  $json = json_encode($array);
  $fileName = uniqid('JSON_', true);
  $file = fopen($_SERVER['DOCUMENT_ROOT'].'/cdn/docs/'.$fileName.'.json', 'a');
  fwrite($file, $json);
  fclose($file);
  if ($_ENV['CDN'] === 'true') {
      header("Location: {$_ENV['CDNURL']}/docs/".$fileName.".json");
  } else {
    header("Location: /cdn/docs/".$fileName.".json");
  }
}