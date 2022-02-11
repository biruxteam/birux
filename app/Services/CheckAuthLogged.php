<?php
$url = $_SERVER['REQUEST_URI'];
if (!isLoggedIn()) {
    header("Location: https://{$_SERVER['SERVER_NAME']}/login?forwardurl=https://{$_SERVER['SERVER_NAME']}{$url}");
} 
if (isLoggedIn()) {
    DB::query('UPDATE users SET online = :online WHERE id=:userid', array(':userid'=>$uid, ':online'=>time()));
}
?>