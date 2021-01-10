<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
	<nav>
		Homepage
	</nav>
	<?php
		
		$email =  $_SESSION['email'];
		echo "<h2>Welcome back!! $email</h2>";
	 ?>
</body>
</html>