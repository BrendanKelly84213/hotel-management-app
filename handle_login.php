<?php
$servername = "localhost";
$mysql_username = "root";
$mysql_password = "15161516";
$dbname = "hotel2";

// If cookie is already set with email
if(isset($_COOKIE['email'])) {
	session_start();
	$_SESSION['email'] = $_COOKIE['email'];
	echo "cookie set";
	// Redirect to home page 
	header("Location: index.php");
} 

// Handle login
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Create connection
	$conn = new mysqli($servername, $mysql_username, $mysql_password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// Query for selection password
	$result = mysqli_query($conn, "SELECT password FROM user WHERE email='$email'");

	$row = mysqli_fetch_assoc($result);

	if($row['password'] == $password) {
		session_start();
		$_SESSION['email']=$email;
		setcookie('user', 'email', time() + 3600);
		header("location: index.php");
	} else {
		echo "Invalid User ID or Password";
	}
}

?>
