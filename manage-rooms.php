<?php include "backend-header.php";?>

<style>
	th, td{
		padding: 0.5em 1em;
	}
</style>
<h1>Reservations</h1>

<table>
	<tr>
		<th>Room ID</th>
		<th>type</th>
		<th>floor</th>
		<th>rate</th>
		<th>occupied</th>
	</tr>
<?php
	$conn = mysqli_connect("localhost", "root", "15161516", "hotel2"); 

if($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM room";
$result = $conn->query($sql);
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row['roomID'] . "</td><td>" . $row['type'] . "</td><td>" . $row['floor'] . "</td><td>" . $row['rate'] . "</td><td>" .  ($row['occupied'] ? 'yes' : 'no') ; 
	}
}
?>
</table>

<?php include "backend-footer.php";?>
