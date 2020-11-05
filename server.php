<?php

session_start();

$username = "";
$email = "";
$password = "" ;
$age = "";
$name = "";
$address = "";
$hobby = "";
$gender = "";
$city = "";
$errors = array();

$db = mysqli_connect('localhost','root','','prac') or die('could not connect ');

if (isset($_POST['Register'])) {
	$username= mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
	$age = mysqli_real_escape_string($db,$_POST['age']);
	$name = mysqli_real_escape_string($db,$_POST['name']);
	$address = mysqli_real_escape_string($db,$_POST['address']);
	$hobby = mysqli_real_escape_string($db,$_POST['hobby']);
	$gender = mysqli_real_escape_string($db,$_POST['gender']);
	$city = mysqli_real_escape_string($db,$_POST['city']);

	$password = md5($password);
	if (empty($username)) {array_push($errors, 'username is required');}
	if (empty($email)) {array_push($errors, 'email is required');}
	if (empty($password)) {array_push($errors, 'password is required');}
	if (empty($age)) {array_push($errors, 'age is required');}
	if (empty($name)) {array_push($errors, 'name is required');}
	if (empty($address)) {array_push($errors, 'address is required');}
	if (empty($hobby)) {array_push($errors, 'hobby is required');}
	if (empty($gender)) {array_push($errors, 'gender is required');}
	if (empty($city)) {array_push($errors, 'city is required');}

	$userquery = "SELECT * FROM user WHERE username = '$username' or email ='$email' LIMIT 1";
	$query = mysqli_query($db,$userquery);
	$user = mysqli_fetch_assoc($query);

	if ($user) {
		if ($user['username'] == $username) {
			array_push($errors, 'username already exist');
		}
		if ($user['email'] == $email) {
			array_push($errors, 'email already exist');
		}
	}

	if (count($errors) == 0) {

		$query = "INSERT INTO user (username,password,name,age,email,address,gender,city,hobby) VALUES ('$username','$password','$name','$age','$email','$address','$gender','$city','$hobby')" ;
		mysqli_query($db,$query);
		$_SESSION['username'] = $username ;
		$_SESSION['success'] = "Logged in Succesfully";
		header("location: index.php");
	}
}

if (isset($_POST['Login'])) {
	$username= mysqli_real_escape_string($db,$_POST['username']); 
	$password = mysqli_real_escape_string($db,$_POST['password']);


	if (empty($username)) {array_push($errors, 'username is required');}
	if (empty($password)) {array_push($errors, 'password is required');}

	if (count($errors) == 0) {
		$querys = "SELECT * FROM user WHERE username = '$username' AND password = '$password' " ;
		$results = mysqli_query($db,$querys);
		if (mysqli_num_rows($results)) {
			$_SESSION['username'] = $username ;
			$_SESSION['success'] = "Logged in Succesfully";
			header("location: index.php");
		}else{
			array_push($errors, "wrong username/password");
		}
	}
}

?>