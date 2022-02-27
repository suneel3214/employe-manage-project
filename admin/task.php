<?php include('../session.php'); ?>
<?php include ('header.php');
include ('side_navbar.php');
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
      <form method="post" action="task_insert.php">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>EMPLOYEE NAME</th>
                    <th>CHECK HERE</th>
                  </tr>
                  </thead>
                  <tbody>
            <?php 
             $id = $_SESSION['id'];
             include ('db_con.php');
             $data = "select * from employe where role = 'employe'";
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
                      <td><?php echo $a['name']; ?></td>
                      <td><input type="checkbox" name="e_id[]" value="<?php echo $a['id']; ?>"></td>
                    </tr>
              <?php } ?>      
                  </tbody>
            </table>
          </div><!-- col-md-6 end -->
          <div class="col-md-6" style="box-shadow: 0 0.5rem 3rem rgba(69,0,12,16.15)!important;">
            <h1 style="font-size: 50px; font-weight: bold;">Task</h1>
            <textarea placeholder="Enter the Task" style="width: 100%;height: 260px;border-color: black;" name="task"></textarea>
            <input type="hidden" name="assigned_by" value="<?php echo $id; ?>">
            <center><button class="btn btn-success" style="margin: 20px;background-image: linear-gradient(to right,#44220e,#1ed034);">Submit Task</button></center>
          </div><!-- col-md-6 end -->
        </form><!-- from end -->
        </div><!-- row end -->
        </div>
      </div><!-- container end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->
<br>
<?php include ('footer.php');?>