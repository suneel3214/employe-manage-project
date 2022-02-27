<?php 
include('db_con.php');
 $n = $_POST['name'];
 $e = $_POST['email'];
 $p = $_POST['password'];
 $a = $_POST['age'];
 $phn = $_POST['phone'];
 $g = $_POST['gender'];
 $d = $_POST['dept'];
 $r = $_POST['role'];

 $data = "insert into employe(name,email,password,age,phone,gender,department,role)values('$n','$e','$p','$a','$phn','$g','$d','$r')";
 $result = mysqli_query($con,$data);
 echo "<pre>";
 print_r($result);
 header('location:add_employe.php');

 ?>