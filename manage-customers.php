<?php include "backend-header.php";?>

<style>
	th, td{
		padding: 0.5em 1em;
	}
</style>
<h1>Guests</h1>

<table>
	<tr>
		<th>ID</th>
		<th>First Name </th>
		<th>Last Name </th>
		<th>Email</th>
		<th>Phone</th>
	</tr>
<?php
	$conn = mysqli_connect("localhost", "root", "15161516", "hotel2"); 

if($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM guest";
$result = $conn->query($sql);
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$q_user_row = "SELECT * FROM user WHERE userID = $row[userID]";
		$r_user_row = $conn->query($q_user_row);
		$user_row = $r_user_row->fetch_assoc();
		echo "<tr><td>" . $row['guestID'] . "</td><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $user_row['email'] . "</td><td>" .  $row['phone']; 
	}
}
?>
</table>

<?php include "backend-footer.php";?>
