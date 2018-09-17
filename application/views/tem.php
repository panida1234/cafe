<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="http://localhost:8080/cafe/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="http://localhost:8080/cafe/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    CTC_CAFE
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="http://localhost:8080/cafe/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="http://localhost:8080/cafe/assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="http://localhost:8080/cafe/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
 
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="/cafe/cafe/show">
              <i class="nc-icon nc-bank"></i>
              <p>Status</p>
            </a>
          </li>
          <li>
            <a href="/cafe/cafe/add">
              <i class="nc-icon nc-diamond"></i>
              <p>Add Menu</p>
            </a>
          </li>
          <li>
            <a href="/cafe/cafe/menu">
              <i class="nc-icon nc-pin-3"></i>
              <p>Menu</p>
            </a>
          </li>
          <li>
            <a href="/cafe/cafe/users">
              <i class="nc-icon nc-single-02"></i>
              <p>New Users</p>
            </a>
          </li>
          <li>
            <a href="/cafe/cafe/users_edit">
              <i class="nc-icon nc-single-02"></i>
              <p>Users</p>
            </a>
          </li>
          <li>
            <a href="/cafe/cafe/buy">
              <i class="nc-icon nc-cart-simple"></i>
              <p>Buy</p>
            </a>
          </li>
          <li>
            <a href="/cafe/cafe/login_regiter">
              <i class="nc-icon nc-lock-circle-open"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
         
          
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
           
          </div>
        </div>
      </nav>
      <div class="content-wrapper">
    <div class="container-fluid">
      <br>
      <br>
      <br>
    
   
 

      <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
  <!--   Core JS Files   -->
  <script src="http://localhost:8080/cafe/assets/js/core/jquery.min.js"></script>
  <script src="http://localhost:8080/cafe/assets/js/core/popper.min.js"></script>
  <script src="http://localhost:8080/cafe/assets/js/core/bootstrap.min.js"></script>
  <script src="http://localhost:8080/cafe/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="http://localhost:8080/cafe/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="http://localhost:8080/cafe/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="http://localhost:8080/cafe/assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="http://localhost:8080/cafe/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>