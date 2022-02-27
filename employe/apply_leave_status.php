<?php include('../session.php'); ?>
<?php include ('header.php');
include ('side_navbar.php');
?>


 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
     <!-- Content Header (Page header) -->
    <div class="content-header" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
      <div class="container-fluid" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 class="m-0" style="color: #fff;">Employe</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- content-header end -->
    <!-- apna code karna hai -->
    <div class="container" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
      <div class="row">
        <div class="col-md-12">
           <h1 class="text-center text-light" style="font-family: 'Grechen Fuemen', cursive;">LEAVE STATUS</h1><br><br>
           <table id="example1" class="table table-bordered table-striped table-hover shadow">
            <thead>
              <tr>
                <th>ID</th>
                <th>STATUS</th>
                <th>COMMENTS</th>
                <th>LEAVE-FROM</th>
                <th>LEAVE-TOO</th>
                <th>DATE & TIME</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $id = $_SESSION['id'];
                include ('../db_con.php');
                $i =  1 ;
                $data = "select * from apply_leave where apply_by = $id";
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
                <td><?php echo $i++; ?></td>
                <td style="color: darkorange"><?php echo $a['status']; ?></td>
                <td><?php echo $a['comment']; ?></td>
                <td><?php echo $a['leave_from']; ?></td>
                <td><?php echo $a['leave_too']; ?></td>
                <td><?php echo $a['datetime']; ?></td>
                <td>
                  <a href="apply_leave_status_view.php?v=<?php echo$a['a_id']; ?>" class="btn btn-warning">View</a>
                  <a href="apply_leave_status_delete.php?d=<?php echo$a['a_id']; ?>" class="btn btn-primary">Delete</a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>STATUS</th>
                <th>COMMENTS</th>
                <th>LEAVE-FROM</th>
                <th>LEAVE-TOO</th>
                <th>DATE & TIME</th>
                <th>ACTION</th>
              </tr>
            </tfoot>       
           </table>
         </div> <!-- col md-12 end -->
    </div> <!-- row end -->
</div><!-- container end -->
    <!-- apna code end -->
</div><!-- content-wrapper end -->

<?php include ('footer.php');?>