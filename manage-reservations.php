<?php include "backend-header.php";?>

<style>
	th, td{
		padding: 0.5em 1em;
	}
</style>
<h1>Reservations</h1>

<table>
	<tr>
		<th>Reservation ID</th>
		<th>Guest ID</th>
		<th>Room ID</th>
		<th>Amount Payed</th>
		<th>Date Reserved</th>
		<th>Check in Date</th>
	</tr>
<?php
	$conn = mysqli_connect("localhost", "root", "15161516", "hotel2"); 

if($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reservation";
$result = $conn->query($sql);
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row['reservationID'] . "</td><td>" . $row['guestID'] . "</td><td>" . $row['roomID'] . "</td><td>" . $row['amountPayed'] . "</td><td>" .  $row['dateReserved'] . "</td><td>" .  $row['checkIn']; 
	}
}
?>
</table>

<?php include "backend-footer.php";?>
