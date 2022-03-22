<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//error_reporting(0);
if (strlen($_SESSION['uid']==0)) 
{
  header('location:logout.php');
}
else
{
    if(isset($_POST['submit']))
    {
      $eid=$_SESSION['uid'];
      $prnno=$_POST['prnno'];
      $emp1des=$_POST['emp1des'];
      $emp1ctc=$_POST['emp1ctc'];
      $emp1wd=$_POST['emp1workduration'];
      $emp2name=$_POST['emp2name'];
      $emp2des=$_POST['emp2des'];
      $emp2ctc=$_POST['emp2ctc'];
      $emp2wd=$_POST['emp2workduration'];
      $emp3name=$_POST['emp3name'];
      $emp3des=$_POST['emp3des'];
      $emp3ctc=$_POST['emp3ctc'];
      $emp3wd=$_POST['emp3workduration'];
      
      $query=mysqli_query($con, "insert into stexperience ( EmpID,PRN_No, Admission_Date, Course,  College_Mail_ID, Employer2Name,  Employer2Designation, Employer2CTC, Employer2WorkDuration, Employer3Name, Employer3Designation, Employer3CTC, Employer3WorkDuration) value('$eid','$prnno', '$emp1des', '$emp1ctc', '$emp1wd', '$emp2name', '$emp2des', '$emp2ctc', '$emp2wd', '$emp3name', '$emp3des', '$emp3ctc', '$emp3wd' )");
      if ($query) {
        $msg="Your Details has been submitted succeesfully.";
      }
      else{
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

  <title>Student Details</title>

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
  <?php include_once('includes/sidebar.php')?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
         <?php include_once('includes/header.php')?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          

        <p style="font-size:16px; color:green" align="center"> 
            <?php if($msg){echo $msg;}  ?> 
        </p>

  <?php 
      $empid=$_SESSION['uid'];
      $query=mysqli_query($con,"select * from stexperience where EmpID=$empid");
      $row=mysqli_fetch_array($query);
      if($row>0)
      {

      ?>
      <p style="font-size:16px; color:red" align="center">Your  Details aready added. Now you can only edit the record. </p>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
<!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Admission Details</h1>
<tr>
  <th>Enter PRN No.</th>
  <td><?php echo $row['PRN_No'];?></td>
</tr>
<tr>
  <th>Admission Date</th>
  <td><?php echo $row['Admission_Date'];?></td>
</tr>
<tr>
  <th>Course/Stream </th>
  <td><?php echo $row['Course'];?></td>
</tr>
<tr>
  <th>College Mail ID</th>
  <td><?php echo $row['College_Mail_ID'];?></td>
</tr>
</table>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Personal Details</h1>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
  <th>Full Name</th>
  <td><?php echo $row['Full_Name'];?></td>
</tr>
<tr>
  <th>Date Of Birth</th>
  <td><?php echo $row['Date_Of_Birth'];?></td>
</tr>
<tr>
  <th>Gender</th>
  <td><?php echo $row['Gender'];?></td>
</tr>
<tr>
  <th>Blood Group</th>
  <td><?php echo $row['Blood_Group'];?></td>
</tr>
<tr>
  <th>Religion</th>
  <td><?php echo $row['Religion'];?></td>
</tr>
<tr>
  <th>Category</th>
  <td><?php echo $row['Category'];?></td>
</tr>
<tr>
  <th>Mobile No.</th>
  <td><?php echo $row['Mobile_No'];?></td>
</tr>
<tr>
  <th>Parents Mobile No.</th>
  <td><?php echo $row['Parents_Mob_No'];?></td>
</tr>


</table>



<!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Contact Details</h1>



<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
  <th>Residential Address</th>
  <td><?php echo $row['Residential_Address'];?></td>
</tr>
<tr>
  <th>Telephpne No.</th>
  <td><?php echo $row['Telephpne_No'];?></td>
</tr>
<tr>
  <th>State</th>
  <td><?php echo $row['State'];?></td>
</tr>
<tr>
  <th>District</th>
  <td><?php echo $row['District'];?></td>
</tr>
<tr>
  <th>Taluka</th>
  <td><?php echo $row['Taluka'];?></td>
</tr>
<tr>
  <th>Pin Code</th>
  <td><?php echo $row['Pin_Code'];?></td>
</tr>
<tr>
  <th>Permenant Address</th>
  <td><?php echo $row['Permenant_Address'];?></td>
</tr>


</table>


<!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Family Details</h1>



<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
  <th>Father Name</th>
  <td><?php echo $row['Father_Name'];?></td>
</tr>
<tr>
  <th>Father Occupation</th>
  <td><?php echo $row['Father_Occupation'];?></td>
</tr>
<tr>
  <th>Mother Name</th>
  <td><?php echo $row['Mother_Name'];?></td>
</tr>
<tr>
  <th>Mother Occupation</th>
  <td><?php echo $row['Mother_Occupation'];?></td>
</tr>
<tr>
  <th>Mob. No.</th>
  <td><?php echo $row['Mob_No'];?></td>
</tr>
<tr>
  <th>Family Income</th>
  <td><?php echo $row['Family_Income'];?></td>
</tr>

</table>
            
            
<h1 class="h3 mb-4 text-gray-800">Add Achievements</h1>



<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
  <th>Achievements 1</th>
  <td><?php echo $row['Achievements_1'];?></td>
</tr>
<tr>
  <th>Achievements 2</th>
  <td><?php echo $row['Achievements_2'];?></td>
</tr>
<tr>
  <th>Achievements 3</th>
  <td><?php echo $row['Achievements_3'];?></td>
</tr>
<tr>
  <th>Achievements 4</th>
  <td><?php echo $row['Achievements_4'];?></td>
</tr>
<tr>
  <th>Achievements 5</th>
  <td><?php echo $row['Achievements_5'];?></td>
</tr>

</table>
 
 
                  


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
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>
<?php }  ?>
