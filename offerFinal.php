<?php 

if (isset($_POST['confirmAuction'])) {
    $viewOfferedPrice = $offer->selectAllOffer('offer',$_GET['postId']);
}

require "View/view.offerFinal.php";
?>