<?php
$servername = "localhost";
$mysql_username = "root";
$mysql_password = "15161516";
$dbname = "hotel2";

// Handle login
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $_POST['new-email'];
	$password = $_POST['new-password'];
	$confirm = $_POST['new-confirm-password'];

	// Create connection
	$conn = new mysqli($servername, $mysql_username, $mysql_password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// Query for selection password
	$result = mysqli_query($conn, "SELECT password FROM user WHERE email='$email'");

	var_dump($result);
	echo '<br>';

	$row = mysqli_fetch_assoc($result);

	if($row) {
		echo "User already exists";
	} else {
		if($password == $confirm) {
			$result = mysqli_query($conn, "INSERT INTO user (email, password) VALUES ('$email', '$password')");
			if($result) {
				echo "insert values into user db";
				session_start();
				$_SESSION['email'] = $email;

				// Redirect to make reservation page
				header("location: make_reservations.php");
			} else {
				echo "Something went wrong " . $sql . "<br>" . $conn->error;
			}
		} else {
			echo "Passwords don't match";
		}
	}

	var_dump($row);
	echo '<br>';
	
	if($row['password'] == $password) {
		session_start();
		$_SESSION['email']=$email;

		// Redirect to make reservation page
		header("location: make_reservations.php");
	} else {
		echo "Invalid User ID or Password";
	}
}

?>
