<?php

include_once 'inc/header.php';

if (isset($_SESSION['username'])) {
	header('Location: index.php');
}

?>

<div class="container">

	<div class="jumbotron">

	<?php

		if ($registered === 'true'):
		
	?>

		<span class="alert alert-success">Account Created, <a href="login.php">Login</a></span>

	<?php
		
		endif;

	?>

		<h1>Register</h1>
		<form method="POST">
		<input type="text" name="username" placeholder="Username..." class="form-control" /> <br />
		<input type="password" name="password" placeholder="Password..." class="form-control" /> <br />
		<input type="email" name="email" placeholder="Email..." class="form-control" /> <br />
		<input type="submit" name="register" class="btn btn-success" />
		</form>
	</div>

</div>

<?php

session_start();

if (isset($_POST['username'], $_POST['password'])) {
	require 'core/connect.php';

	$query = dbConnect()->prepare("
		INSERT INTO users (username, password, email)
		VALUES (:username, :password, :email)
	");
	$query->bindParam(':username', $_POST['username']);
	$query->bindParam(':password', $_POST['password']);
	$query->bindParam(':email', $_POST['email']);

	$registered = '';

	if ($query->execute()) {
		$registered = 'true';
	} else {
		echo 'Error';
	}
}

include_once 'inc/footer.php';

?>