<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
{
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $query=mysqli_query($con,"select ID from facdetails where  Femail='$Email' && Fpassword='$Password' ");
  $ret=mysqli_fetch_array($query);
  if($ret>0){
    $_SESSION['uid']=$ret['ID'];
    header('location:welcomefaculty.php');
  }
  else{
    $msg="Invalid Details.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="Student and Faculty Record management System in php and mysql">
  <meta name="description" content="Student and Faculty Record management System in php and mysql">
  <meta name="author" content="Akshay Ingole">

  <title>Faculty Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <h3 align="center" style="color: black; padding-top: 2%">Student Record Managment System</h3>

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-5 shadow-lg my-5">
          <div class="card-body p-0 ">
            

            <!-- Nested Row within Card Body -->
              
              <div class="row  col-lg-20 p-5 justify-content-center">
                     <!--     <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
              <div class="col-lg-6 ">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Faculty Login</h1>
                  </div>
                  <p style="font-size:16px; color:red" align="center"> 
                    <?php if($msg){ echo $msg;} ?>
                  </p>
                  <form class="user" method="post" action="">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter Email Address..." required="true">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="Password" name="Password" placeholder="Password" required="true">
                    </div>
                    
                  
                    <p> <input type="submit" class="btn btn-primary btn-user btn-block" name="login" value="login"></p>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="#">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="facsignup.php">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
