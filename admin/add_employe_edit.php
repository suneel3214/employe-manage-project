<?php include('../session.php'); ?>
<?php include ('header.php');
include ('side_navbar.php');
?>

<?php 

include ('db_con.php');
$id = $_GET['e'];
$data = "select * from employe where id = $id";
$result = mysqli_query($con,$data);
$a = mysqli_fetch_array($result);

 ?>

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
    <div class="content-header" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 class="m-0" style="color: #fff;">Admin</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- content-header end -->
    <!-- apna code karna hai -->
<div class="container-fluid" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 ">
      <form method="post" action="add_employe_update.php" class="shadow p-3 mb-5  rounded">
        <h1 style="font-family: 'Grechen Fuemen', cursive; font-size: 29px;">EMPLOYE EDIT FORM</h1>
          <input type="hidden" name="id" value="<?php echo $a['id'] ?>">
          <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" required="required" value="<?php echo $a['name'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="text" class="form-control" name="email" required="required" value="<?php echo $a['email'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required="required" value="<?php echo $a['password'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Age:</label>
            <input type="text" class="form-control" name="age" required="required" value="<?php echo $a['age'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Phone:</label>
            <input type="text" class="form-control" name="phone" required="required" value="<?php echo $a['phone'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Gender:</label>
            <input type="radio" name="gender" required="required" value="male"

              <?php 

                 if ($a['gender']=='male') {
                   echo "checked";
                 }
 
               ?>

            >Male
            <input type="radio" name="gender" required="required" value="female"

                <?php 

                 if ($a['gender']=='female') {
                   echo "checked";
                 }
 
               ?>

            >Female
            <input type="radio" name="gender" required="required" value="other"

                <?php 

                 if ($a['gender']=='other') {
                   echo "checked";
                 }
 
               ?>

            >other
          </div>
          <div class="mb-3">
            <label class="form-label">Departement:</label>
            <select class="form-control" required="required" name="dept">
              <option>Select</option>
              <option
              <?php 

                  if ($a['department']=='Hr') {
                      echo "selected";
                    }

                   ?>

              >Hr</option>
              <option
                 <?php 

                       if ($a['department']=='Employe') {
                         echo "selected";
                       }
                   ?>

              >Employe</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Role:</label>
            <select class="form-control" required="required" name="role">
              <option>Select</option>
              <option

                   <?php 

                       if ($a['role']=='Admin') {
                         echo "selected";
                       }
                   ?>

              >Admin</option>
              <option
               
               <?php 
                    if ($a['role']=='Employe') {
                      echo "selected";
                    }
                  
                   ?>
                   >Employe</option>
            </select>
          </div>
            <center><button type="submit" class="btn btn-success" style="background-image: linear-gradient(to right,#44220e,#1ed034);">Update</button></center>
      </form>
    </div><!-- col-md-4 end --> 
  </div><!--  row end  -->    
</div> <!--  conatiner end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->

<?php include ('footer.php');?>