<?php

session_start();

if (isset($_POST['username'], $_POST['password'])) {
	require '../core/connect.php';

	$query = dbConnect()->prepare("
		SELECT username, password FROM users 
		WHERE username = :username AND password = :password
	");
	$query->bindParam(':username', $_POST['username']);
	$query->bindParam(':password', $_POST['password']);
	$query->execute();

	if ($row = $query->fetch()) {
		$_SESSION['username'] = $row['username'];
		$_SESSION['email'] = $row['email'];

		header('Location: ../index.php');
	}
}

?>