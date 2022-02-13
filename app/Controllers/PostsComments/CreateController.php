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
$postbody = $_POST['bodypost'];
$file = $_FILES['filebody'];
$fileName = generateRandomString();
$filePath = pathinfo($file['name']);
            if ($_FILES['filebody']['error'] != 4) {
                if ($filePath['extension'] === 'png' || $filePath['extension'] === 'jpg' || $filePath['extension'] === 'gif' || $filePath['extension'] === 'jpeg') {
                    $uploadDir = $_SERVER['DOCUMENT_ROOT']."/cdn/images";
                    move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/cdn/images/".$fileName.".".$filePath['extension']."");
                    if ($_ENV['CDN'] === 'true') {
                        $photourl = $_ENV['CDNURL']."/images/".$fileName.".".$filePath['extension']."";
                    } else {
                        $photourl = "/cdn/images/".$fileName.".".$filePath['extension']."";
                    }
                    DB::query('INSERT INTO posts VALUES (\'0\', :postbody, :time, :userid, 0, :photo, :audio, :video, :ppexists, :audioexists, :videoexists, :views, :comments, :repost)', array(':postbody'=>$postbody, ':userid'=>$_POST['uid'], ':time'=>time(), ':photo'=>$photourl, 'audio'=>'NONE', ':video'=>'NONE', ':ppexists'=>'1', ':audioexists'=>'0', ':videoexists'=>'0', ':views'=>'0', ':comments'=>'0', ':repost'=>'0'));
                    header('Location: /feed');
                } else if ($filePath['extension'] === 'mp3' || $filePath['extension'] === 'wma' || $filePath['extension'] === 'ogg' || $filePath['extension'] === 'wav') {
                    $uploadDir = $_SERVER['DOCUMENT_ROOT']."/cdn/music";
                    move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/cdn/music/".$fileName.".".$filePath['extension']."");
                    if ($_ENV['CDN'] === 'true') {
                        $photourl = $_ENV['CDNURL']."/music/".$fileName.".".$filePath['extension']."";
                    } else {
                        $photourl = "/cdn/music/".$fileName.".".$filePath['extension']."";
                    }
                    DB::query('INSERT INTO posts VALUES (\'0\', :postbody, :time, :userid, 0, :photo, :audio, :video, :ppexists, :audioexists, :videoexists, :views, :comments, :repost)', array(':postbody'=>$postbody, ':userid'=>$_POST['uid'], ':time'=>time(), ':photo'=>'NONE', 'audio'=>$photourl, ':video'=>'NONE', ':ppexists'=>'0', ':audioexists'=>'1', ':videoexists'=>'0', ':views'=>'0', ':comments'=>'0', ':repost'=>'0'));
                    header('Location: /feed');
                } else if ($filePath['extension'] === 'mp4' || $filePath['extension'] === 'avi' || $filePath['extension'] === 'wmv' || $filePath['extension'] === '3gp' || $filePath['extension'] === 'mkv') {
                    $uploadDir = $_SERVER['DOCUMENT_ROOT']."/cdn/video";
                    move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/cdn/video/".$fileName.".".$filePath['extension']."");
                    if ($_ENV['CDN'] === 'true') {
                        $photourl = $_ENV['CDNURL']."/video/".$fileName.".".$filePath['extension']."";
                    } else {
                        $photourl = "/cdn/video/".$fileName.".".$filePath['extension']."";
                    }
                    DB::query('INSERT INTO posts VALUES (\'0\', :postbody, :time, :userid, 0, :photo, :audio, :video, :ppexists, :audioexists, :videoexists, :views, :comments, :repost)', array(':postbody'=>$postbody, ':userid'=>$_POST['uid'], ':time'=>time(), ':photo'=>'NONE', 'audio'=>'NONE', ':video'=>$photourl, ':ppexists'=>'0', ':audioexists'=>'0', ':videoexists'=>'1', ':views'=>'0', ':comments'=>'0', ':repost'=>'0'));
                    header('Location: /feed');
                }
            } else {
                DB::query('INSERT INTO posts VALUES (\'0\', :postbody, :time, :userid, 0, :photo, :audio, :video, :ppexists, :audioexists, :videoexists, :views, :comments, :repost)', array(':postbody'=>$postbody, ':userid'=>$_POST['uid'], ':time'=>time(), ':photo'=>'NONE', 'audio'=>'NONE', ':video'=>'NONE', ':ppexists'=>'0', ':audioexists'=>'0', ':videoexists'=>'0', ':views'=>'0', ':comments'=>'0', ':repost'=>'0'));
            }








?>