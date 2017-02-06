<?php
if (!isset($_POST['submit'])){
?>
<html>
<head>
	<title>User Login Form - PHP MySQL Ligin System | W3Epic.com</title>
</head>
<body>
<h1>User Login Form - PHP MySQL Ligin System | W3Epic.com</h1>
<!-- The HTML login form -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" /><br />

		<input type="submit" name="submit" value="Login" />
	</form>
<?php
} else {
	$mysqli = new mysqli('localhost', 'test', 'test', 'ticket');
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * from admins WHERE user LIKE '{$username}' AND pass LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);
	if (!$result->num_rows == 1) {
		echo "<html>
			<head>
				<title>User Login Form - PHP MySQL Ligin System | W3Epic.com</title>
			</head>
			<body>";
		echo "<p>Invalid username/password combination</p>";
	} else {
		// echo "<p>Logged in successfully</p>";
		setcookie('username', $_POST['username'], time()+60*60*24*365, '/account', 'www.example.com');
		header( 'Location: /admin.php' ) ;
	}
}
?>		
</body>
</html>
