<?php include('server.php') ?>
<!DOCTYPE>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="registration.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Register</h1>
		</div>
		<form action="registration.php" method="POST">
			<?php include('errors.php') ?>
			<div>
				<label for="username">Username</label>
				<input type="text" name="username" placeholder="Username" required>
			</div>
			<div>
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="Password" required>
			</div>
			<div>
				<label for="name">Name</label>
				<input type="text" name="name" placeholder="Enter Your Name" required>
			</div>
			<div>
				<label for="age">Age</label>
				<input type="number" name="age" placeholder="Age" required>
			</div>
			<div>
				<label for="email">Email</label>
				<input type="email" name="email" placeholder="Email" required>
			</div>
			<div>
				<label for="address">Address</label>
				<input type="text" name="address" placeholder="Enter Address" required>
			</div>
			<div>
				<label for="gender" class="gender" >Gender</label>
				<input type="radio" id="male" name="gender" value="male">
				<label for="male">Male</label>
				<input type="radio" id="female" name="gender" value="female">
				<label for="female">Female</label>
			</div>
			<div>
				<label for="city">City</label>
				<input type="text" placeholder="Enter City Name" list="citylist" name="city" required > 
				<datalist id="citylist">
				    <option>New Delhi</option>
				    <option>Chennai</option>
				    <option>Kolkata</option>
				    <option>Mumbai</option>
				</datalist>
			</div>
			<div>
				<label for="hobby">Hobby</label>
				<input type="text" name="hobby" placeholder="Enter Your Hobby" required>
			</div>

			<button type="submit" name="Register">Register</button>
			<p>Already a user?<a href="login.php"><b>Log In</b></a></p>
		</form>
	</div>
</body>
</html>