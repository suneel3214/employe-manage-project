<?php include('../session.php'); ?>
<?php include ('header.php');
include ('side_navbar.php');
?>

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
     <!-- Content Header (Page header) -->
    <div class="content-header" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 class="m-0" style="color: #fff;">My Leave</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- content-header end -->
    <!-- apna code karna hai -->
     <div class="card-body" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
         <table id="example1" class="table table-bordered table-striped">
           <thead>
             <tr>
               <th>ID</th>
                <th>EARNING-LEAVE</th>
                <th>MEDICAL-LEAVE</th>
                <th>CASUAL-LEAVE</th>
                <th>ASSIGN-TO</th>
                <th>ASSIGN-BY</th>
                <th>ACTION</th>
             </tr>
           </thead>
           <tbody>
            <?php 
            include ('../db_con.php');
            $id = $_SESSION['id'];
            $i = 1;
            $data = "select * from assign_leave where assignned_to = '$id'";
            $result = mysqli_query($con,$data);
            // echo "<pre>";
            // print_r($result);
            // die;
            // $a = mysqli_fetch_array($result);
            // echo "<pre>";
            // print_r($a);
            // die;
            while ($a = mysqli_fetch_array($result)) {
        
             ?>
             <tr>
               <td><?php echo $i++ ?></td>
               <td><?php echo $a['earning_leave'] ?></td>
               <td><?php echo $a['medical_leave'] ?></td>
               <td><?php echo $a['casual_leave'] ?></td>
               <?php 
                   $id = $a['assignned_to'];
                   $data1 = "select * from employe where id = $id";
                   $result1 = mysqli_query($con,$data1);
                   $rows1 = mysqli_fetch_array($result1);
                ?>
               <td><?php echo $rows1['name']; ?></td>
               <?php 
                   $id = $a['assignned_by'];
                   $data1 = "select * from employe where id = $id";
                   $result1 = mysqli_query($con,$data1);
                   $rows1 = mysqli_fetch_array($result1);
                ?>
               <td><?php echo $rows1['name']; ?></td>
               <td>
                 <a href="get_leave_view.php?v=<?php echo $a['l_id']; ?>" class="btn btn-warning">View</a>
                 <a href="apply_leave.php?g=<?php echo $a['l_id']; ?>" class="btn btn-primary">Apply_Leave</a>
               </td>
             </tr>
           <?php } ?>
           </tbody>
           <tfoot>
             <tr>
               <th>ID</th>
               <th>EMPLOYE-NAME</th>
               <th>TASK</th>
               <th>ASSIGN-TO</th>
               <th>ASSIGN-BY</th>
               <th>TIME-DATE</th>
               <th>ACTION</th>
             </tr>
           </tfoot>
         </table>
     </div><!-- container end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->

<?php include ('footer.php');?>