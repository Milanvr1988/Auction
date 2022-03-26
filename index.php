<?php 
require "bootstrap.php";

if (isset($_SESSION['logUser']) && isset($_GET['deletePost'])) {
    $post->deletePost($_GET['deletePost']);
}

$allPost = $post->SelectAllPost('posts');


require "View/view.index.php";
?>