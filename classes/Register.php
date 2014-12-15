<?php

session_start();

if (isset($_POST['username'], $_POST['password'])) {
	require '../core/connect.php';

	$query = dbConnect()->prepare("
		INSERT INTO users (username, password, email)
		VALUES (:username, :password, :email)
	");
	$query->bindParam(':username', $_POST['username']);
	$query->bindParam(':password', $_POST['password']);
	$query->bindParam(':email', $_POST['email']);

	if ($query->execute()) {
		header('Location: ../index.php');
	} else {
		echo 'Error';
	}
}

?>