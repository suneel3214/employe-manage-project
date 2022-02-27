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
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- content-header end -->
    <!-- apna code karna hai -->
    <?php 
     $id = $_SESSION['id'];
     ?>
    <div class="container-fluid" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
      <div class="container">
         <div class="row">
           <div class="col-md-6 shadow p-3 mb-5  rounded">
             <center><h1>Apply Leave </h1></center>
             <form method="post" action="apply_leave_insert.php">
                <input type="hidden" name="assigned_by" value="<?php echo $id ?>">         
                <div class="mb-3">
                 <label class="form-label">Leave-Form</label>
                 <input type="date" class="form-control" name="leave_from" required="required" value="">
               </div>
               <div class="mb-3">
                 <label class="form-label">Leave-Too</label>
                 <input type="date" class="form-control" name="leave_to" required="required" value="">
               </div>
               <div class="mb-3">
                 <label class="form-label">Earning-Leave</label>
                 <input type="text" class="form-control" name="earning" value="" placeholder="Enter the Earning Leave">
               </div>
               <div class="mb-3">
                 <label class="form-label">Medical-Leave</label>
                 <input type="text" class="form-control" name="medical" value="" placeholder="Enter the Medical Leave">
               </div>
               <div class="mb-3">
                 <label class="form-label">Casual-Leave</label>
                 <input type="text" class="form-control" name="casual" value="" placeholder="Enter the Casual Leave">
               </div>
               <center><button type="submit" value="submit" class="btn btn-success" style="background-image: linear-gradient(to right,#44220e,#1ed034);">Submit</button></center>
              </form>
               <!-- ......form end...... -->
           </div><!-- col-md-6 end -->
           <div class="col-md-6 shadow p-3 mb-5  rounded">
             <h3>Where can I get some?</h3> 
             <p style="word-spacing: 7px;text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page  printing and typesetting industry.Lorem Ipsum is that it has a more-or-less normal distribution of letters, as  dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, </p>
           </div><!-- col-md-6 end -->
         </div><!-- row end -->
       </div><!-- container end -->
      </div> <!-- container-fluid end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->

<?php include ('footer.php');?>