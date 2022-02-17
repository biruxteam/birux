<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/Auth.php');
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/CheckAuthLogged.php');
    $postId = $_GET['id'];
    $token = $_COOKIE['SNID'];
    $likerId = DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($token)))[0]['user_id'];
    if ($_GET['likeid'] === '1') {
        if (!DB::query('SELECT user_id FROM video_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postId, ':userid'=>$likerId))) {
            if (DB::query('SELECT user_id FROM video_dislikes WHERE user_id=:uid AND post_id=:postid', array(':uid'=>$likerId, ':postid'=>$postId))) {
                DB::query('DELETE FROM video_dislikes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postId, ':userid'=>$likerId));
                DB::query('UPDATE video SET dislikes=dislikes-1 WHERE id=:postid', array(':postid'=>$postId));
            }
            DB::query('UPDATE video SET likes=likes+1 WHERE id=:postid', array(':postid'=>$postId));
            DB::query('INSERT INTO video_likes VALUES (\'0\', :postid, :userid)', array(':postid'=>$postId, ':userid'=>$likerId));
            echo json_encode(array(
                'likes' => DB::query('SELECT likes FROM video WHERE id=:postid', array(':postid'=>$postId))[0]['likes'],
                'dislikes' => DB::query('SELECT dislikes FROM video WHERE id=:postid', array(':postid'=>$postId))[0]['dislikes'],
                'yourlike' => 1,
                'yourdislike' => 0
            ));
        } else {
            DB::query('UPDATE video SET likes=likes-1 WHERE id=:postid', array(':postid'=>$postId));
            DB::query('DELETE FROM video_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postId, ':userid'=>$likerId));
            if (DB::query('SELECT user_id FROM video_likes WHERE user_id=:uid AND post_id=:postid', array(':uid'=>$likerId, ':postid'=>$postId))) {
                DB::query('DELETE FROM video_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postId, ':userid'=>$likerId));
                DB::query('UPDATE video SET likes=likes-1 WHERE id=:postid', array(':postid'=>$postId));
            }
            echo json_encode(array(
                'likes' => DB::query('SELECT likes FROM video WHERE id=:postid', array(':postid'=>$postId))[0]['likes'],
                'dislikes' => DB::query('SELECT dislikes FROM video WHERE id=:postid', array(':postid'=>$postId))[0]['dislikes'],
                'yourlike' => 0,
                'yourdislike' => 0
            ));
        }
    }

    if ($_GET['dislikeid'] === '1') {
        if (!DB::query('SELECT user_id FROM video_dislikes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postId, ':userid'=>$likerId))) {
            DB::query('UPDATE video SET dislikes=dislikes+1 WHERE id=:postid', array(':postid'=>$postId));
            DB::query('INSERT INTO video_dislikes VALUES (\'0\', :postid, :userid)', array(':postid'=>$postId, ':userid'=>$likerId));
            if (DB::query('SELECT user_id FROM video_likes WHERE user_id=:uid AND post_id=:postid', array(':uid'=>$likerId, ':postid'=>$postId))) {
                DB::query('DELETE FROM video_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postId, ':userid'=>$likerId));
                DB::query('UPDATE video SET likes=likes-1 WHERE id=:postid', array(':postid'=>$postId));
            }
            echo json_encode(array(
                'likes' => DB::query('SELECT likes FROM video WHERE id=:postid', array(':postid'=>$postId))[0]['likes'],
                'dislikes' => DB::query('SELECT dislikes FROM video WHERE id=:postid', array(':postid'=>$postId))[0]['dislikes'],
                'yourlike' => 0,
                'yourdislike' => 1
            ));
            } else {
            DB::query('UPDATE video SET dislikes=dislikes-1 WHERE id=:postid', array(':postid'=>$postId));
            DB::query('DELETE FROM video_dislikes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postId, ':userid'=>$likerId));
            if (DB::query('SELECT user_id FROM video_likes WHERE user_id=:uid AND post_id=:postid', array(':uid'=>$likerId, ':postid'=>$postId))) {
                DB::query('DELETE FROM video_likes WHERE post_id=:postid AND user_id=:userid', array(':postid'=>$postId, ':userid'=>$likerId));
                DB::query('UPDATE video SET likes=likes-1 WHERE id=:postid', array(':postid'=>$postId));
            }
            echo json_encode(array(
                'likes' => DB::query('SELECT likes FROM video WHERE id=:postid', array(':postid'=>$postId))[0]['likes'],
                'dislikes' => DB::query('SELECT dislikes FROM video WHERE id=:postid', array(':postid'=>$postId))[0]['dislikes'],
                'yourlike' => 0,
                'yourdislike' => 0
            ));
        }
    }

    
