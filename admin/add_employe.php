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
           <h1 class="m-0" style="color: #fff;">Admin</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- content-header end -->
    <!-- apna code karna hai -->
    <!-- /.card -->
            <div class="container-fluid" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
            <div class="card">
              <div class="card-header" style="background-image: linear-gradient(to right,#3a55da,#d0471e);border-top: 1px solid #fff;border-bottom: 1px solid #fff;">
                <h3 class="card-title">Display Employee</h3>
                <button class="btn btn-warning" style="float: right;" data-toggle="modal" data-target="#exampleModal">Add Employee</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>EMPLOYEE NAME</th>
                    <th>EMAIL</th>
                    <th>DEPARTEMENT</th>
                    <th>ROLE</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                     $i = 1;
                     include('db_con.php');           
                     $data = "select * from employe order by id desc";
                     $result = mysqli_query($con,$data);            
                     // $a = mysqli_fetch_array($result);            
                     while ($a = mysqli_fetch_array($result)) {
          
                  ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $a['name']; ?></td>
                    <td><?php echo $a['email']; ?></td>
                    <td><?php echo $a['department']; ?></td>
                    <td><?php echo $a['role']; ?></td>
                    <td>
                      <a href="add_employe_view.php?v=<?php echo $a['id']; ?>" class="btn btn-warning">View</a>
                      <a href="add_employe_edit.php?e=<?php echo $a['id']; ?>" class="btn btn-info">Edit</a>
                      <a href="add_employe_delete.php?d=<?php echo $a['id'] ?>" class="btn btn-success">Delete</a>
                    </td>
                  </tr>
                  <?php 
                   }
                  ?>
                  </tbody>                 
                  <tfoot>
                  <tr>
                    <th>S.No.</th>
                    <th>EMPLOYEE NAME</th>
                    <th>EMAIL</th>
                    <th>DEPARTEMENT</th>
                    <th>ROLE</th>
                    <th>ACTION</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
            <!-- /.card -->
            <!-- Modal start add employee -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Add Employee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body" style="color: black;">
        <form method="post" action="add_employee_insert.php">
          <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" required="required">
          </div>
          <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="text" class="form-control" name="email" required="required">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required="required">
          </div>
          <div class="mb-3">
            <label class="form-label">Age:</label>
            <input type="text" class="form-control" name="age" required="required">
          </div>
          <div class="mb-3">
            <label class="form-label">Phone:</label>
            <input type="text" class="form-control" name="phone" required="required">
          </div>
          <div class="mb-3">
            <label class="form-label">Gender:</label>
            <input type="radio" name="gender" value="male" required="required">Male
            <input type="radio" name="gender" value="female" required="required">Female
            <input type="radio" name="gender" value="other" required="required">other
          </div>
          <div class="mb-3">
            <label class="form-label">Departement:</label>
            <select class="form-control" name="dept" required="required">
              <option>Select</option>
              <option>Hr</option>
              <option>Employe</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Role:</label>
            <select class="form-control" name="role" required="required">
              <option>Select</option>
              <option>Admin</option>
              <option>Employe</option>
            </select>
          </div>
          <div class="modal-footer">
            <center><button type="submit" value="submit" class="btn btn-success" style="background-image: linear-gradient(to right,#44220e,#1ed034);">Submit</button></center>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal end add employee -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->

<?php include ('footer.php');?>