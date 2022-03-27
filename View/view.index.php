


<?php if(isset($_SESSION['logUser'])): ?>

    <?php require "Partials/header.php"; ?>
<div class="jumbotron">
    <h3 class="text-center"> All Posts </h3>
</div>
<div class="container-fluid">
    <div class="row"><br>
        <div class="offset-1"><br>
            <div class="row"><br>
        <?php foreach( $allPost as $post ): ?>
            <div class="card" style="width: 18rem;">
            <img src=" <?php echo $post->picture; ?> " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center font-weight-bold"> <?php echo $post->name; ?> </h5>
                <p class="card-text"> <?php echo $post->description; ?> </p>
                <button type="button" class="btn btn-secondary btn-sm" disabled>Owner: <?php echo $user->getOwnerPost($post->user_id)->name; ?> </button><br>
                <button type="button" class="btn btn-secondary btn-sm" disabled> <?php echo $post->price; ?>rsd </button>
                <button type="button" class="btn btn-secondary btn-sm" disabled>Post Created <?php $date = date_create($post->created_at); echo date_format($date,"d-m-Y"); ?> </button>
                <button type="button" class="btn btn-secondary btn-sm" disabled> Delivery: <?php echo $post->delivery; ?></button>
                <?php if(isset($_SESSION['logUser']) && $post->user_id  == $_SESSION['logUser']->id ): ?>
                <a href="index.php?deletePost=<?php echo $post->id; ?>"><button type="button" class="btn btn-danger btn-sm"> Delete </button></a>
                <?php else: ?>
                <a href="auction.php?auctionPost=<?php echo $post->id; ?>"><button type="button" class="btn btn-warning btn-sm"> Auction </button></a>
                <?php endif; ?>
            </div>
            </div>
        <?php endforeach; ?>
            </div><br>
        </div>
    </div>
</div>

<?php require "Partials/footer.php"; ?>

<?php else: ?>

    <?php require "Partials/header.php"; ?>
<div class="jumbotron">
    <h3 class="text-center"> All Post </h3>
</div>
<div class="container-fluid">
    <div class="row"><br>
        <div class="offset-1"><br>
            <div class="row"><br>
        <?php foreach( $allPost as $post ): ?>
            <div class="card" style="width: 18rem;">
            <img src=" <?php echo $post->picture; ?> " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center font-weight-bold"> <?php echo $post->name; ?> </h5>
                <p class="card-text"> <?php echo $post->description; ?> </p>
                <button type="button" class="btn btn-secondary btn-sm" disabled>Owner: <?php echo $user->getOwnerPost($post->user_id)->name; ?> </button><br>
                <button type="button" class="btn btn-secondary btn-sm" disabled> <?php echo $post->price; ?>rsd </button>
                <button type="button" class="btn btn-secondary btn-sm" disabled>Post Created <?php $date = date_create($post->created_at); echo date_format($date,"d-m-Y"); ?> </button>
                <button type="button" class="btn btn-secondary btn-sm" disabled> Delivery: <?php echo $post->delivery; ?></button>
            </div>
            </div>
        <?php endforeach; ?>
            </div><br>
        </div>
    </div>
</div>

<?php require "Partials/footer.php"; ?>


<?php endif; ?>





