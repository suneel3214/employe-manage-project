<?php 

include ('../db_con.php');
$id = $_GET['d'];
$data = "delete from apply_leave where a_id = $id";
$result = mysqli_query($con,$data);
if ($result) {
    header('location:apply_leave_status.php');
}

 ?>