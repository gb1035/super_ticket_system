<?php

if (isset($_COOKIE['username']) && isset($_GET['ticket'])) {
	if ($_COOKIE['username'] == 'admin'){


		$servername = "localhost";
		$username = "test";
		$password = "test";
		$database = "ticket";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $database);

		$ticket = preg_replace("/[^0-9]/", "", $_GET["ticket"]);

		$sql = "UPDATE request SET finished = 1 where id = ". $ticket .";";
		$result = $conn->query($sql);
		header( 'Location: /admin.php' ) ;
	}
	else {
		header( 'Location: /admin.php' ) ;
	}
}
else{
	header( 'Location: /admin.php' ) ;
}
?>

</body>
</html>