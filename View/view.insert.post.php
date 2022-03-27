<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
<div class="jumbotron">
  <h1 class="display-4 text-center">Add Post</h1>
</div>
<div class="container">
    <a href="index.php"> <button class="btn btn-light"> Back</button> </a><br><br>
	<?php if ( $post->PostStatus ):?>
			<div class="alert alert-primary" role="alert">
				<h1 class="success"> Posts inserted! </h1>
			</div>
	<?php endif; ?>
		<form action="insert.post.php" method="POST" enctype="multipart/form-data">
            <div class="input-group">
				<input type="file" name="insert_picture" class="form-control"  required>
			</div><br>
			<div class="input-group">
				<input type="text" placeholder="Product name" name="insert_name" class="form-control"  required>
			</div><br>
			<div class="input-group">
				<input type="text" placeholder=" descryption " name="insert_description" class="form-control" required>
			</div><br>
			<div class="input-group">
				<input type="intiger" placeholder=" the price is expressed in RSD " name="insert_price" class="form-control" required>
			</div><br>
            <div class="input-group form-group">
                <select class="form-control" name="insert_delivery">
                <option> Product send by Post </option>
                <option> Product pick up personally </option>
                </select>
            </div>
			<div class="input-group">
				<button name="insertBtn" class="btn btn-success">Insert post</button>
			</div><br>
		</form>
</div>
