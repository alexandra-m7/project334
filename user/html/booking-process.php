<html>
<body>
<?php 
	session_start();
	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);

	if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['province']) && isset($_POST['country']) && isset($_POST['postal_code']))
	{
		$first_name  = $_POST['first_name'];
		$last_name   = $_POST['last_name'];
		$email       = $_POST['email'];
		$phone       = $_POST['phone'];
		$address     = $_POST['address'];
		$city        = $_POST['city'];
		$province    = $_POST['province'];
		$country     = $_POST['country'];
		$postal_code = $_POST['postal_code'];
		//$query     = "INSERT INTO guest VALUES" ."('$first_name', '$last_name', '$email', '$phone', '$address', '$city', '$province', '$country', '$postal_code')";
		$query       = "INSERT INTO guest (first_name, last_name, email, phone, address, city, province, country, postal_code, date_created) VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$phone."', '".$address."', '".$city."', '".$province."', '".$country."', '".$postal_code."', CURRENT_DATE )";
		//$query     = "INSERT INTO guest (first_name, last_name, email, phone, address, city, province, country, postal_code) VALUES ('A', 'M', 'aly@hotmail.com', '5192583541', '1909 Verdun Ave', 'Windsor', 'ON', 'Canada', 'N8W 1P6')";
		$result      = $conn->query($query);
		

		if (!$result)
			echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
		
	}
	
		$arrive = $_SESSION["arrive"];
		$depart = $_SESSION["depart"];
		$rooms = $_SESSION["rooms"];
		
		
		if($rooms == 1)
		{
			//$r1 = "SELECT room_id FROM room WHERE room_type_id=1";
			$q = "INSERT INTO reservation (guest_id, room_id, booking_date,reservation_start_date, reservation_end_date) VALUES (LAST_INSERT_ID(), (SELECT DISTINCT room_id FROM room WHERE room_type_id='1' LIMIT 1),CURRENT_DATE,'".$arrive."', '".$depart."')";	
			$result1      = $conn->query($q);

			if (!$result1)
			echo "INSERT failed: $q<br>" . $conn->error . "<br><br>";
			
		}
		else if($rooms == 2)
		{
			//$r1 = "SELECT room_id FROM room WHERE room_type_id=1";
			$q = "INSERT INTO reservation (guest_id, room_id, booking_date,reservation_start_date, reservation_end_date) VALUES (LAST_INSERT_ID(), (SELECT DISTINCT room_id FROM room WHERE room_type_id='2' LIMIT 1),CURRENT_DATE,'".$arrive."', '".$depart."')";	
			$result2      = $conn->query($q);

			if (!$result2)
			echo "INSERT failed: $q<br>" . $conn->error . "<br><br>";
			
		}
		else if($rooms == 3)
		{
			//$r1 = "SELECT room_id FROM room WHERE room_type_id=1";
			$q = "INSERT INTO reservation (guest_id, room_id, booking_date,reservation_start_date, reservation_end_date) VALUES (LAST_INSERT_ID(), (SELECT DISTINCT room_id FROM room WHERE room_type_id='3' LIMIT 1),CURRENT_DATE,'".$arrive."', '".$depart."')";	
			$result3      = $conn->query($q);

			if (!$result3)
			echo "INSERT failed: $q<br>" . $conn->error . "<br><br>";
			
		}
		else if($rooms == 4)
		{
			//$r1 = "SELECT room_id FROM room WHERE room_type_id=1";
			$q = "INSERT INTO reservation (guest_id, room_id, booking_date,reservation_start_date, reservation_end_date) VALUES (LAST_INSERT_ID(), (SELECT DISTINCT room_id FROM room WHERE room_type_id='4' LIMIT 1),CURRENT_DATE,'".$arrive."', '".$depart."')";	
			$result4      = $conn->query($q);

			if (!$result4)
			echo "INSERT failed: $q<br>" . $conn->error . "<br><br>";
			
		}
		if($rooms == 5)
		{
			//$r1 = "SELECT room_id FROM room WHERE room_type_id=1";
			$q = "INSERT INTO reservation (guest_id, room_id, booking_date,reservation_start_date, reservation_end_date) VALUES (LAST_INSERT_ID(), (SELECT DISTINCT room_id FROM room WHERE room_type_id='5' LIMIT 1),CURRENT_DATE,'".$arrive."', '".$depart."')";	
			$result5      = $conn->query($q);

			if (!$result5)
			echo "INSERT failed: $q<br>" . $conn->error . "<br><br>";
			
		}
		else if($rooms == 6)
		{
			//$r1 = "SELECT room_id FROM room WHERE room_type_id=1";
			$q = "INSERT INTO reservation (guest_id, room_id, booking_date,reservation_start_date, reservation_end_date) VALUES (LAST_INSERT_ID(), (SELECT DISTINCT room_id FROM room WHERE room_type_id='6' LIMIT 1),CURRENT_DATE,'".$arrive."', '".$depart."')";	
			$result6      = $conn->query($q);

			if (!$result6)
			echo "INSERT failed: $q<br>" . $conn->error . "<br><br>";
			
		}

		
	if(isset($_POST['card_type']) && isset($_POST['card_number']) && isset($_POST['cvv']) && isset($_POST['name_on_card']))
	{
		$card_type     = $_POST['card_type'];
		$card_number   = $_POST['card_number'];
		$cvv           = $_POST['cvv'];
		$name_on_card  = $_POST['name_on_card'];
		$card_query    = "INSERT INTO credit_card (reservation_id, card_type, card_number, cvv, name_on_card) VALUES (LAST_INSERT_ID(),'".$card_type."', '".$card_number."', '".$cvv."', '".$name_on_card."')";
		$result_card        = $conn->query($card_query);

		if (!$result_card)
			echo "INSERT failed: $card_query<br>" . $conn->error . "<br><br>";
	
	}
	
	//$result->close();
	//$result2->close();
	//$result3->close();
	$conn->close();
	?>
	
successfully submitted

</body>
</html>
	