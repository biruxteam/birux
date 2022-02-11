<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/Controllers/Upload/Posts/PostsUploader.php');
?>

<form id="postForm" action="/g" method="post" enctype="multipart/form-data">
    <input id="images" type="file" name="filebody" id="filebody">
    <button name="submit">upload</button>
</form>
<div id="status"></div>