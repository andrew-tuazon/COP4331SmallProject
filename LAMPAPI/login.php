<?php
    $inData = getRequestInfo();

    $id = 0;
    $firstName = "";
    $lastName = "";

    $conn = new mysqli("localhost", "Team21", "COP433121Team", "COP4331");

    if ($conn->connect_error) {
        returnWithError($conn->connect_error)
    } else {
        $sql = "SELECT "
    }

    function getRequestInfo() {
        return json_decode(file_get_contents('php://input'), true)
    }



?>