<?php

$errors = [];
if(!empty($_POST)){
	if(empty($_POST['user_name'])){
		$errors[] = 'Please Enter User Name';
	}
	if(empty($_POST['email'])){
		$errors[] = 'Please Enter email';
	}
	if(empty($_POST['first_name'])){
		$errors[] = 'Please Enter First Name';
	}
	if(empty($_POST['last_name'])){
		$errors[] = 'Please Enter Last Name';
	}
	if(empty($_POST['password'])){
		$errors[] = 'Please Enter password';
	}
	if(empty($_POST['confirm_password'])){
		$errors[] = 'Please confirm_password';
	}
	if(strlen($_POST['password']) < 6){
		$errors[] = 'Password should 6 charakters';
	}
	if($_POST['password'] !== $_POST['confirm_password']){
		$errors[] = 'Your confirn password is not match password';
	}
	if(empty($errors)){
		$stmt = $connection->prepare('INSERT INTO users(`username`, `email`, `password`, `first_name`, `last_name`) VALUES (:username, :email, :password, :first_name, :last_name)');
		$stmt->execute(array('username' => $_POST['user_name'], 'email' => $_POST['email'],
				'password' => sha1($_POST['password'].SALT),
				'first_name' => $_POST['first_name'], 'last_name' => $_POST['last_name']));
	}

	header("location: /login.php?regisration=1");


}