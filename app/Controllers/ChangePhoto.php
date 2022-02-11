<?php

function generateRandomString($length = 128) {
    $characters = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'], '.env');
$dotenv->load();

if (isset($_POST['submit'])) {

//$uploadDir = $_SERVER['DOCUMENT_ROOT']."/cdn";


$file = $_FILES['filebody'];
print_r($file);
$fileName = generateRandomString();
$filePath = pathinfo($file['name']);

if ($filePath['extension'] === 'png' || $filePath['extension'] === 'jpg' || $filePath['extension'] === 'gif' || $filePath['extension'] === 'jpeg') {
    $uploadDir = $_SERVER['DOCUMENT_ROOT']."/cdn/images";
    move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/cdn/images/".$fileName.".".$filePath['extension']."");
    if ($_ENV['CDN'] === 'true') {
        $photourl = $_ENV['CDNURL']."/images/".$fileName.".".$filePath['extension']."";
    } else {
        $photourl = "/cdn/images/".$fileName.".".$filePath['extension']."";
    }
    DB::query('UPDATE users SET photo = :about WHERE id=:userid', array(':userid'=>$_POST['uid'], ':about'=>$photourl));
    header('Location: /settings/image');
}
}