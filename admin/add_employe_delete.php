<?php 

include ('db_con.php');
$id = $_GET['d'];
$data = "delete from employe where id = $id";
$result = mysqli_query($con,$data);
header('location:add_employe.php');
 ?>