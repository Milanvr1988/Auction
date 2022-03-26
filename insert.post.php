<?php 
require "bootstrap.php";

if (!$_SESSION['logUser']) {
    header('location:index.php');
}

if (isset($_POST['insertBtn'])) {
    $post->InsertPost('posts');
}

require "View/view.insert.post.php";
?>