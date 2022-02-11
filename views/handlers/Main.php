<?php

if (isset($_GET['act'])) {
    if ($_GET['act'] === 'pin') {
        include($_SERVER['DOCUMENT_ROOT'] . '/views/handlers/Posts/Pin.php');
    } else if ($_GET['act'] === 'delete') {
        include($_SERVER['DOCUMENT_ROOT'] . '/views/handlers/Posts/Delete.php');
    } else if ($_GET['act'] === 'json_post') {
        include($_SERVER['DOCUMENT_ROOT'] . '/views/handlers/Json/PostCreate.php');
    } else {

    }
} else {
    
}