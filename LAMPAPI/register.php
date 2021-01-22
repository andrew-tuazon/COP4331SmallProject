<?php
    $indata = getRequestInfo();

    $login = "";
    $password = "";

    $conn = new mysqli("localhost", "Team21", "COP433121Team", "COP4331");

    function getRequestInfo() {
		return json_decode(file_get_contents('php://input'), true);
	}
?>