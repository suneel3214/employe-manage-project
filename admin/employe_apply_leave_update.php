<?php 
include ('db_con.php');
if (isset($_POST['approved'])) {
	$status = "Approved";
	$comment = $_POST['comment'];
	$id = $_POST['a_id'];
	$data = "update apply_leave set status = '$status',comment = '$comment' where a_id = '$id'";
	$result = mysqli_query($con,$data);
	header('location:employ_apply_leave.php');
}

if (isset($_POST['rejected'])) {
	$status = "Rejected";
	$comment = $_POST['comment'];
	$id = $_POST['a_id'];
	$data = "update apply_leave set status = '$status',comment = '$comment' where a_id = '$id'";
	$result = mysqli_query($con,$data);
	header('location:employ_apply_leave.php');
}
 ?>