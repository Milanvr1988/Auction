<?php 
require "bootstrap.php"; 
if (isset($_POST['reg_submit'])) {
    echo $registerUser->RegisterUser(); 
}
require "view/view.register.php"; 
?>