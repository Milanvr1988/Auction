<?php require "Partials/header.php"; ?>
<div class="jumbotron">
    <h3 class="text-center"> All Post </h3>
</div>
<div class="container">
    <div class="row">
        <?php foreach( $allPost as $post ): ?>
            <div class="card" style="width: 18rem;">
            <img src=" <?php echo $post->picture; ?> " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $post->name; ?> </h5>
                <p class="card-text"> <?php echo $post->description; ?> </p>
                <button type="button" class="btn btn-secondary btn-sm" disabled>Owner: <?php echo $user->getOwnerPost($post->user_id)->name; ?> </button><br>
                <button type="button" class="btn btn-secondary btn-sm" disabled> <?php echo $post->price; ?>rsd </button>
                <button type="button" class="btn btn-secondary btn-sm" disabled>Post Created <?php $date = date_create($post->created_at); echo date_format($date,"d-m-Y"); ?> </button>
                <button type="button" class="btn btn-secondary btn-sm" disabled> Delivery: <?php echo $post->delivery; ?></button>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>

<?php require "Partials/footer.php"; ?>








