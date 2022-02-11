<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/Auth.php');
$_USERNAME = DB::query('SELECT username FROM users WHERE id=:id', array(':id'=>isLoggedIn()))[0]['username'];
$_PHOTO = DB::query('SELECT photo FROM users WHERE id=:id', array(':id'=>isLoggedIn()))[0]['photo'];
$_TOKEN = DB::query('SELECT token FROM login_tokens WHERE user_id=:id', array(':id'=>isLoggedIn()))[0]['token'];
$_USERID = DB::query('SELECT user_id FROM login_tokens WHERE user_id=:id', array(':id'=>isLoggedIn()))[0]['user_id'];
$_THEMETYPE = DB::query('SELECT themetype FROM personalization_tokens WHERE user_id=:id', array(':id'=>isLoggedIn()))[0]['themetype'];