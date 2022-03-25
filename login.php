<?php 
require "bootstrap.php";

if (isset($_POST['log_submit'])) {
    echo $logedUser->LoginUser(); 
}

require "view/view.login.php";
?>