<?php 
session_start();
include('db_con.php');
 $e_id = $_POST['e_id'];
 $assign = $_POST['assigned_by'];
 $task = $_POST['task'];

 // echo "<pre>";
 // print_r($e_id);

 foreach ($e_id as $employe_id) {
 	$data = "insert into task(task,e_id,assigned_by)values('$task','$employe_id','$assign')";
 	$result = mysqli_query($con,$data);
 	header('location:task.php');
 }

 ?>