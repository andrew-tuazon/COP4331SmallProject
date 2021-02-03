<?php
	include 'util.php';

	$inData = getRequestInfo();
	
	$uid = 0;
	$cid = 0;
	$firstName = "";
	$lastName = "";

	$conn = new mysqli("localhost", "Team21", "COP433121Team", "COP4331");
	if ($conn->connect_error) 
	{
		returnWithError( $conn->connect_error );
	} 
	else
	{
		$sql = "SELECT ID,firstName,lastName FROM Users where login=`" . $inData["login"] . "` and password=`" . $inData["password"] . "`";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();
			$firstName = $row["firstName"];
			$lastName = $row["lastName"];
			$id = $row["ID"];
			
			returnWithInfo($firstName, $lastName, $id );
		}
		else
		{
			returnWithError( "No Records Found" );
		}

		$conn->close();
	}
?>