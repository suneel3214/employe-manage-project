<?php 

include ('../db_con.php');
 $t = $_POST['t_id'];
 $r = $_POST['reply_by'];
 $tsk = $_POST['task'];
 $tsk_msg = $_POST['task_msg'];

 $data = "insert into task_reply(r_message,t_id,reply_by,task)values('$tsk_msg','$t','$r','$tsk')";
 $result = mysqli_query($con,$data);
 // echo "<pre>";
 // print_r($result);
 if ($result) {
 	header('location:task_view1.php');
 }


 ?>