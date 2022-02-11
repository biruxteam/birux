<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/Auth.php');
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/CheckAuthLogged.php');
    $postId = $_GET['id'];
    $token = $_COOKIE['SNID'];
    $likerId = DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($token)))[0]['user_id'];

    if (!DB::query('SELECT user_id FROM posts_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postId, ':userid'=>$likerId))) {

        DB::query('UPDATE posts SET likes=likes+1 WHERE id=:postid', array(':postid'=>$postId));
        DB::query('INSERT INTO posts_likes VALUES (\'0\', :postid, :userid)', array(':postid'=>$postId, ':userid'=>$likerId));
        echo json_encode(array(
            'Likes' => DB::query('SELECT likes FROM posts WHERE id=:postid', array(':postid'=>$postId))[0]['likes'],
            'YourLike' => 1
        ));
    } else {
        DB::query('UPDATE posts SET likes=likes-1 WHERE id=:postid', array(':postid'=>$postId));
        DB::query('DELETE FROM posts_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postId, ':userid'=>$likerId));
        echo json_encode(array(
            'Likes' => DB::query('SELECT likes FROM posts WHERE id=:postid', array(':postid'=>$postId))[0]['likes'],
            'YourLike' => 0
        ));
    }

    