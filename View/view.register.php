<?php require "partials/header.php";?>

<div class="container">
		<form action="register.php" method="POST">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Name" name="reg_name" class="form-control"  required>
			</div><br>
			<div class="input-group">
				<input type="text" placeholder="Surname" name="reg_username" class="form-control" required>
			</div><br>
			<div class="input-group">
				<input type="email" placeholder="Email" name="reg_email" class="form-control" required>
			</div><br>
			<div class="input-group">
				<input type="password" placeholder="Password" name="reg_password" class="form-control" required>
            </div><br>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="reg_cpassword" class="form-control" required>
			</div><br>
			<div class="input-group">
				<button href="register.php" name="reg_submit" class="btn btn-success">Register</button>
			</div><br>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
		<?php if ( $user->regAlert ):?>
			<div class="alert alert-primary" role="alert">
				<h1 class="success"> Success register </h1>
			</div>
		<?php endif; ?>
		<?php if ( $user->wrongEmail ):?>
			<div class="alert alert-primary" role="alert">
				<h1 class="success"> Email exist. Try agane. </h1>
			</div>
		<?php endif; ?>
		<?php if ( $user->confirmPassword ):?>
			<div class="alert alert-primary" role="alert">
				<h1 class="success"> Confirm passwort is wrong! </h1>
			</div>
		<?php endif; ?>
	</div>

</div>

<?php require "partials/footer.php"; ?>

   
