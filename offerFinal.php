<?php 

// if (isset($_POST['confirmAuction'])) {
//     $viewOfferedPrice = $offer->selectAllOffer('offer');
// }

if (isset($_POST['confirmAuction'])) {
    $viewOfferedPrice = $offer->offerSinglPost('offer', $_GET['postId']);
}

require "View/view.offerFinal.php";
?>