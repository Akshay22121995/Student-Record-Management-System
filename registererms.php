<?php

$connection = mysqli_connect("localhost", "root", "","ermsdb");
error_reporting(0);
// Check connection
if (mysqli_connect_errno())
{
  echo "Database connection failed.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $Sfname=$_POST['FirstName'];
  $Slname=$_POST['LastName'];
  $prnno=$_POST['prnno'];
  $Semail=$_POST['Email'];
  $Spassword=$_POST['Password'];

  $query = "SELECT SEmail FROM studentdetail WHERE SEmail = '$Semail'";
  //Executing Query
  $result = mysqli_query($connection, $query);
  if (mysqli_num_rows($result)>0) {
    $msg="This email already associated with another account";
  }else{

    $query = "SELECT * FROM studentdetail";
    $result = mysqli_query($connection, $query);

    $Empid = mysqli_num_rows($result) + 1;

    $query = "INSERT INTO studentdetail(SFname, SLName, PRN_No, SEmail,  EmpPassword) VALUES ('$Sfname', '$Slname', '$prnno', '$Semail', '$Spassword') ";
    $result = mysqli_query($connection, $query);

    $query = "INSERT INTO steducation(EmpID, SEmail) VALUES('$Empid', '$Semail')";
    $result = mysqli_query($connection, $query);

    $query = "INSERT INTO stexperience(EmpID, PRN_No, SEmail) VALUES('$Empid', '$prnno', '$Semail')";
    $result = mysqli_query($connection, $query);

    if ($result){
      $msg="You have successfully registered";
    }else{
      $msg="Something Went Wrong. Please try again";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student & Faculty Record Management System</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script type="text/javascript">
      function checkpass()
      {
          if(document.register.Password.value!=document.register.RepeatPassword.value)
          {
              alert('New Password and Confirm Password field does not match');
              document.register.RepeatPassword();
              return false;
          }
          return true;
      } 

  </script>
</head>

<body class="bg-gradient-primary">
 
   <div class="container">
    <h3 align="center" style="color: black; padding-top: 3%"> <b>Student Record Managment System</b> </h3>

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row  col-lg-20 p-5 justify-content-center">
          
          <div class="col-lg-9">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create a Student Account!</h1>
              </div>
              <p style="font-size:16px; color:green" align="center">
                <?php if($msg){echo $msg;} ?>
              </p>
              
              <form class="user" name="register" method="post" onsubmit="return checkpass();">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="FirstName" name="FirstName" placeholder="First Name" pattern="[A-Za-z]+" required="true">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="LastName" name="LastName" placeholder="Last Name" pattern="[A-Za-z]+" required="true">
                  </div>
                </div>
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="prnno" name="prnno" placeholder="Enter your PRN Number" pattern="[0-9]+" required="true">
                </div>

                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="Email" name="Email" placeholder="Email Address" required="true">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="Password" name="Password" placeholder="Password" required="true">
                  </div>

                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="RepeatPassword" name="RepeatPassword" placeholder="Repeat Password" required="true">
                  </div>
                 
                </div>


                <input type="submit" name="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                
                
              </form>
              <hr>
             
              <div class="text-center">
                <a class="small" href="loginerms.php">Already have an account? Login!</a>
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
