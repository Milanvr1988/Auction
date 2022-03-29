<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Milan Nikolic">
    <meta name="description" content="Aukcija svih proizvoda">
    <title>Auction</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
  <?php if(isset($_SESSION['logUser'])): ?>
<div style="background-color: #65a60b;">
    <br>
    <div class="btn-group float-right" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-secondary btn-sm" disabled> <?php echo $_SESSION['logUser']->name." ".$_SESSION['logUser']->surname; ?> </button>
      <a href="logout.php" class="float-none"> <button type="button" class="btn btn-sm"> Logout </button> </a>
    </div>
      <h1 class="text-center"> Auction</h1>
    <br>
</div>
<?php else: ?>
  <div style="background-color: #65a60b;">
    <br>
    <div class="btn-group float-right" role="group" aria-label="Basic example">
    <a href="register.php"><button class="btn btn-secondary" >Register/Login</button></a>
    </div>
      <h1 class="text-center">Auction</h1>
    <br>
</div>
<?php endif; ?>
<div class="navbarNavDropdown">


<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="pictures/aukcija.png" width="180" height="100" alt="">
  </a>
<ul class="navbar-nav">
      <li class="nav-item">
          <a href="index.php" class="nav-link">Home</a>
      </li>
</ul>
<ul class="navbar-nav">
      <li class="nav-item">
          <a href="aboutAuction.php" class="nav-link">About Auction</a>
      </li>
</ul>
<?php if(isset($_SESSION['logUser'])):?>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a href="insert.post.php" class="nav-link">Add post</a>
    </li>
  </ul>
<?php endif; ?>
</nav>

</div>


