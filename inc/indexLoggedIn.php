<?php

include_once 'inc/header.php';

?>

<div class="container">

	<div class="jumbotron">
		<h1>Welcome, <?php echo ucfirst($_SESSION['username']); ?></h1>
		<hr />
		<a href="logout.php" class="btn btn-danger">Logout</a>
	</div>

</div>

<?php

include_once 'inc/footer.php';

?>