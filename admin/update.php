<?php
session_start();

include('header.php');
include('titlehead.php');

?>

<table align="center" border="1" style="width: 80%">
	<form method="post" action="update.php">
		<tr>
			<th>Enter Department</th>
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

			<th>Employee name</th>
			<td><input type="text" name="name" placeholder="Enter Employee Name"></td>

			<td colspan="2" align="center"><input type="submit" name="submit" value="Check"></td>
		</tr>
	</form>
</table>
</body>
</html>
<table align="center" border='1' style="width: 80%; margin-top: 10px;">
	<tr style="background-color:#00203FFF; color: #fff;">
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Employee No</th>
		<th>Edit</th>
	</tr>
<?php

if(isset($_POST['submit'])){
	include('../class.php');
	$obj1=new User;

	$department=$_POST['department'];
	$name=$_POST['name'];

	$obj1->update_data($department,$name);
	
}

?>
</table>