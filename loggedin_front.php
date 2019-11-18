<?php
$page = 'bitbyt';
require_once('conn.php');
require_once('includes/header.php');
if (isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];
    ?>

<h1>Du er logget ind</h1>

<?php
require_once('includes/footer.php');
die();
}
elseif (!isset($_SESSION['user_id'])) {
	?>

<h1>Du har ikke adgang til denne side. Venligst log ind først.</h1>

<?php
}
require_once('includes/footer.php');
die();
?>