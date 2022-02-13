<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/SystemVariables.php');
if (isset($_GET['token'])) {
    if (DB::query('SELECT user_id FROM login_tokens WHERE token=:id', array(':id'=>$_GET['token']))[0]['user_id'] === isLoggedIn()) {
        $tokenuserid = DB::query('SELECT user_id FROM login_tokens WHERE token=:id', array(':id'=>$_GET['token']))[0]['user_id'];
        $postuserid = DB::query('SELECT user_id FROM posts WHERE id=:id', array(':id'=>$_GET['postid']))[0]['user_id'];
        if ($postuserid === isLoggedIn()) {
            if ($tokenuserid === isLoggedIn()) {
                if (DB::query('SELECT pinnedpost_id FROM users WHERE id=:id', array(':id'=>isLoggedIn()))[0]['pinnedpost_id'] === $_GET['postid']) {
                    DB::query('UPDATE users SET pinnedpost_id=0 WHERE id=:id', array(':id'=>isLoggedIn()));
                }
                DB::query('DELETE FROM posts WHERE id=:id', array(':id'=>$_GET['postid']));
                header('Location: /');
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