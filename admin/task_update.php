<?php 

include ('db_con.php');
 $id = $_POST['t_id'];
 $task = $_POST['task'];

 $data = "update task set task = '$task' where t_id = '$id'";
 $result = mysqli_query($con,$data);
 header('location:task_display.php');

 ?>