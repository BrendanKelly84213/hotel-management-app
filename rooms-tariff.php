<?php include 'header.php';?>

<?php 
	session_start();
	if(!isset($_SESSION['email'])) {
		echo "Not Logged in";	
	} else {
		echo "Logged in as " . $_SESSION['email'];
	}
?>

<div class="container">

<h2>Rooms & Tariff</h2>


<!-- form -->

<div class="row">
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="images/photos/8.jpg" class="img-responsive"><div class="info"><h3>Single</h3><a href="single-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="images/photos/9.jpg" class="img-responsive"><div class="info"><h3>Double</h3><a href="double-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="images/photos/10.jpg" class="img-responsive"><div class="info"><h3>Queen</h3><a href="queen-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="images/photos/11.jpg" class="img-responsive"><div class="info"><h3>King</h3><a href="king-details.php" class="btn btn-default">Check Details</a></div></div></div>
</div>

</div>
<?php include 'footer.php';?>
