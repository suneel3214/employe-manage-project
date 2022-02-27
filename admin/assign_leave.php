<?php include('../session.php'); ?>
<?php include ('header.php');
include ('side_navbar.php');
?>
<style>
  .shadow{
    box-shadow: 0 .5rem 1rem rgba(0,0,0,2.15)!important;
  }
  .mb-3{
    margin-bottom: 2.5rem!important;
  }
</style>
 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
    <div class="content-header" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 class="m-0" style="color: #fff;">Assign-Leave</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- content-header end -->
    <!-- apna code karna hai -->
    <div class="container-fluid" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
      <div class="container">
         <div class="row">
           <div class="col-md-6 shadow p-3 mb-5  rounded">
            <center><h1>All Employe Table</h1></center>
              <!-- ......form start...... -->
               <form method="post" action="assign_leave_insert.php">
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
          </div> <!-- col-md-6 end -->
           <div class="col-md-6 shadow p-3 mb-5  rounded"> 
             <center><h1>All Assign Leave </h1></center>
             <input type="hidden" name="assigned_by" value="<?php echo $id; ?>">         
                <div class="mb-3">
                 <label class="form-label">Valid-Form</label>
                 <input type="date" class="form-control" name="valid_form" required="required" value="">
               </div>
               <div class="mb-3">
                 <label class="form-label">Valid-Too</label>
                 <input type="date" class="form-control" name="valid_too" required="required" value="">
               </div>
               <div class="mb-3">
                 <label class="form-label">Earning-Leave</label>
                 <input type="text" class="form-control" name="earning" required="required" value="" placeholder="Enter the Earning Leave">
               </div>
               <div class="mb-3">
                 <label class="form-label">Medical-Leave</label>
                 <input type="text" class="form-control" name="medical" required="required" value="" placeholder="Enter the Medical Leave">
               </div>
               <div class="mb-3">
                 <label class="form-label">Casual-Leave</label>
                 <input type="text" class="form-control" name="casual" required="required" value="" placeholder="Enter the Casual Leave">
               </div>
               <center><button type="submit" value="submit" class="btn btn-success" style="background-image: linear-gradient(to right,#44220e,#1ed034);">Submit</button></center>
               </form>
               <!-- ......form end...... -->
             </div>
           </div><!-- col-md-6 end -->
         </div><!-- row end -->
       </div><!-- container end -->
      </div> <!-- container-fluid end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->

<?php include ('footer.php');?>