<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Employee Management System</title>
</head>
<body>
	<h3 align="right" style="margin-right: 25px"><a href="login.php">Admin Login >></a></h3>
	<h1 align="center">Welcome To Employee Management System</h1>
	<h4 align="center">By Neel Thakkar</h4>

	<form method="post" action="index.php">
		<table align="center">
			<tr>
				<td colspan="2" align="center"><b>Employee Information</b></td>
			</tr>
			<tr>
				<td>Choose Department</td>
				<td>
				<select name="department" required>
					<option value="1">Computer Department</option>
					<option value="2">Electrical Department</option>
					<option value="3">Electronic Department</option>
					<option value="4">Mechanical Department</option>
					<option value="5">IT Department</option>
					<option value="6">Instr. & Control Department</option>
					<option value="7">Civil Department</option>
					<option value="8">Environment Department</option>
				</select>
				</td>
			</tr>
			<tr>
				<td align="center">Enter Employee no.</td>
				<td><input type="text" name="empno" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Show Information"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>