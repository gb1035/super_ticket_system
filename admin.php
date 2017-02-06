<?php

if (isset($_COOKIE['username'])) {
	if ($_COOKIE['username'] == 'admin'){
		echo "<html>
			<head>
				<title>User Login Form - PHP MySQL Ligin System | W3Epic.com</title>
			</head>
			<body>";
		echo "<h1>Welcome admin!</h1>";

		$servername = "localhost";
		$username = "test";
		$password = "test";
		$database = "ticket";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $database);

		$sql = "SELECT * FROM request where finished = 0;";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    echo "<table><tr><th>ID</th><th>User Name</th><th>Email</th><th>Title</th><th>Details</th></tr>";
		    while($row = $result->fetch_assoc()) {
		        echo "<tr><td><a href='/delete/'" . $row["id"]. ">Mark Complete</a></td><td>" . $row["user_name"]. "</td><td>" . $row["email"]. "</td><td>" .$row["support_line"]. "</td><td>". $row["details"] ."</td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}
	}
	else {
		header( 'Location: /login.php' ) ;
	}
}
else{
	header( 'Location: /login.php' ) ;
}

?>

</body>
</html>