---
layout: default
title: Regsiter for OMUN II
---
<?php require("/common.php"); ?>
<?php
	function register(){
		if (isset($_GET['register'])) {
			if(!empty($_POST)) {
				if( empty($_POST['email'])     ||
					empty($_POST['password'])  ||
					empty($_POST['password2']) ||
					empty($_POST['first_name'])||
					empty($_POST['last_name']) ||
					empty($_POST['school'])

					) {
					die("You missed a field");
				}

				if($_POST['password'] != $_POST['password2']) {
					die("Password Mismatch");
				}

				if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					die("Invalid Email Address");
				}

				$query = "
					SELECT
						1
					FROM users
					WHERE
						email = :email
				";

				$query_params = array(
					':email' => $_POST['email']
				);

				try {
					$stmt = $db->prepare($query);
					$result = $stmt->execute($query_params);
				}
				catch(PDOException $ex) {
					die("Failed to run query: " . $ex->getMessage());
				}

				$row = $stmt->fetch();

				if($row) {
					die("This email address is already registered");
				}

				$query = "
					INSERT INTO users (
						password,
						salt,
						email
					) VALUES (
						:password,
						:salt,
						:email
					);
				";

				$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));

				$password = hash('sha256', $_POST['password'] . $salt);

				for($round = 0; $round < 65536; $round++) {
					$password = hash('sha256', $password . $salt);
				}

				$query_params = array(
					':password' => $password,
					':salt' => $salt,
					':email' => $_POST['email']
				);

				try {
					$stmt = $db->prepare($query);
					$result = $stmt->execute($query_params);
				}
				catch(PDOException $ex) {
					die("Failed to run query: " . $ex->getMessage());
				}
				$email = $_POST['email'];
				$first_name = $_POST['first_name'];
				$last_name = $_POST['last_name'];
				$school = $_POST['school'];

				$query = "
				INSERT INTO info (
					email,
					first_name,
					last_name,
					school
				) VALUES (
					'$email',
					'$first_name',
					'$last_name',
					'$school'
				);";

				try {
					$stmt = $db->prepare($query);
					$stmt->execute();

					header("Location: login.php");
				}

				catch(PDOException $ex)
				{
					die("Failed to run query: " . $ex->getMessage());
					header("Location: login.php");
				}
			}
		}
	}
	register();
?>
<div class="container">
	<h1 class="page-header">Register</h1>
	<p>Already have an account? <a href="login.php">Login</a>.</p>
	<form action="?register" method="post">
	  <div class = "row">
	    <div class = "col-sm-3">
	      <h4>Email</h4>
	    </div>
	    <div class = "col-sm-9">
	      <input type="email" id="email" class="form-control" placeholder="john.smith@gmail.com" name="email" required="" autofocus="">
	    </div>
	  </div>
	  <div class = "row">
	    <div class = "col-sm-3">
	      <h4>Password</h4>
	    </div>
	    <div class = "col-sm-9">
	      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
	    </div>
	  </div>
	  <div class = "row">
	    <div class = "col-sm-3">
	      <h4>Confirm Password</h4>
	    </div>
	    <div class = "col-sm-9">
	      <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm Password" required="">
	    </div>
	  </div>
	  <div class = "row">
	    <div class = "col-sm-3">
	      <h4>First Name</h4>
	    </div>
	    <div class = "col-sm-9">
	      <input type="text" id="first_name" name="first_name" class="form-control" placeholder="John" required="">
	    </div>
	  </div>
	  <div class = "row">
	    <div class = "col-sm-3">
	      <h4>Last Name</h4>
	    </div>
	    <div class = "col-sm-9">
	      <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Smith" required="">
	    </div>
	  </div>
		<div class = "row">
	    <div class = "col-sm-3">
	      <h4>School</h4>
	    </div>
	    <div class = "col-sm-9">
	      <input type="text" id="school" name="school" class="form-control" placeholder="Upper Canada College" required="">
	    </div>
	  </div>
	  </br>
	  <div class = "row">
	    <div class = "col-sm-12">
	      <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Register</button>
	    </div>
	  </div>
	</form>
</div>
