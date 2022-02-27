<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&display=swap" rel="stylesheet">
  <style>
  body{
    background-image: linear-gradient(to right,#3a55da,#d0471e);
    background-size: cover;
  }
  	.shadow{
  		box-shadow:0 .5rem 1rem rgba(0,0,0,12.15)!important
  	}
    .text{
      font-family: 'Scheherazade New', serif;"
    }
    .img{
      border-bottom-right-radius: 30%;
      border-top-left-radius: 30%;
    }
    .img1{
      border-top-left-radius: 30%;
      border-bottom-right-radius: 30%;
    }
    .inner{
    overflow: hidden;
     }
   .inner img{
    transition: all 1.5s ease;
      }

    .inner:hover img{
    transform: scale(1.5);
     }
  </style>
</head>
<body><br><br>
  <h1 class="text-center text">EMPLOYEE MANAGEMENT SYSTEM</h1>
    <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12 inner">
        <img src="img/backwhite3.jpeg" class="img" width="100%" height="480px">
      </div>
    </div>
  </div>
  <br><br>
<div class="container">
  <div class="row">
    <div class="col-md-6 card shadow">
      <img src="img/back4.jpeg" width="100%" height="480px">
    </div><!-- col-md-4 end -->
    <div class="col-md-6 card shadow"><br>
      <h1 class="text-center text">Login Form</h1>
       <form method="post" action="login_insert.php" style="padding: 0px 20px 20px;">
                  <div class="mb-3">
                      <i class="far fa-envelope"></i>
                      <label class="form-label">Email:</label>
                      <input type="text" class="form-control" name="email" required="required" placeholder="admin123@gmail">
                  </div>
                  <div class="mb-3">
                       <i class="fas fa-lock"></i>
                       <label class="form-label">Password:</label>
                       <input type="password" class="form-control" name="password" required="required" placeholder="123456">
                       <div  class="form-text">We'll never share your password with anyone else.</div>
                  </div>
                 <button type="submit" class="btn btn-success" value="submit" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">Login</button>
      </form><!-- form end -->
    </div><!-- col-md-4 end -->
  </div><!-- row end -->
</div><!-- container end -->
<br>
<br>
<div class="container">
    <div class="row">
      <div class="col-md-12 inner">
        <img src="img/r7.jpeg" width="100%" class="img" height="480px">
      </div>
    </div>
  </div>
</body>
</html>