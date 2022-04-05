<?php
session_start();


$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'studentregister');




if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['fname']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = ($password);
  	$query = "SELECT * FROM admins2 WHERE fname='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['id'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index2.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>