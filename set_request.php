
<?php 
echo $_POST["uname"];
echo $_POST["email"];
echo $_POST["support_line"];
echo $_POST["details"];

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
?>
