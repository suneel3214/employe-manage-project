<?php include('../session.php'); ?>
<?php include ('header.php');
include ('side_navbar.php');
?>
<?php 

include ('db_con.php');
$id = $_SESSION['id'];
$id = $_GET['e'];
$data1 = "select * from task where t_id = $id";
$result1 = mysqli_query($con,$data1);
$b = mysqli_fetch_array($result1);

 ?>
 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
     <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 class="m-0">Assign Task</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- content-header end -->
    <!-- apna code satrt -->
      <div class="container">
        <div class="container">
          <div class="row" style="margin: 55px 55px 0px 55px;">
          <div class="col-md-6 card-body" style="box-shadow: 0 0.5rem 3rem rgba(69,0,12,16.15)!important;">
            <!-- <h1>Employe</h1> -->
      <form method="post" action="task_update.php">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>EMPLOYEE NAME</th>
                    <th>CHECK HERE</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $b['e_id']; ?></td>
                      <td>Re-Send</td>
                    </tr> 
                  </tbody>
            </table>
          </div><!-- col-md-6 end -->
          <div class="col-md-6" style="box-shadow: 0 0.5rem 3rem rgba(69,0,12,16.15)!important;">
            <h1 style="font-size: 50px; font-weight: bold;">Task</h1>
            <textarea placeholder="Enter the Task" style="width: 100%;height: 260px;border-color: black;" name="task"><?php echo $b['task'] ?></textarea>
            <input type="hidden" name="t_id" value="<?php echo $b['t_id'] ?>">
            <center><button type="submit" value="update" class="btn btn-success" style="margin: 20px;background-image: linear-gradient(to right,#44220e,#1ed034);">Update</button></center>
          </div><!-- col-md-6 end -->
        </form><!-- from end -->
        </div><!-- row end -->
        </div>
      </div><!-- container end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->
<br>
<?php include ('footer.php');?>