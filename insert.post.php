<?php 
require "bootstrap.php";

if (isset($_POST['insertBtn'])) {
    $post->InsertPost('posts');
}


require "View/view.insert.post.php";
?>