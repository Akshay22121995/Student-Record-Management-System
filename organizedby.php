<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//error_reporting(0);
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{

      $msg="Your Details";
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

  <title>Organizer Details</title>

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

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Organizer Details</h1>

<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

<?php  {?>

  <div class="row" style="margin-top:4%">
    <div class="col-12" style="font-size:18px; margin-left:375px;">
    <div class="modal-body">
        <p >
		<div class="row" >
		<div class="col-md-2 ">
		 <img src="Akshay.jpg" width=150 height=200 alt="Akshay" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<h4 href="" style="color:#202020; font-family:'typo' ">Akshay Ingole</h4>
		<h4 style="color:#202020; font-family:'typo' ;" class="title1">+918149603049</h4>
		<h4 style="color:#202020; font-family:'typo' ">2017akshay.ingole@ves.ac.in</h4>
		<h4 style="color:#202020; font-family:'typo' ">Vivekanand Education Society Institute of Technology</h4></div>
        </div>
		</p>
      </div>
        </div>
            </div>
          
          <hr style="border-width: 5px; width: 800px;  background-color: #008ae6">
    <div class="row " style="margin-top:1%">
    <div class="col-12" style="font-size:18px; margin-left:375px;">
    <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-2 ">
		 <img src="Yash.jpeg" width=150 height=200 alt="Akshay" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<h4 href="" style="color:#202020; font-family:'typo' ">Yash Naik</h4>
		<h4 style="color:#202020; font-family:'typo' ;" class="title1">+917718074508</h4>
		<h4 style="color:#202020; font-family:'typo' ">2018yash.naik@ves.ac.in</h4>
		<h4 style="color:#202020; font-family:'typo' ">Vivekanand Education Society Institute of Technology</h4></div></div>
		</p>
      </div>
            </div>
                   
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
<?php   ?>
