<?php
    include 'util.php';
    
    $inData = getRequestInfo();

    $id = 0;
    $firstName = "";
    $lastName = "";
    $adress = "";
    $city = "";
    $zip = "";
    $state = "";
    $phone = "";
    $email = "";

    $conn = new mysqli("localhost", "Team21", "COP433121Team", "COP4331");
    
    if ($conn->connect_error) {
        returnWithError($conn->connect_error);
    } else {
        $sql = "";
        $result = $conn->query("sql");
    }
?>