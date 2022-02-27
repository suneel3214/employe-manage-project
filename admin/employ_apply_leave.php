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
           <h1 class="m-0" style="color: #fff;">Apply Leave</h1>
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
               <th>APPLY-BY</th>
               <th>LEAVE-FROM</th>
               <th>LEAVE-TOO</th>
               <th>COMMENT</th>
               <th>ACTION</th>
             </tr>
           </thead>
           <tbody>
            <?php 
            include ('db_con.php');
            $id = $_SESSION['id'];
            $i = 1;
            $data = "select * from apply_leave order by a_id desc";
            $result = mysqli_query($con,$data);
            // echo "<pre>";
            // print_r($result);
            // die;
            // $a = mysqli_fetch_array($result);
            while ($a = mysqli_fetch_array($result)) {
              
          
             ?>
             <tr>
               <td><?php echo $i++; ?></td>
               <?php 
                 $id = $a['apply_by'];
                 $data1 = "select * from employe where id = $id";
                 $result1 = mysqli_query($con,$data1);
                 $rows1 = mysqli_fetch_array($result1);
         
                ?>
               <td><?php echo $rows1['name']; ?></td>
               <td><?php echo $a['leave_from']; ?></td>
               <td><?php echo $a['leave_too']; ?></td>
               <td>
                <!-- ......form satrt...... -->
                 <form method="post" action="employe_apply_leave_update.php">
                   <textarea class="form-control" name="comment"></textarea>
                   <input type="hidden" name="a_id" value="<?php echo $a['a_id']; ?>">               
               </td>
               <td>
                 <a href="employe_apply_leave_view.php?v=<?php echo $a['a_id']; ?>" class="btn btn-info">View</a>
                 <button class="btn btn-warning" type="submit" name="approved" >Approved</button>
                 <button class="btn btn-success" type="submit" name="rejected">Rejected</button>
                 </form>
                 <!-- ......form End...... -->
               </td>
             </tr>
           <?php } ?>
           </tbody>
           <tfoot>
             <tr>
               <th>ID</th>
               <th>APPLY-BY</th>
               <th>LEAVE-FROM</th>
               <th>LEAVE-TOO</th>
               <th>COMMENT</th>
               <th>ACTION</th>
             </tr>
           </tfoot>
         </table>
     </div><!-- container end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->

<?php include ('footer.php');?>