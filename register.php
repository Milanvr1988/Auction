<?php 
require "bootstrap.php"; 
if (isset($_POST['reg_submit'])) {
    echo $user->registerUser(); 
}
require "view/view.register.php"; 
?>