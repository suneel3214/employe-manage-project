<?php include('../session.php'); ?>
<?php include ('header.php');
include ('side_navbar.php');
?>


 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
     <!-- Content Header (Page header) -->
    <div class="content-header" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
      <div class="container-fluid" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 class="m-0" style="color: #fff;">Employe</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- content-header end -->
    <!-- apna code karna hai -->
    <div class="container" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
      <div class="row">
        <div class="col-md-12">
           <h1 class="text-center text-light" style="font-family: 'Grechen Fuemen', cursive;">LEAVE VIEW</h1><br><br>
           <table class="table table-bordered  table-hover shadow">
            <?php 
            include ('../db_con.php');
            $id = $_GET['v'];
            $data = "select * from assign_leave where l_id = $id";
            $result = mysqli_query($con,$data);
            // echo "<pre>";
            // print_r($result);
            // die;
            $a = mysqli_fetch_array($result);
            // echo "<pre>";
            // print_r($a);
            // die;
        
             ?>
              <tr>
                  <th>VALID-FROM:</th>
                  <td><?php echo $a['valid_form']; ?></td>
              </tr>
              <tr>
                  <th>VALID-TOO:</th>
                  <td><?php echo $a['valid_to']; ?></td>
              </tr>
              <tr>
                  <th>EARNING-LEAVE:</th>
                  <td><?php echo $a['earning_leave']; ?></td>
              </tr>
              <tr>
                  <th>MEDICAL-LEAVE:</th>
                  <td><?php echo $a['medical_leave']; ?></td>
              </tr> 
              <tr>
                  <th>CASUAL-LEAVE:</th>
                  <td><?php echo $a['casual_leave']; ?></td>
              </tr> 
              <tr>
                  <th>ASSIGN-BY:</th>
                  <?php 
                       $id = $a['assignned_by'];
                       $data1 = "select * from employe where id = $id";
                       $result1 = mysqli_query($con,$data1);
                       $rows1 = mysqli_fetch_array($result1);
                  ?>
                    <td><?php echo $rows1['name']; ?></td>
              </tr> 
              <tr>
                  <th>TIME & DATE:</th>
                  <td><?php echo $a['datetime']; ?></td>
              </tr>              
           </table>
           <center><a href="get_leave.php" class="btn btn-success" style="background-image: linear-gradient(to right,#44220e,#1ed034);width: 120px; margin-bottom: 11px;">Back</a></center>
         </div> <!-- col md-12 end -->
    </div> <!-- row end -->
</div><!-- container end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->

<?php include ('footer.php');?>