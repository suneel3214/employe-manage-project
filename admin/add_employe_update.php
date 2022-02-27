<?php 
include ('db_con.php');
 $id = $_POST['id'];
 $n = $_POST['name'];
 $e = $_POST['email'];
 $p = $_POST['password'];
 $a = $_POST['age'];
 $phn = $_POST['phone'];
 $g = $_POST['gender'];
 $dept = $_POST['dept'];
 $r = $_POST['role'];

 $data = "update employe set name = '$n' , email = '$e' , password = '$p' , age = '$a' , phone = '$phn' , gender = '$g' , department = '$dept' , role = '$r' where id = '$id' ";
 $result = mysqli_query($con,$data);

 header('location:add_employe.php');

 ?>