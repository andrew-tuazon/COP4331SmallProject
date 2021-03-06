<?php
	function getRequestInfo() {
		return json_decode(file_get_contents('php://input'), true);
	}

	function sendResultInfoAsJson($obj) {
		header('Content-type: application/json');
		echo $obj;
	}
	
	function returnWithError($err) {
		$retValue = '{"error":"' . $err . '"}';
		sendResultInfoAsJson( $retValue );
    }
    
    function returnWithInfo($firstName, $lastName, $id) {
        $returnValue = '{"id": ' . $id . ', "firstName": ' . $firstName . ', "lastName": ' . $lastName . '"error":""'};
        sendResultInfoAsJSON($returnValue);
    }
?>