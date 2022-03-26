<?php 
require "bootstrap.php";


$allPost = $post->SelectAllPost('posts');


require "view/view.index.php";
?>