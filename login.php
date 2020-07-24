<?php

include('class.php');
if (isset($_POST['login'])) {
	$obj=new User;
	$obj->check_login($_POST['username'],$_POST['password']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
</head>
<body>
	<h3 align="left"><a href="index.php"><< Back Home</a></h3>
	<h2 align="center">Admin Login</h2>
	<form method="post" action="login.php">
	<table align="center">
		<tr>
			<td><b>Username</b></td>
			<td><input type="text" name="username" placeholder="Enter Your Username" required></td>
		</tr>
		<tr>
			<td><b>Password</b></td>
			<td><input type="password" name="password" placeholder="Enter Your Password" required></td>
		</tr>
		<tr>
			<td><td><input type="submit" name="login" value="Login"></td></td>
		</tr>
	</table>
	</form>
</body>
</html>
