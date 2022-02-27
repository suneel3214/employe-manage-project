<?php 
session_start();
include('db_con.php');
 $e_id = $_POST['e_id'];
 $assign = $_POST['assigned_by'];
 $valid_f = $_POST['valid_form'];
 $valid_t = $_POST['valid_too'];
 $earn = $_POST['earning'];
 $medi = $_POST['medical'];
 $casu = $_POST['casual'];

 // echo "<pre>";
 // print_r($e_id);

 foreach ($e_id as $employe_id) {
 	$data = "insert into assign_leave(valid_form,valid_to,earning_leave,medical_leave,casual_leave,assignned_by,assignned_to)values('$valid_f','$valid_t','$earn','$medi','$casu','$assign','$employe_id')";
 	$result = mysqli_query($con,$data);
 	// echo "<pre>";
 	// print_r($result);
 	// die;
 	header('location:assign_leave.php');
 }
 ?>