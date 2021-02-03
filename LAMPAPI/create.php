<?php
	include 'util.php';
	include 'classes/contact.php';

	$inData = getRequestInfo();
	
	$firstName = $inData["contactFirstName"];
	$lastName = $inData["contactLastName"];
	$phone = $inData["phone"];
	$email = $inData["email"];
	$address = $inData["address"];
	$city = $inData["city"];
	$state = $inData["state"];
	$zip = $inData["zip"];

	$conn = new mysqli("localhost", "Team21", "COP433121Team", "COP4331");

	if ($conn->connect_error) {
		returnWithError( $conn->connect_error );
	}
	else {
		$sql = "insert into CONTACTS (firstName, lastName, phone, email, address, city, state, zip) VALUES 
		('" . $firstName . "','". $lastName . "','" . $phone . "', '" . $email . "', '" . $address . "', 
		'" . $city . "', '" . $state . "', " . $zip . ");";

		if($result = $conn->query($sql) != TRUE)
		{
			returnWithError($conn->error);
		}
		
		$conn->close();
	}
?>