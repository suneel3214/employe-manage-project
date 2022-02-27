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
           <h1 class="m-0" style="color: #fff;">Reply-Task</h1>
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
               <th>TASK-ID</th>
               <th>REPLY-BY</th>
               <th>DATE & TIME</th>
               <th>ACTION</th>
             </tr>
           </thead>
           <tbody>
            <?php 
            include ('../db_con.php');
            $i = 1;
            $id = $_SESSION['id'];
            $data = "select * from task_reply order by t_id desc";
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
               <td><?php echo $a['t_id']; ?></td>
               <td><?php echo $a['reply_by']; ?></td>
               <td><?php echo $a['datetime']; ?></td>
               <td>
                 <a href="employe_reply_task_view.php?v=<?php echo $a['r_id']; ?>" class="btn btn-success">View</a>
               </td>
             </tr>
           <?php } ?>
           </tbody>
           <tfoot>
             <tr>
               <th>ID</th>
               <th>TASK-ID</th>
               <th>REPLY-BY</th>
               <th>DATE & TIME</th>
               <th>ACTION</th>
             </tr>
           </tfoot>
         </table>
     </div><!-- container end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->

<?php include ('footer.php');?>