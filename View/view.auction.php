<?php
require "Partials/header.php";
require 'vendor/autoload.php';
use Carbon\Carbon; 
?>
<div class="jumbotron"> <h1 class="text-center">Auction item</h1> </div>

<div class="container">
    <div class="card" style="width: 18rem;">
     <img src=" <?php echo $auctionPost->picture; ?> " class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center font-weight-bold"> <?php echo $auctionPost->name; ?> </h5>
            <p class="card-text"> <?php echo $auctionPost->description; ?> </p>
            <p class="card-text">Start auction: <b> <?php echo $auctionPost->price; ?>.00 RSD</b></p>
            <button type="button" class="btn btn-secondary btn-sm" disabled>Owner: <?php echo $user->getOwnerPost($auctionPost->user_id)->name; ?> </button><br>
            <button type="button" class="btn btn-secondary btn-sm" disabled>Post Created <?php $date = date_create($auctionPost->created_at); echo date_format($date,"d-m-Y");?></button>
            <button class="btn btn-secondary btn-sm" disabled><?php printf("Time left: %s", Carbon::now()->addDay(10)); ?></button>
            <button type="button" class="btn btn-secondary btn-sm" disabled>Delivery: <?php echo $auctionPost->delivery; ?> </button><br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-secondary btn-sm input-group-text" disabled> Your auction </button>
                    </div>
                        <input type="text" placeholder="enter in RSD" name="confirmAuction" class="form-control" >
                </div>
                <button type="submit" name="confirmAuction" class="form-control btn btn-success" > Confirm </button>
        </div>
    </div><br>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

<?php require "Partials/footer.php";?>