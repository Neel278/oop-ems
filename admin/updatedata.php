<?php

if(isset($_POST['submit'])){

	$empno=$_POST['empno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$cont=$_POST['cont'];
	$id=isset($_POST['sid']) ? $_POST['sid']: '';
	$department=$_POST['department'];
	$imagename=$_FILES['image']['name'];
	$tempname=$_FILES['image']['tmp_name'];

	include('../class.php');
	$obj4=new User;
	$obj4->update($empno,$name,$city,$cont,$department,$imagename,$id,$tempname);
}

?>