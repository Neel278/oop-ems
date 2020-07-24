<?php

$id=$_REQUEST['sid'];
include('../class.php');
$obj6=new User;
$obj6->delete_info($id);

?>