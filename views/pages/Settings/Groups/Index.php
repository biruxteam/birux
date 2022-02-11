<?php
include($_SERVER['DOCUMENT_ROOT'] . '/views/components/Sidebar.php');
$ownerid = DB::query("SELECT owner_id FROM `groups` WHERE link=:link", array(':link'=>$namegroup))[0]['owner_id'];

if ($ownerid === isLoggedIn()) {
    die('allowed');
}
