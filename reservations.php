<?php
$servername = "localhost";
$username = "root";
$password = "15161516";
$dbname = "hotel2";

session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_SESSION['email'];
$phone = $_POST['phone'];
$room_type = $_POST['room-type'];
$num_adults = $_POST['no-adults'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Turn a sequel query result into an associative array
function get_assoc($query) {
	$servername = "localhost";
	$username = "root";
	$password = "15161516";
	$dbname = "hotel2";

	// connnection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Result of query
	if($result = $conn->query($query)) {
		echo "Query " . $query . " succesful <br>";
		return $result->fetch_assoc();
	} else {
		echo "Query " . $query . " Failed: <br>" . $conn->error . "<br>";
	}
}

// Get userID
$userID_query = "SELECT userID FROM user WHERE `email` = '$email'";
$userID_assoc = get_assoc($userID_query);
$userID = $userID_assoc['userID'];

// Get roomID 
$roomID_query = "SELECT roomID FROM room WHERE `type` = '$room_type'";
$roomID_assoc = get_assoc($roomID_query);
$roomID = $roomID_assoc['roomID'];

// Insert into guest
$guest_query = "INSERT INTO guest (fname, lname, phone, userID) 
	VALUES ('$fname', '$lname', '$phone', '$userID')";

if($conn->query($guest_query)) {
	echo "Query " . $guest_query . " succesful <br>";
} else {
	echo "Query " . $guest_query . " Failed: <br>" . $conn->error . "<br>";
}

// Get guestID
$guestID_query = "SELECT roomID FROM room WHERE `type` = '$room_type'";
$guestID_assoc = get_assoc($guestID_query);
$guestID = $guestID_assoc['roomID'];

// Get amountPayed
$amount_payed_query = "SELECT rate FROM room WHERE roomID = $roomID";
$amount_payed_assoc = get_assoc($amount_payed_query);
$amount_payed = $amount_payed_assoc['rate'];

// Dates
$date = date('Y-m-d');
$checkin = $year . "-" . $month . "-" . $day;

// Make reservation
$reservation_query = "INSERT INTO reservation (guestID, roomID, amountPayed, dateReserved, checkIn)
	VALUES ($guestID, $roomID, '$amount_payed', '$date', '$checkin') ";

if($conn->query($reservation_query)) {
	echo "Query " . $reservation_query . " succesful <br>";
} else {
	echo "Query " . $reservation_query . " Failed: <br>" . $conn->error . "<br>";
}
?>
