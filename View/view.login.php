<?php require "Partials/header.php"; ?>
<body>
	<div class="container">
		<form action="login.php" method="POST">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="log_email" class="form-control" required>
			</div><br>
			<div class="input-group">
				<input type="password" placeholder="Password" name="log_password" class="form-control" required>
			</div><br>
			<div class="input-group">
				<button name="log_submit" class="btn btn-success">Login</button>
			</div><br>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
		<?php if ( $user->wrongLogPassword ):?>
			<div class="alert alert-primary" role="alert">
				<h1 class="success"> Wrong Email or Password. Try agane! </h1>
			</div>
		<?php endif; ?>
	</div>
</body>
<?php require "Partials/footer.php"; ?>