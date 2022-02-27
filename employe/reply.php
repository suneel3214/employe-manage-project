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
           <h1 class="m-0" style="color: #fff;">Task Submit</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- content-header end -->
    <!-- apna code karna hai -->
    <?php 
     $id = $_SESSION['id'];
     $name = $_SESSION['name'];
     include ('../db_con.php');
     $r = $_GET['v']; 

     $data = "select * from task where t_id = '$r'";
     $result = mysqli_query($con,$data);
     $a = mysqli_fetch_array($result); 

     ?>
    <div class="container-fluid" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 ">
      <form method="post" action="reply_insert.php" class="shadow p-3 mb-5  rounded">
        <input type="hidden" name="t_id" value="<?php echo $id ?>">
        <input type="hidden" name="reply_by" value="<?php echo $name ?>">
             <textarea placeholder="Enter the Task" name="task" style="width: 100%; height: 200px;"><?php echo $a['task'] ?></textarea>
             <textarea placeholder="Enter the Message" name="task_msg" style="width: 100%; height: 200px;"></textarea>
            <center><button type="submit" class="btn btn-success" value="submit" style="background-image: linear-gradient(to right,#44220e,#1ed034);">Task-Submit</button></center>
      </form>
    </div><!-- col-md-4 end --> 
  </div><!--  row end  -->    
</div> <!--  conatiner end -->
    <!-- apna code end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->

<?php include ('footer.php');?>