<?php

	$inData = getRequestInfo();

	$cid = $inData["contactId"]
	$firstName = $inData["contactFirstName"];
	$lastName = $inData["contactLastName"];
	$phone = $inData["phone"];
	$email = $inData["email"];
	$address = $inData["address"];
	$city = $inData["city"];
	$state = $inData["state"];
	$zip = $inData["zip"];

	$conn = new mysqli("localhost", "Team21", "COP433121Team", "COP4331");

	if ($conn->connect_error) 
	{
		returnWithError( $conn->connect_error );
	} 
	else
	{
		$sql = "UPDATE CONTACTS SET firstName = '".$firstName."', lastName = '".$lastName."', phone = '".$phone."', email = '".$email."', address = '".$address."', city = '".$city."', state = '".$state."', zip = '".$zip."' WHERE cid = $cid
		if ($conn->query($sql) === TRUE) {
  			echo "Contact information updated successfully";
		} 
		else {
 			echo "Error updating contact information: " . $conn->error;
		}
		
		$conn->close();
	}
	
	function getRequestInfo()
	{
		return json_decode(file_get_contents('php://input'), true);
	}

	function sendResultInfoAsJson( $obj )
	{
		header('Content-type: application/json');
		echo $obj;
	}
	
	function returnWithError( $err )
	{
		$retValue = '"error":"' . $err . '"';
		sendResultInfoAsJson( $retValue );
	}
	
?>