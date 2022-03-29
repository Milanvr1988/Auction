<?php 
session_start();
require "config.php"; 
$config = require "config.php";
$configuration = $config['database'];
require "Class/Connection.php";
require "Class/Users.php";
require "Class/Posts.php";
require "Class/Offer.php";

$db = Connection::con($configuration);
$user = new Users($db);
$post = new Posts($db);
$offer = new Offer($db);


?>