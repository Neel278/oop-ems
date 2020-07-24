<?php
session_start();

include('header.php');
?>
<div class="titlehead" align="center">
		<h4><a href="../logout.php" style="float: right; margin-right: 30px;color: #32cd32; font-size: 20px;">Logout</a></h4>
		<h1>Welcome to admin dashboard.</h1>

	</div>
	<div class="dashboard">
		<table style="width: 50%;"align="center">
			<tr>
				<td>1.</td><td><a href="insert.php"><h2>Insert Student Details</h2></a></td>
			</tr>
			<tr>
				<td>2.</td><td><a href="update.php"><h2>Update Student Details</h2></a></td>
			</tr>
			<tr>
				<td>3.</td><td><a href="delete.php"><h2>Delete Student Details</h2></a></td>
			</tr>
		</table>
	</div>
</body>
</html>
