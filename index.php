<?php

session_start();


if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}

?>

<!DOCTYPE>
<html>
<head>
<title>Homepage</title>
<link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="container">
		<h1> HOMEPAGE </h1>
		<?php 
		if(isset($_SESSION['success'])) : ?>

	<?php endif ?>

	<?php if (isset($_SESSION['username'])) : ?>
		<h3>WELCOME<strong><?php echo $_SESSION['username']; ?>!</strong></h3>
		<h3 class="msg">you are in users homepage</h3>
		<button><a href="index.php?logout='1'">logout</a></button>
	<?php endif ?>
</div>
</body>
</html>