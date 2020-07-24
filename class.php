<?php

include("db_config.php");
//include('../admin/updatedata.php');

class User{
	public $db;

	public function __construct(){
		$this->db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

		if(mysqli_connect_errno()){
			echo "Error:could not connect to databse;";
			exit();
		}
		
	}
			//For Registration process
	public function reg_user($empno,$name,$city,$cont,$department,$imagename,$tempname){
		
		move_uploaded_file($tempname, "../image/$imagename");

		$qry="INSERT INTO `employee`(`id`, `empno`, `name`, `city`, `cont`, `department`, `image`) VALUES (NULL,'$empno','$name','$city','$cont','$department','$imagename')";
		$run=mysqli_query($this->db,$qry);

		if($run == true){
		
			?>

			<script type="text/javascript">
				alert('File Inserted Successfully');
				open.window(insert.php,_self);
			</script>

			<?php
	}else{

	?>

		<script type="text/javascript">
			alert('Wrong mobile number');
			open.window(insert.php,_self);
		</script>

		<?php
}
		
		/*$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$check = $this->db->query($sql);
		$count_row = $check->num_rows;

		if($count_row == 0){
			$sql1="INSERT INTO employee SET username='$username',password='$password'";
			$result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
			return $result;
		}else{
			return false;
		}*/
	}
				//For Login process
	public function check_login($username,$password){
		$sql2="SELECT `id` FROM `admin` WHERE username='$username' AND password='$password'";

		$result = mysqli_query($this->db,$sql2);
		$user_data = mysqli_fetch_array($result);
		$count_row=$result->num_rows;

		if($count_row == 1){
			$_SESSION['login'] = true;
			$_SESSION['id'] = $user_data['id'];
			if (isset($_SESSION['id']))
			{
				header('location:admin/dash.php');
			}
}
		else{
			header('location:login.php');
		}
	}
			//To get Username
	public function get_username($id){

		$sql3="SELECT `username` FROM `admin` WHERE id='$id'";
		$result = mysqli_query($this->db,$sql3);
		$user_data=mysqli_fetch_array($result);
		echo $user_data['username'];
	}
	public function update_data($department,$name){

		$sql="SELECT * FROM `employee` WHERE `department`='$department' AND `name` LIKE '%$name%'";
		$run=mysqli_query($this->db,$sql);
		$count_row=$run->num_rows;
		if($count_row==1){
			echo "<tr><td colspan='5'>No Records Found</td></tr>";
		}else{
		$count=0;
		while($data=mysqli_fetch_array($run)){
			$count++;
			?>
			<tr>
				<th><?php echo $count; ?></th>
				<th><img src="../image/<?php echo $data['image']; ?>" style="max-width: 100px;"></th>
				<th><?php echo $data['name']; ?></th>
				<th><?php echo $data['empno']; ?></th>
				<th><a href="updateinfo.php?sid=<?php echo $data['id']; ?>">Edit</a></th>
			</tr>
			<?php
	
		}
		}
	}
	public function update($empno,$name,$city,$cont,$department,$imagename,$id,$tempname){
		$destination="../image/".$imagename;
		move_uploaded_file($tempname,$destination);
	  

	$sql="UPDATE `employee` SET `empno`='$empno',`name`='$name',`city`='$city',`cont`='$cont',`department`='$department',`image`='$imagename' WHERE `id`='$id'";
	$run=mysqli_query($this->db,$sql);

	if($run == true){
		?>
		<script type="text/javascript">
			alert('File Updated Successfully.');
			window.open('update.php','_self');
		</script>
		<?php
	}
	}
	public function update_info(){

		$sid = isset($_GET['sid']) ? $_GET['sid']: ' ';
		$sql = "SELECT * FROM `employee` WHERE `id`='$sid'";
		$run = mysqli_query($this->db,$sql);
		$data = mysqli_fetch_assoc($run);
        
		$_SESSION['data']=$data;
      /*  $filename=$_FILES['image']['tmp_name'];
        $destination="../image".$_FILES['image']['name'];
        move_uploaded_file($filename, $destination);
        $_SESSION['username'] = $destination;
*/

	}
	public function delete($department,$name){
	$sql="SELECT * FROM `employee` WHERE `department`='$department' AND `name` LIKE '%$name%'";
	$run=mysqli_query($this->db,$sql);

	if(mysqli_num_rows($run)<1){
		echo "<tr><td colspan='5'>No Records Found</td></tr>";
	}else{
		$count=0;
		while($data=mysqli_fetch_assoc($run)){
			$count++;
			?>
			<tr>
				<th><?php echo $count; ?></th>
				<th><img src="../image/<?php echo $data['image']; ?>" style="max-width: 100px;"></th>
				<th><?php echo $data['name']; ?></th>
				<th><?php echo $data['empno']; ?></th>
				<th><a href="deleteinfo.php?sid=<?php echo $data['id']; ?>">DELETE</a></th>
			</tr>
			<?php
		}
	}
	}
	public function delete_info($id){
		$sql="DELETE FROM `employee` WHERE `id`='$id'";
		$run=mysqli_query($this->db,$sql);

		if($run=true){
			?>
			<script type="text/javascript">
				alert('Data Deleted Successfully');
				window.open('delete.php','_self');
			</script>
			<?php
		}
	}
	public function get_session(){
		return $_SESSION['login'];
	}
	public function user_logout(){
		$_SESSION['login'] = FALSE;

		session_destroy();
	}
}

?>