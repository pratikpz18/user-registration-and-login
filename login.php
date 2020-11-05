<?php include('server.php') ?>
<!DOCTYPE>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="registration.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Login</h1>
		</div>
		<form action="login.php" method="POST">
			<?php include('errors.php') ?>
			<div>
				<label for="username">Username</label>
				<input type="text" name="username" placeholder="Username" required>
			</div>
			<div>
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="Password" required>
			</div>
			<button type="submit" name="Login">Login</button>
			<p>Create Account?<a href="registration.php"><b>Sign Up</b></a></p>
		</form>
	</div>
</body>
</html>