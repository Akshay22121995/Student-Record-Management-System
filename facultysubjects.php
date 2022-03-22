<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//error_reporting(0);
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{


?>

<!DOCTYPE html>
    
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Faculty Schedule</title>

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

          

            <h1><center>TIME TABLE</center></h1><br>
    <table border="5" cellspacing="0" align="center">
        <!--<caption>Timetable</caption>-->
        <tr>
            <th align="center" height="100" width="200"><center><b>Timings</b></center></th>
            <th align="center" height="50" width="100"><center><b>Class</b></center></th>
            <th align="center" height="50" width="100"><center><b>Subject</b></center></th>
        </tr>
        <tr>
            <td align="center" height="100" width="200">8:10am to 9:10am </td>
             <td align="center" height="100" width="200">SYMCA </td>
             <td align="center" height="100" width="200">JAVA </td>
        </tr>
        <tr>
            <td align="center" height="100" width="200">10:30am to 11:30pm </td>
             <td align="center" height="100" width="200">FYMCA </td>
             <td align="center" height="100" width="200">DBMS </td>
        </tr>
        <tr>
            <td align="center" height="100" width="200">12:30 pm to 01:30 pm </td>
             <td align="center" height="100" width="200">TYMCA </td>
             <td align="center" height="100" width="200">Statistics </td>
        </tr>
        
    </table>
                    
            
            



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

