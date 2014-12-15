<?php

include_once 'inc/header.php';

if (isset($_SESSION['username'])) {
	header('Location: index.php');
}

?>

<div class="container">

	<div class="jumbotron">

		<h1>Register</h1>
		<form action="classes/Register.php" method="POST">
		<input type="text" name="username" placeholder="Username..." class="form-control" /> <br />
		<input type="password" name="password" placeholder="Password..." class="form-control" /> <br />
		<input type="email" name="email" placeholder="Email..." class="form-control" /> <br />
		<input type="submit" name="register" class="btn btn-success" />
		</form>
	</div>

</div>

<?php

include_once 'inc/footer.php';

?>