<?php include('../session.php'); ?>
<?php include ('header.php');
include ('side_navbar.php');
?>

<?php 
include ('db_con.php');
$id = $_GET['v'];
$data = "select * from employe where id = $id";
$result = mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
// die;
$a = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($a);
// die;
 ?>

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
     <!-- Content Header (Page header) -->
    <div class="content-header" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
      <div class="container-fluid" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 class="m-0" style="color: #fff;">Admin</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- content-header end -->
    <!-- apna code karna hai -->
    <div class="container" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
      <div class="row">
        <div class="col-md-12">
           <h1 class="text-center text-light" style="font-family: 'Grechen Fuemen', cursive;">EMPLOYE RECORDS VIEW</h1><br><br>
           <table class="table table-bordered  table-hover shadow">
              <tr>
                  <th>ID:</th>
                  <td><?php echo $a['id'] ?></td>
              </tr>
              <tr>
                  <th>EMPLOYE NAME:</th>
                  <td><?php echo $a['name'] ?></td>
              </tr>
              <tr>
                  <th>EMAIL:</th>
                  <td><?php echo $a['email'] ?></td>
              </tr>
              <tr>
                  <th>PASSWORD:</th>
                  <td><?php echo $a['password'] ?></td>
              </tr>
              <tr>
                  <th>AGE:</th>
                  <td><?php echo $a['age'] ?></td>
              </tr>
              <tr>
                  <th>PHONE:</th>
                  <td><?php echo $a['phone'] ?></td>
              </tr>
              <tr>
                  <th>GENDER:</th>
                  <td><?php echo $a['gender'] ?></td>
              </tr>
              <tr>
                  <th>DEPARTEMENT:</th>
                  <td><?php echo $a['department'] ?></td>
              </tr>
              <tr>
                  <th>ROLE:</th>
                  <td><?php echo $a['role'] ?></td>
              </tr>              
           </table>
           <center><a href="add_employe.php" class="btn btn-success" style="background-image: linear-gradient(to right,#44220e,#1ed034);width: 120px; margin-bottom: 11px;">Back</a></center>
         </div> <!-- col md-12 end -->
    </div> <!-- row end -->
</div><!-- container end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->

<?php include ('footer.php');?>