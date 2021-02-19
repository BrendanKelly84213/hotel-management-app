<?php include 'header.php';?>

<?php
// TODO: make such that a list of the users reservations appear on the screen
session_start();
if( isset($_SESSION['email'])) {
	$user = $_SESSION['email'];
	echo "Logged in as " . $user;
} else {
	echo "Not logged in";
}

?>

<?php include 'footer.php';?>
