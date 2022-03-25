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
      <a href="logout.php" class="float-none"> <button type="button" class="btn btn-sm"> Odjava </button> </a>
    </div>
      <p class="text-center">Auction</p>
    <br>
</div>
<?php else: ?>
  <div style="background-color: #65a60b;">
    <br>
    <div class="btn-group float-right" role="group" aria-label="Basic example">
    <a href="register.php"><button class="btn btn-secondary" >Register/Login</button></a>
    </div>
      <p class="text-center">Auction</p>
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
          <a href="" class="nav-link">About Auction</a>
      </li>
</ul>
<div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    All product
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Napici</a>
    <a class="dropdown-item" href="#">Pcelinji proizvodi</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
</nav>

</div>
<a href="posts.php">Insert Post</a>

