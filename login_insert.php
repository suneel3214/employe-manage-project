<?php 
session_start();
include ('db_con.php');
$e = $_POST['email'];
$p = $_POST['password'];
$data = "select * from employe where email = '$e' && password = '$p'";
$result = mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
$total = mysqli_num_rows($result);
// echo "<pre>";
// print_r($total);
$a = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($a);
if ($total == 1) {
    $_SESSION['email'] = $e;
    $_SESSION['name'] = $a['name'];
    $_SESSION['id'] = $a['id'];
    $_SESSION['role'] =$a['role'];
 // multiple login//
    $role = $a['role'];
    // echo $role;
    // die;
    if ($role == 'Admin') {
        header("location:admin/dashboard.php");

    } else if($role == 'Employe'){
        header('location:employe/dashboard.php');

    }
    else if($role == 'other'){
        header('location:other/dashboard.php');
    }
    
}
else{
    echo "Enter valid email or passwords";
}


 ?>