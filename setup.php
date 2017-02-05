<?php
$servername = "localhost";
$username = "test";
$password = "test";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// Now try to setup the db
$sql = "CREATE DATABASE ticket";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    $sql="CREATE TABLE IF NOT EXISTS `request` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `support_line` varchar(256) NOT NULL,
	  `user_name` varchar(14) NOT NULL,
	  `user_id` varchar(14) NOT NULL,
	  `email` varchar(256) NOT NULL,
	  `application_code` varchar(8) NOT NULL,
	  `request_domain` varchar(256) NOT NULL,
	  `details` text NOT NULL,
	  `files_id` int(11) NOT NULL,
	  `assigned` varchar(10) NOT NULL,
	  PRIMARY KEY (`id`)
	);";
	if ($conn->query($sql) === TRUE) {
	    echo "Database created successfully";
	    $sql = "CREATE TABLE IF NOT EXISTS `admins` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `user` varchar(256) NOT NULL,
		  `pass` varchar(256) NOT NULL,
		  PRIMARY KEY (`id`)
		  );";
		if ($conn->query($sql) === TRUE) {
			echo "SETUP created successfully";
			$sql = "INSERT INTO `admins` (id, user, pass) VALUES (1,admin,admin);";
			$conn->query($sql);
		}
		else {
			echo "Error creating table " . $conn->error;
		}
	}
	else {
		echo "Error creating table " . $conn->error;
	}
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>