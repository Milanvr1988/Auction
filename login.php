<?php 
require "bootstrap.php";

if (isset($_POST['log_submit'])) {
    echo $user->LoginUser(); 
}

require "view/view.login.php";
?>