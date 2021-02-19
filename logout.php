<?php
session_start();
unset($_SESSION['email']);
session_destroy();

setcookie("email", "", time()-3600);

echo "logged out";

header("location: login.php");

?>

