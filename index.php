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

<div class="container">

<?php 

    if ($loggedIn === 'true'): 

        include_once 'inc/indexLoggedIn.php';

    elseif ($loggedIn === 'false'): 

        include_once 'inc/indexDefault.php';

    endif;

?>

</div>

<?php

include_once 'inc/footer.php';

?>