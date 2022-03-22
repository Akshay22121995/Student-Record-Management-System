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
            <td align="center" height="100" 
                width="200"><br>
                <b>Day/Period</b></br>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>I<br>9:30-10:20</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>II<br>10:20-11:10</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>III<br>11:10-12:00</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>12:00-12:40</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>IV<br>12:40-1:30</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>V<br>1:30-2:20</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>VI<br>2:20-3:10</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>VII<br>3:10-4:00</b>
            </td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Monday</b></td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Mat</td>
            <td align="center" height="50">Che</td>
            <td rowspan="6" align="center" height="50">
                <h2>L<br>U<br>N<br>C<br>H</h2>
            </td>
            <td colspan="3" align="center" 
                height="50">LAB</td>
            <td align="center" height="50">Phy</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Tuesday</b>
            </td>
            <td colspan="3" align="center" 
                height="50">LAB
            </td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Che</td>
            <td align="center" height="50">Mat</td>
            <td align="center" height="50">SPORTS</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Wednesday</b>
            </td>
            <td align="center" height="50">Mat</td>
            <td align="center" height="50">phy</td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Che</td>
            <td colspan="3" align="center" 
                height="50">LIBRARY
            </td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Thursday</b>
            </td>
            <td align="center" height="50">Phy</td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Che</td>
            <td colspan="3" align="center" 
                height="50">LAB
            </td>
            <td align="center" height="50">Mat</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Friday</b>
            </td>
            <td colspan="3" align="center" 
                height="50">LAB
            </td>
            <td align="center" height="50">Mat</td>
            <td align="center" height="50">Che</td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Phy</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Saturday</b>
            </td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Che</td>
            <td align="center" height="50">Mat</td>
            <td colspan="3" align="center" 
                height="50">SEMINAR
            </td>
            <td align="center" height="50">SPORTS</td>
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

