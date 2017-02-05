
<!-- 

CREATE DATABASE IF NOT EXISTS ticket
CREATE TABLE IF NOT EXISTS `request` (
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
);


CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `admins` (id, user, pass) VALUES (1,admin,admin);

 -->
<!DOCTYPE html>
<html>
<head>
	<title>super ticket system</title>
</head>
<body>
<h1>Welcome to Super Ticket System!</h1>
<h3>Please fill out the following form to submit a ticket.</h3>
<form id="userRequest" name="userrequest_form" class="form-horizontal" action="set_request.php" enctype="multipart/form-data" method="post">
    User Name: <input type="text" name="uname"><br>
    Email: <input type="text" name="email"><br>
    Support Line: <input type="text" name="support_line"><br>
    Details: <input type="textarea" name="details"><br>
    <input type="submit" value="Submit">
</form>
<a href="/admin.php">If you are an amdin, click here</a>

</body>
</html>