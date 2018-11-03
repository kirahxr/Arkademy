<!DOCTYPE html>
<html>
<head>
	<title>Validasi</title>
</head>
<body>

	<center><b>VALIDATE</b></center>

	<form action="" method="get">
		<label><b>Validate User</b></label><br><br>
		<input type="text" name="username">
		<button name="user">Validate</button>
	</form>
	<?php
		if (isset($_GET['user'])) {
			$user = $_GET['username'];
			if (preg_match("/[a-z]{5}_[0-9]{2}/", $user)) {  
				echo "valid"; 
			}else{
				echo "not valid";
			}
		}
	?>
</body>
</html>