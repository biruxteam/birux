<?php
if (isLoggedIn()) {
    header("Location: https://{$_SERVER['SERVER_NAME']}/feed");
}
?>