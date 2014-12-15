<?php

include_once 'inc/header.php';

?>

<div class="container">

	<div class="jumbotron">
		<h1>Login</h1>
		<form method="POST">
		<input type="text" name="username" placeholder="Username..." class="form-control" /> <br />
		<input type="password" name="password" placeholder="Password..." class="form-control" /> <br />
		<input type="submit" name="login" class="btn btn-success" />
		</form>
	</div>

</div>

<?php

session_start();

if (isset($_POST['username'], $_POST['password'])) {
	require 'core/connect.php';

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
		header('Location: index.php');
	}
}

include_once 'inc/footer.php';

?>