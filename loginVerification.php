<?php

$errors = [];
$isReg = false;
if(!empty($_GET['regisration'])){
	$isReg = true;
}
if(!empty($_POST)){
if(empty($_POST['password'])){
		$errors[] = 'Please Enter password';
	}
if(empty($_POST['user_name'])){
		$errors[] = 'Please Enter User Name';
	}
if(empty($errors)){
		$sql = $connection->prepare('SELECT id FROM users WHERE (username = :username or email =:username) and password =:password');
		$sql->execute(array('username' => $_POST['user_name'], 'password' => sha1($_POST['password'].SALT)));
		$id = $sql->fetchColumn();
if(!empty($id)){
			$_SESSION['user_id'] = $id;
			header("location: /index.php");
}else{
		$errors[] = 'Введите корректные данные'; 
	}
}
}