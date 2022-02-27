<?php 
include('../db_con.php');
$asign = $_POST['assigned_by'];
$leave_f = $_POST['leave_from'];
$leave_t = $_POST['leave_to'];
$earn = $_POST['earning'];
$medi = $_POST['medical'];
$cas = $_POST['casual'];
$status = "Pending";

$data = "insert into apply_leave(leave_from,leave_too,earning_leave,medical_leave,casual_leave,apply_by,status,comment)values('$leave_f','$leave_t','$earn','$medi','$cas','$asign','$status','')";
$result = mysqli_query($con,$data);
if ($result) {
	header('location:apply_leave_status.php');
}


 ?>