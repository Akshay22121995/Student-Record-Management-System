<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//error_reporting(0);
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{


if(isset($_POST['submit']))
{
  $eid=$_SESSION['uid'];
  $achv1=$_POST['achv1'];
  $achv2=$_POST['achv2'];
  $achv3=$_POST['achv3'];
  $achv4=$_POST['achv4'];
  $achv5=$_POST['achv5'];
      
  $query= mysqli_query($con, "update facexperience set Achievements_1='$achv1', Achievements_2='$achv2' ,Achievements_3='$achv3' ,Achievements_4='$achv4', Achievements_5='$achv5'  where EmpID='$eid'");
  
  
  if ($query) 
  {
    $msg="Your Details has been updated.";
  }
  else
  {
    $msg="Something Went Wrong. Please try again.";
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

  <title>Faculty Details</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  <?php include_once('includes/facultysidebar.php')?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
         <?php include_once('includes/facultyheader.php')?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Faculty Achievements</h1>

<p style="font-size:16px; color:green" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

<form class="user" method="post" action="">
  <?php
 $empid=$_SESSION['uid'];
$ret=mysqli_query($con,"select * from facexperience where EmpID='$empid'");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<!--
               <div class="row">
                <div class="col-4 mb-3">Enter Faculty No.</div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" disabled id="fno" name="fno" aria-describedby="emailHelp" value="<?php  echo $row['Fac_no'];?>"></div>
                    </div>  
    
                <div class="row">
                <div class="col-4 mb-3">Enter Full Name</div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="fullname" name="fullname" aria-describedby="emailHelp" value="<?php  echo $row['Full_Name'];?>"></div>
                    </div>



                    <div class="row">
                    <div class="col-4 mb-3">Department </div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="dept" name="dept" aria-describedby="emailHelp" value="<?php  echo $row['Department'];?>"></div>
                    </div>
    
                    <div class="row">
                      <div class="col-4 mb-3">Designation</div>
                     <div class="col-8 mb-3">  <input type="text" class="form-control form-control-user" id="desgn" name="desgn" aria-describedby="emailHelp" value="<?php  echo $row['Designation'];?>"></div>  
                     </div>

                    <div class="row">
                      <div class="col-4 mb-3">College Mail ID</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="cmid" name="cmid" aria-describedby="emailHelp" value="<?php  echo $row['College_Mail_ID'];?>">
                    </div></div>
                
                <div class="row">
                <div class="col-4 mb-3">Qualification </div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="qual" name="qual" aria-describedby="emailHelp" value="<?php  echo $row['Qualification'];?>"></div>
                    </div>
    
                <div class="row">
                <div class="col-4 mb-3">Experience of Years </div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="eoy" name="eoy" aria-describedby="emailHelp" value="<?php  echo $row['Experience'];?>"></div>
                    </div>
                <div class="row">
                      <div class="col-4 mb-3">Joining Date</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="jd" name="jd" aria-describedby="emailHelp" value="<?php  echo $row['Joining_Date'];?>">
                    </div></div>
                    
            <h1 class="h3 mb-4 text-gray-800">Edit Personal Details</h1>
    

                <div class="row">
                      <div class="col-4 mb-3">Personal Email ID</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="peid" name="peid" aria-describedby="emailHelp" value="<?php  echo $row['PEID'];?>">
                    </div></div>
    
                    <div class="row">
                    <div class="col-4 mb-3">Mobile No.</div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="mobno" name="mobno" aria-describedby="emailHelp" value="<?php  echo $row['Mobile_No'];?>"></div>
                    </div>
                 <div class="row">
                      <div class="col-4 mb-3">Alternate Mobile No.</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="pmobno" name="pmobno" aria-describedby="emailHelp" value="<?php  echo $row['Parents_Mob_No'];?>">
                    </div></div>
                    <div class="row">
                      <div class="col-4 mb-3">Date Of Birth</div>
                     <div class="col-8 mb-3">  <input type="text" class="form-control form-control-user" id="dob" name="dob" aria-describedby="emailHelp" value="<?php  echo $row['Date_Of_Birth'];?>"></div>  
                     </div>



                    <div class="row">
                    <div class="col-4 mb-3">Gender</div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="gender" name="gender" aria-describedby="emailHelp" value="<?php  echo $row['Gender'];?>"></div>
                    </div>

                    <div class="row">
                      <div class="col-4 mb-3">Blood Group</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="bg" name="bg" aria-describedby="emailHelp" value="<?php  echo $row['Blood_Group'];?>">
                    </div></div>
                      

                    
    
    <h1 class="h3 mb-4 text-gray-800">Edit Contact Details</h1>
    
     <div class="row">
                      <div class="col-4 mb-3">Residential Address</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="res_add" name="res_add" aria-describedby="emailHelp" value="<?php  echo $row['Residential_Address'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">Telephpne No.</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="telno" name="telno" aria-describedby="emailHelp" value="<?php  echo $row['Telephpne_No'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">State</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="state" name="state" aria-describedby="emailHelp" value="<?php  echo $row['State'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">District</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="district" name="district" aria-describedby="emailHelp" value="<?php  echo $row['District'];?>">
                    </div></div>
     
     <div class="row">
                      <div class="col-4 mb-3">Pin Code</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="pin_code" name="pin_code" aria-describedby="emailHelp" value="<?php  echo $row['Pin_Code'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">Permenant Address</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="p_add" name="p_add" aria-describedby="emailHelp" value="<?php  echo $row['Permenant_Address'];?>">
                    </div></div>
    
-->
<!--
    
     <h1 class="h3 mb-4 text-gray-800">Family Details</h1>
    
     <div class="row">
                      <div class="col-4 mb-3">Father Name</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="fname" name="fname" aria-describedby="emailHelp" value="<?php  echo $row['Father_Name'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">Father Occupation</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="foccup" name="foccup" aria-describedby="emailHelp" value="<?php  echo $row['Father_Occupation'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">Mother Name</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="mname" name="mname" aria-describedby="emailHelp" value="<?php  echo $row['Mother_Name'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">Mother Occupation</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="moccup" name="moccup" aria-describedby="emailHelp" value="<?php  echo $row['Mother_Occupation'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">Mob. No.</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="mob_no" name="mob_no" aria-describedby="emailHelp" value="<?php  echo $row['Mob_No'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">Family Income</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="fincome" name="fincome" aria-describedby="emailHelp" value="<?php  echo $row['Family_Income'];?>">
                    </div></div>
     
    <h1 class="h3 mb-4 text-gray-800">Add Achievements</h1>
    -->
     
    <div class="row">
                      <div class="col-4 mb-3">Achievements 1</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="achv1" name="achv1" aria-describedby="emailHelp" value="<?php  echo $row['Achievements_1'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">Achievements 2</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="achv2" name="achv2" aria-describedby="emailHelp" value="<?php  echo $row['Achievements_2'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">Achievements 3</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="achv3" name="achv3" aria-describedby="emailHelp" value="<?php  echo $row['Achievements_3'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">Achievements 4</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="achv4" name="achv4" aria-describedby="emailHelp" value="<?php  echo $row['Achievements_4'];?>">
                    </div></div>
     <div class="row">
                      <div class="col-4 mb-3">Achievements 5</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="achv5" name="achv5" aria-describedby="emailHelp" required="true" value="<?php  echo $row['Achievements_5'];?>">
                    </div></div>
    
        
    
    
    
    
<?php } ?>
                    <div class="row" style="margin-top:4%">
                      <div class="col-4"></div>
                      <div class="col-4">
                      <input type="submit" name="submit"  value="Update" class="btn btn-primary btn-user btn-block">
                    </div>
                    </div>
                  
                  </form>
            
            
            
            
            
            
<?php } else {?>

  <div class="row" style="margin-top:4%">
                      <div class="col-12" style="font-size:18px; color:red;">First Add your experience details after that you can edit experience details.</div>
                   
                    </div>
<?php } ?>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
   <?php include_once('includes/footer.php');?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
    $(".jDate").datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
}).datepicker("update", "10/10/2016"); 
  </script>

</body>

</html>
<?php }   ?>

