<?php 

include ('db_con.php');
$id = $_GET['d'];
$data = "delete from task where t_id = $id";
$result = mysqli_query($con,$data);
header('location:task_display.php');
 ?>