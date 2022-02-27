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
           <h1 class="m-0" style="color: #fff;">Task</h1>
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
               <th>EMPLOYE-NAME</th>
               <th>TASK</th>
               <th>ASSIGN-BY</th>
               <th>TIME-DATE</th>
               <th>ACTION</th>
             </tr>
           </thead>
           <tbody>
            <?php 
            include ('../db_con.php');
            $id = $_SESSION['id'];
            $data = "select * from task where e_id = $id";
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
               <td><?php echo $a['t_id'] ?></td>
               <?php 
                       $e_id = $a['e_id'];
                       $data1 = "select * from employe where id = $e_id";
                       $result1 = mysqli_query($con,$data1);
                       $rows1 = mysqli_fetch_array($result1);
               ?>
               <td><?php echo $rows1['name']; ?></td>
               <td><?php echo $a['task'] ?></td>
               <?php 
                       $id = $a['assigned_by'];
                       $data2 = "select * from employe where id = $id";
                       $result2 = mysqli_query($con,$data2);
                       $rows2 = mysqli_fetch_array($result2);
               ?>
               <td><?php echo $rows2['name']; ?></td>
               <td><?php echo $a['datetime']; ?></td>
               <td>
                 <a href="reply.php?v=<?php echo $a['t_id']; ?>" class="btn btn-warning">Reply</a>
               </td>
             </tr>
           <?php } ?>
           </tbody>
           <tfoot>
             <tr>
               <th>ID</th>
               <th>EMPLOYE-NAME</th>
               <th>TASK</th>
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