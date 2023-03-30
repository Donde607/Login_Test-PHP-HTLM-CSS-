<?php
    include'Loginserv.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login-box">
		<h1>LOGIN</h1>
		<form action="" method="POST">
			<label for="username">Username :</label>
			<input type="text" id="username" name="username" placeholder="Enter your username" required>

			<label for="password">Password :</label>
			<input type="password" id="password" name="password" placeholder="Enter your password" required>

			<input type="submit" value="Login" name="submit">
            <span><?php echo $invalid; ?></span>
		</form>
	</div>
</body>
</html>
