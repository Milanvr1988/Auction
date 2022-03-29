<?php 
require "bootstrap.php";

if (isset($_POST['log_submit'])) {
    echo $user->loginUser(); 
}

require "view/view.login.php";
?>