<?php require "Partials/header.php"; ?>

<!-- <?php foreach ( $viewOfferedPrice as $viewOffer ): ?> -->

    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Time</th>
            <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td> <?php echo $viewOfferedPrice->offerName; ?> </td>
            <td> <?php $date = date_create($viewOfferedPrice->offerTime); echo date_format($date,"d-m-Y");?> </td>
            <td> <?php echo $viewOfferedPrice->offerPrice; ?>rsd </td>
            </tr>
        </tbody>
    </table>
</div>

  <!-- <?php endforeach; ?>     -->

<?php require "Partials/footer.php"; ?>


