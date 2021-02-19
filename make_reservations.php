<?php include 'header.php';?>

<?php 

session_start();
if(!isset($_SESSION['email'])) {
	header("location: login_with_message.php");
} else {
	echo "Logged in as " . $_SESSION['email'];
}

?>

<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-5 col-md-4">
<h3>Reservation</h3>
    <form role="form" class="wowload fadeInRight" action="reservations.php" method="POST">
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="First Name" name="fname">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Last Name" name="lname">
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Phone" name="phone">
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="room-type">
              <option>Room Type</option>
              <option>Single</option>
              <option>Double</option>
              <option>Queen</option>
              <option>King</option>
            </select>
            </div>        

            <div class="col-xs-6">
            <select class="form-control" name="no-adults">
              <option>No. of Adult</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="month" id="expiry-month" >
                <option>Month</option>
                <option value="01">Jan</option>
                <option value="02">Feb </option>
                <option value="03">Mar  </option>
                <option value="04">Apr  </option>
                <option value="05">May  </option>
                <option value="06">June </option>
                <option value="07">July </option>
                <option value="08">Aug  </option>
                <option value="09">Sep  </option>
                <option value="10">Oct  </option>
                <option value="11">Nov  </option>
                <option value="12">Dec  </option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="day" id="expiry-month">
                <option>Day</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="year">
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
              </select>
            </div>
          </div>
        </div>
        <button class="btn btn-default">Submit</button>
    </form>    
</div>
</div>  
</div>
</div>
<?php include 'header.php';?>
