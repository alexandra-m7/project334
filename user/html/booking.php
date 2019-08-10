<?php
error_reporting(E_ERROR | E_PARSE | E_NOTICE);
error_reporting(-1);
ini_set('display_errors', 'On');

session_start();

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$result = $conn->query("SELECT room_type_id, room_type FROM room_type");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Toronto Pearson Hotel</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/titlelogo.png">

    <!-- Core Stylesheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/custom.css">

	<style>
	.booking-form {
    
    padding-left: 10px;
	padding-right: 10px;
	
	background-color: #4bb3fd;
    box-shadow: 3px 5px 10px #00487c;
}

h1 {
	font-family: garamond;
	text-transform: uppercase;
	font-size: 24px;
}
	
hr {
    display: block;
	width: 100%;
    height: 1px;
    border: 0;
    border-top: 1px solid black;
    margin: 1em 0;
}

.room-grid {
	margin-left: 0;
	margin-right: 0;
	
}
	
	</style>
	
	
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <?php include "nav.php"; ?>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
	
	<div style='margin-top: 160px;' class="row room-grid"> 
		<div class="col-sm-3">
	
<?php if($_SERVER['REQUEST_METHOD'] == 'POST')
{?>
  <form action="booking.php" method="post" id="room-form">
  <div class="booking-form" id="room-form">
  <br>
    <h1>Book a Room</h1><p>
	<hr/>
	<div class="form-group row">
    <label for="arrival" class="col-sm-4 col-form-label">Arrive</label>
    <div class="col-sm-8 input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
		<?php 
			if(isset($_POST['arrive']) && isset($_POST['depart']) )
			{
				$_SESSION["arrive"] = $_POST["arrive"]; 
				$_SESSION["depart"] = $_POST["depart"]; 
				$arrive = $_POST["arrive"];
				$depart = $_POST["depart"];
			}
			
			if(isset($_POST['rooms']))
			{
				$_SESSION["rooms"] = $_POST["rooms"]; 
				$rooms = $_POST["rooms"];
			}
		?>
        <input type="text" id="arrive" class="form-control" name="arrive" value="<?php echo $arrive;?>">
		</div>
  </div>
  <div class="form-group row">
    <label for="arrival" class="col-sm-4 col-form-label">Depart</label>
    <div class="col-sm-8 input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
        <input type="text" id="depart" class="form-control" name="depart" value="<?php echo $depart;?>">
      </div>
  </div>
  <div class="form-group row">
      <label for="rooms" class="col-sm-4 col-form-label">Room Type</label>
      <div class="col-sm-8">
	    <?php echo '<select class="form-control" id="room_type" name="rooms">';
		   echo '<option value="0">Select Room </option>';
           while($row = $result->fetch_assoc())
           {
              echo '<option value="'.$row['room_type_id'].'" '.((isset($_POST['rooms']) && $_POST['rooms'] == $row['room_type_id'])?"selected":"").'>'.$row['room_type'].'</option>';
           }
           echo '</select>';
        ?>
      </div>
  </div>
  <div class="form-group row">
    <label for="num_rooms" class="col-sm-6 col-form-label">Number of Rooms</label>
    <div class="col-sm-6">
    <select class="form-control" id="room_number">
	    <option value="1" selected> 1 </option>
		<option value="2"> 2 </option>
		<option value="3"> 3 </option>
		<option value="4"> 4 </option>
		<option value="5"> 5 </option>
		<option value="6"> 6 </option>
		<option value="7"> 7 </option>
	</select>
    </div>
 </div>
 <div class="form-group row">
	<label for="adults" class="col-sm-6 col-form-label">Adults</label>
	<div class="col-sm-6">
	<select class="form-control" id="adult_number" name="adults2">
        <option value="0" selected>
		<?php
		if(!isset($_POST['adults2']))
		{
			echo $_POST['adults'];
		}
		else
		{
			echo $_POST['adults2'];
		}
		?></option>
		<option value="1"> 1 </option>
		<option value="2"> 2 </option>
		<option value="3"> 3 </option>
		<option value="4"> 4 </option>
		<option value="5"> 5 </option>
		<option value="6"> 6 </option>
		<option value="7"> 7 </option>
		</select>
	</div>
 </div>
 <div class="form-group row">
	<label for="children" class="col-sm-6 col-form-label">Children</label>
	<div class="col-sm-6">
	<select class="form-control" id="children_number" name="children2">
		<option value="0">
		<?php
		if(!isset($_POST['children2']))
		{
			echo $_POST['children'];
		}
		else
		{
			echo $_POST['children2'];
		}
		?>
		</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		</select>
	</div>
 </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <!--<button type="submit" class="btn btn-primary">Submit</button>-->
	  <input type="submit" class="btn btn-primary" name="submitBtn" value="Submit">
	  <br>
	  <br>
    </div>
  </div>
  </div>
</form>
<?php }
else
{ ?>
  <form action="booking.php" method="post" id="room-form">
  <div class="booking-form">
  <br>
    <h1>Book a Room</h1><p>
	<hr/>
    <div class="form-group row">
    <label for="arrival" class="col-sm-4 col-form-label">Arrive</label>
    <div class="col-sm-8 input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
        <input type="text" id="arrive" class="form-control" name="arrive" value="<?php echo date('Y-m-d'); ?>">
      </div>
  </div>
  <div class="form-group row">
    <label for="arrival" class="col-sm-4 col-form-label">Depart</label>
    <div class="col-sm-8 input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
        <input type="text" id="depart" class="form-control" name="depart" value="<?php echo date('Y-m-d'); ?>">
      </div>
  </div>
  <div class="form-group row">
      <label for="rooms" class="col-sm-4 col-form-label">Room Type</label>
      <div class="col-sm-8">
          <?php echo '<select class="form-control" id="room_type" name="rooms">';
		   echo '<option value="0">Select Room </option>';
           while($row = $result->fetch_assoc())
           {
              echo '<option value="'.$row['room_type_id'].'" '.((isset($_POST['rooms']))?"selected":"").'>'.$row['room_type'].'</option>';
           }
           echo '</select>';
        ?>
      </div>
  </div>
  <div class="form-group row">
    <label for="num_rooms" class="col-sm-6 col-form-label">Number of Rooms</label>
    <div class="col-sm-6">
    <select class="form-control" id="room_number">
	    <option value="1" selected> 1 </option>
		<option value="2"> 2 </option>
		<option value="3"> 3 </option>
		<option value="4"> 4 </option>
		<option value="5"> 5 </option>
		<option value="6"> 6 </option>
		<option value="7"> 7 </option>
	</select>
    </div>
 </div>
 <div class="form-group row">
	<label for="adults" class="col-sm-6 col-form-label">Adults</label>
	<div class="col-sm-6">
	<select class="form-control" id="adult_number">
		<option value="1" selected> 1 </option>
		<option value="2"> 2 </option>
		<option value="3"> 3 </option>
		<option value="4"> 4 </option>
		<option value="5"> 5 </option>
		<option value="6"> 6 </option>
		<option value="7"> 7 </option>
		</select>
	</div>
 </div>
 <div class="form-group row">
	<label for="children" class="col-sm-6 col-form-label">Children</label>
	<div class="col-sm-6">
	<select class="form-control" id="children_number">
		<option value="0" selected>0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		</select>
	</div>
 </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" class="btn btn-primary" name="submitBtn" value="Submit">
	  <br>
	  <br>
    </div>
  </div>
  </div>
</form>
<?php } 
?>



</div>
<?php
/*$query = "SELECT room_type_id FROM room_type";
$res = $conn->query($query);
$rows = $res->num_rows;
	if(isset($_POST['submitBtn']))
	{ 
		if($rows > 0)
        {
            for ($j = 1 ; $j < $rows ; ++$j)
            {
				$res->data_seek($j);
                $row = $res->fetch_array(MYSQLI_NUM); 
				
				if($row[1])
				{ ?> */
	if(isset($_POST['rooms']))
	{ 
		if($_POST['rooms'] == 1)
		{ ?>
				 <div class="col-sm-9">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-4">
							<div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">-->
								<!-- Thumbnail -->
								<div class="bg-thumbnail bg-img" style="background-image: url(../img/room-img/GuestRoom/king/guestroom-king2.jpg);"></div>
								<!-- Rooms Text -->
								<div class="rooms-text">
								<p class="price-from">GUEST KING</p>
									<p>Member Rate &nbsp $110/night<p>
									<div class="line"></div>
									<p>Regular Rate &nbsp $130/night</p>
								</div>
								<!-- Book Room -->
								<a href="room-payment.php" class="book-room-btn btn palatin-btn">Book Room</a>
							</div>
						</div>
		<?php 
		}
		else if($_POST['rooms'] == 2)
		{ ?>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">-->
								<!-- Thumbnail -->
								<div class="bg-thumbnail bg-img" style="background-image: url(../img/room-img/GuestRoom/twoDouble/guestroom-double.jpg);"></div>
								<!-- Rooms Text -->
								<div class="rooms-text">
								<p class="price-from">GUEST DOUBLE</p>
									<p>Member Rate &nbsp $110/night<p>
									<div class="line"></div>
									<p>Regular Rate &nbsp $130/night</p>
								</div>
								<!-- Book Room -->
								<a href="room-payment.php" class="book-room-btn btn palatin-btn">Book Room</a>
							</div>
						</div>
	    <?php 
		}
		else if($_POST['rooms'] == 3)
		{ ?>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">-->
								<!-- Thumbnail -->
								<div class="bg-thumbnail bg-img" style="background-image: url(../img/room-img/CornerRoom/king/corner-king.jpg);"></div>
								<!-- Rooms Text -->
								<div class="rooms-text">
								<p class="price-from">CORNER KING</p>
									<p>Member Rate &nbsp $130/night<p>
									<div class="line"></div>
									<p>Regular Rate &nbsp $150/night</p>
								</div>
								<!-- Book Room -->
								<a href="room-payment.php" class="book-room-btn btn palatin-btn">Book Room</a>
							</div>
						</div>
		<?php 
		}
		else if($_POST['rooms'] == 4)
		{ ?>				
						<div class="col-12 col-md-6 col-lg-4">
							<div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">-->
								<!-- Thumbnail -->
								<div class="bg-thumbnail bg-img" style="background-image: url(../img/room-img/CornerRoom/double/corner-double.jpg);"></div>
								<!-- Rooms Text -->
								<div class="rooms-text">
								<p class="price-from">CORNER DOUBLE</p>
									<p>Member Rate &nbsp $130/night<p>
									<div class="line"></div>
									<p>Regular Rate &nbsp $150/night</p>
								</div>
								<!-- Book Room -->
								<a href="room-payment.php" class="book-room-btn btn palatin-btn">Book Room</a>
							</div>
						</div>
		<?php 
		}
		else if($_POST['rooms'] == 5)
		{ ?>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">-->
								<!-- Thumbnail -->
								<div class="bg-thumbnail bg-img" style="background-image: url(../img/room-img/Suite/king/suite-king2.jpg);"></div>
								<!-- Rooms Text -->
								<div class="rooms-text">
								<p class="price-from">KING SUITE</p>
									<p>Member Rate &nbsp $160/night<p>
									<div class="line"></div>
									<p>Regular Rate &nbsp $180/night</p>
								</div>
								<!-- Book Room -->
								<a href="room-payment.php" class="book-room-btn btn palatin-btn">Book Room</a>
							</div>
						</div>
		<?php 
		}
		else if($_POST['rooms'] == 6)
		{ ?>				
						<div class="col-12 col-md-6 col-lg-4">
							<div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">-->
								<!-- Thumbnail -->
								<div class="bg-thumbnail bg-img" style="background-image: url(../img/room-img/Suite/twoRoom/suite-tworoom2.jpg);"></div>
								<!-- Rooms Text -->
								<div class="rooms-text">
								<p class="price-from">TWO-ROOM SUITE</p>
									<p>Member Rate &nbsp $180/night<p>
									<div class="line"></div>
									<p>Regular Rate &nbsp $200/night</p>
								</div>
								<!-- Book Room -->
								<a href="room-payment.php" class="book-room-btn btn palatin-btn">Book Room</a>
							</div>
						</div>
					</div>
		</div>
<?php 
        }
	   } ?>


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <?php include "footer.php"; ?>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	
	<script>
	$(function() { 
		$('#arrive').datepicker({
			format: 'yyyy-mm-dd'
		});
		$('#depart').datepicker({
			format: 'yyyy-mm-dd'
		});
	});
	
$('#room-form').on('submit',function(e){
	
	e.preventDefault();
	if($('#arrive').val() == "")
	{
		alert("Please enter an arrival date.");
		return false;
		
	}
	else if($('#depart').val() == "")
	{
		alert("Please enter a departure date.");
		return false;
		
	}
	else if($('#room_type').val() == "0")
	{
		alert("Please select a room type.");
		return false;
		
	}
	
	$('#room-form')[0].submit();
	
});
	
	</script>
	<?php
	$result->close();
	$conn->close();
	?>
	
</body>

</html>