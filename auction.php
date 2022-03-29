<?php 
require "bootstrap.php";

if (!isset($_SESSION['logUser'])) {
    header('location:index.php');
}

if (isset($_SESSION['logUser']) && $_GET['auctionPost'] ) {
    $auctionPost = $post->selectSinglPost('posts',$_GET['auctionPost']);
}

require "View/view.auction.php";
?>