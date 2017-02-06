<?php
echo $_COOKIE;
if (isset($_COOKIE['username'])) {
	echo "Welcome admin!";
	echo $_COOKIE['username'];
}
else{
	// header( 'Location: /login.php' ) ;
}

?>