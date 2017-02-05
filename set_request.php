
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
$uname = preg_replace("/[^A-Za-z0-9 ,\.]/", "", $_POST["uname"]);
$email = preg_replace("/[^A-Za-z0-9 ,\.]/", "", $_POST["email"]);
$support_line = preg_replace("/[^A-Za-z0-9 ,\.]/", "", $_POST["support_line"]);
$details = preg_replace("/[^A-Za-z0-9 ,\.]/", "", $_POST["details"]);

$sql = "INSERT INTO request (user_name, email, support_line, details) VALUES ('" . $uname . "', '" . $email . "', '" . $support_line . "', '" . $details . "');";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "<h1>Your ticket has been submitted successfully!</h1>";
}
else {
	echo "<h1>Error submitting ticket, please contact IT.</h1>";
}
?>
