<?php 
require "bootstrap.php";

if (isset($_POST['confirmAuction'])) {
    $offer->insertOffer('offer');
}

require "offerFinal.php";
?>