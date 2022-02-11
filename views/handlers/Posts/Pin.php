<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/SystemVariables.php');
if (isset($_GET['token'])) {
    if (DB::query('SELECT user_id FROM login_tokens WHERE token=:id', array(':id'=>$_GET['token']))[0]['user_id'] === isLoggedIn()) {
        $tokenuserid = DB::query('SELECT user_id FROM login_tokens WHERE token=:id', array(':id'=>$_GET['token']))[0]['user_id'];
        $postuserid = DB::query('SELECT user_id FROM posts WHERE id=:id', array(':id'=>$_GET['postid']))[0]['user_id'];
        if ($postuserid === isLoggedIn()) {
            if ($tokenuserid === isLoggedIn()) {
                DB::query('UPDATE users SET pinnedpost_id = :about WHERE id=:userid', array(':userid'=>isLoggedIn(), ':about'=>$_GET['postid']));
                header('Location: /'.$_USERNAME.'');
            } else {
                die(include($_SERVER['DOCUMENT_ROOT'] . '/views/pages/Errors/KernelError.php'));
            }
        } else {
            die(include($_SERVER['DOCUMENT_ROOT'] . '/views/pages/Errors/KernelError.php'));
        }   
    } else {
        die(include($_SERVER['DOCUMENT_ROOT'] . '/views/pages/Errors/KernelError.php'));
    }
}