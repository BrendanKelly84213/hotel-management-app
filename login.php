<?php include 'header.php';?>


<?php 
	session_start();
	if(!isset($_SESSION['email'])) {
		echo "Not Logged in";	
	} else {
		echo "Logged in as " . $_SESSION['email'];
	}
?>

<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-5 col-md-4">
<h3>Login</h3>
<form role="form" class="wowload fadeInRight" action="handle_login.php" method="POST">
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control"  placeholder="Password" name="password">
        </div>        
        <button class="btn btn-default">Login</button>
</form>
<br>
<h3>Sign Up</h3>
<form role="form" class="wowload fadeInRight" action="handle_sign_up.php" method="POST">
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email" name="new-email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control"  placeholder="Password" name="new-password">
        </div>        
        <div class="form-group">
            <input type="password" class="form-control"  placeholder="Confirm Password" name="new-confirm-password">
        </div>        
        <button class="btn btn-default">Register</button>
</form>
</div>
</div>  
</div>
</div>

<?php include 'footer.php';?>
