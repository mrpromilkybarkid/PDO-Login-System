<?php

session_start();

$loggedIn = '';

if (isset($_SESSION['username'])) {
$loggedIn = 'true';
} else {
$loggedIn = 'false';
}

include_once 'inc/header.php';

?>

<style>

body {
padding-top: 15px;
}

</style>

<div class="container">

<?php if ($loggedIn === 'true'): ?>

    <div class="jumbotron">
    <span class="alert alert-success">Welcome!</span> <br />
    <br />
    <a href="logout.php">Logout</a>
    </div>

<?php elseif ($loggedIn === 'false'): ?>

    <div class="jumbotron">
    <a href="login.php">Login</a> <br />
    <a href="register.php">Register</a>
    </div>

<?php endif; ?>

</div>

<?php

include_once 'inc/footer.php';

?>