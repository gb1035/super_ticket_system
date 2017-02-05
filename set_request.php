
<?php 
echo $_POST["uname"];
echo $_POST["email"];
echo $_POST["support_line"];
echo $_POST["details"];

$servername = "localhost";
$username = "test";
$password = "test";
$database = "ticket";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
$sql = "INSERT INTO request (user_name, email, support_line, details) VALUES (" . $_POST["uname"] . ", " . $_POST["email"] . ", " . $_POST["support_line"] . ", " . $_POST["details"] . ");";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "<h1>Your ticket has been submitted successfully!</h1>";
}
else {
	echo "<h1>Error submitting ticket, please contact IT.</h1>"
}
?>
