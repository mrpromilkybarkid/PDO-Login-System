<?php

include_once 'inc/header.php';

?>

<div class="container">

	<div class="jumbotron">
		<h1>Login</h1>
		<form action="classes/Login.php" method="POST">
		<input type="text" name="username" placeholder="Username..." class="form-control" /> <br />
		<input type="password" name="password" placeholder="Password..." class="form-control" /> <br />
		<input type="submit" name="login" class="btn btn-success" />
		</form>
	</div>

</div>

<?php

include_once 'inc/footer.php';

?>