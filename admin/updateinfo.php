<?php
session_start();

include('header.php');
include('titlehead.php');

include('../class.php');
$n3=new User;
$n3->update_info();


?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table border="1" style="width: 70%; margin-top: 60px;" align="center">
		<tr>
			<th align="center">Employee No</th>
			<td><input type="text" name="empno" value=<?php echo $_SESSION['data']['empno']; ?> required></td>
		</tr>
		<tr>
			<th align="center">Name</th>
			<td><input type="text" name="name" value=<?php echo $_SESSION['data']['name']; ?> required></td>
		</tr>
		<tr>
			<th align="center">City</th>
			<td><input type="text" name="city" value=<?php echo $_SESSION['data']['city']; ?> required></td>
		</tr>
		<tr>
			<th align="center">Contact No</th>
			<td colspan="2"><input type="text" name="cont" value=<?php echo $_SESSION['data']['cont']; ?> required></td>
		</tr>
		<tr>
			<th align="center">Department</th>
			<td colspan="2"><input type="text" name="department" value=<?php echo $_SESSION['data']['department']; ?> required></td>
		</tr>
		<tr>
			<th align="center">Image</th>
			<td><input type="file" name="image"  required></td>
			<td><input type="text" name="" value="<?php echo$_SESSION['data']['image'] ?>"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="hidden" name="sid" value=<?php echo $_SESSION['data']['id'];; ?> required>

				<input type="submit" name="submit" value="Update">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
