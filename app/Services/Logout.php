<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/Auth.php');
DB::query('DELETE FROM login_tokens WHERE user_id=:userid', array(':userid'=>isLoggedIn()));
header('Location: /login');
?>