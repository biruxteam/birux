<?php


$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'], '.env');
$dotenv->load();

function generateRandomString($length = 128) {
    $characters = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$postbody = $_POST['namevideo'];
$file = $_FILES['filebody'];
$fileName = generateRandomString();
$filePath = pathinfo($file['name']);
            if ($_FILES['filebody']['error'] != 4) {
                if ($filePath['extension'] === 'mp4' || $filePath['extension'] === 'avi' || $filePath['extension'] === 'wmv' || $filePath['extension'] === '3gp' || $filePath['extension'] === 'mkv') {
                    $uploadDir = $_SERVER['DOCUMENT_ROOT']."/cdn/video";
                    move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/cdn/video/".$fileName.".".$filePath['extension']."");
                    if ($_ENV['CDN'] === 'true') {
                        $photourl = $_ENV['CDNURL']."/video/".$fileName.".".$filePath['extension']."";
                    } else {
                        $photourl = "/cdn/video/".$fileName.".".$filePath['extension']."";
                    }
                    if (strlen($postbody) > 1) {
                        DB::query('INSERT INTO video VALUES (\'0\', :postbody, :date, :userid, :sourceurl, :likes, :dislikes)', array(':postbody'=>$postbody, ':date'=>time(), ':userid'=>$_POST['uid'], ':sourceurl'=>$photourl, ':likes'=>'0', ':dislikes'=>'0'));
                        $videoid = DB::query('SELECT id FROM video WHERE sourceurl=:sourceurl', array(':sourceurl'=>$photourl))[0]['id']; 
                        header("Location: https://{$_SERVER['SERVER_NAME']}/video/{$videoid}");
                    }
                }
            } else {
                header('Location: /feed');
            }








?>