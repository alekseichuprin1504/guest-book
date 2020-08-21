<?php

/*
Adding and Displaying Comments
*/
if(!empty($_POST['comment'])){
	$sql = $connection->prepare("INSERT INTO comments(`user_id`, `comment`) VALUES(:user_id, :comment)");
	$sql->execute(array('user_id' => $_SESSION['user_id'], 'comment' => $_POST['comment']));
	header("location: /index.php");
}
$sql = $connection->prepare("SELECT * FROM comments ORDER BY id DESC");
$sql->execute();
$comments = $sql->fetchAll();
$stmt = $connection->prepare("SELECT * FROM users WHERE id = :id");
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute(array('id' => $_SESSION['user_id']));
$userName = $stmt->fetch();
