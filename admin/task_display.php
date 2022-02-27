<?php include('../session.php'); ?>
<?php include ('header.php');
include ('side_navbar.php');
?>

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
    <div class="content-header" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 class="m-0" style="color: #fff;">Task-View</h1>
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
                    <th>EMPLOYEE NAME</th>
                    <th>ASSIGNED-BY</th>
                    <th>DATE & TIME</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                     $i = 1;
                     include('db_con.php');           
                     $data = "select * from task order by t_id desc";
                     $result = mysqli_query($con,$data);            
                     // $a = mysqli_fetch_array($result);            
                     while ($a = mysqli_fetch_array($result)) {
          
                  ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <?php 
                       $e_id = $a['e_id'];
                       $data1 = "select * from employe where id = $e_id";
                       $result1 = mysqli_query($con,$data1);
                       $rows1 = mysqli_fetch_array($result1);
                     ?>
                    <td><?php echo $rows1['name']; ?></td>
                     <?php 
                       $assigned_by = $a['assigned_by'];
                       $data2 = "select * from employe where id = $assigned_by";
                       $result2 = mysqli_query($con,$data2);
                       $rows2 = mysqli_fetch_array($result2);
                     ?>
                    <td><?php echo $rows2['name']; ?></td>
                    <td><?php echo $a['datetime']; ?></td>
                    <td>
                      <a href="task_view.php?v=<?php echo $a['t_id']; ?>" class="btn btn-warning">View</a>
                      <a href="task_edit.php?e=<?php echo $a['t_id']; ?>" class="btn btn-info">Edit</a>
                      <a href="task_delete.php?d=<?php echo $a['t_id']; ?>" class="btn btn-success">Delete</a>
                    </td>
                  </tr>
                  <?php 
                   }
                  ?>
                  </tbody>                 
                  <tfoot>
                  <tr>
                    <th>ID.</th>
                    <th>EMPLOYEE NAME</th>
                    <th>ASSIGNED-BY</th>
                    <th>DATE & TIME</th>
                    <th>ACTION</th>
                  </tr>
                  </tfoot>
                </table>
     </div><!-- container end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->

<?php include ('footer.php');?>