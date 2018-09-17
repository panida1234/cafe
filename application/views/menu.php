<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="http://localhost:8080/cafe/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="http://localhost:8080/cafe/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
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

<body>
<?php include "tem.php" ?>

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Menu</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        เมนู
                      </th>
                      <th>
                        ราคาร้อน
                      </th>
                      <th>
                        ราคาเย็น
                      </th>
                      <th>
                        ราคาปั่น
                      </th>
                      <th>
                         การจัดการ
                      </th>
                      <th>
                        การจัดการ
                      </th>
                    </thead>
                    <tbody>
                      <?php foreach ($rs as $r) { ?>
                      <tr>
                        <td><?php echo $r['bam_id']; ?></td>
                        <td><?php echo $r['name']; ?></td>
                        <td><?php echo $r['price_hot']; ?></td>
                        <td><?php echo $r['price_cool']; ?></td>
                        <td><?php echo $r['price_spin']; ?></td>
                        <td>
                      <a href="editedit/<?php echo $r['bam_id']; ?>" ><button type="submit" class="btn btn-primary">แก้ไข</button></a></td>
                      <td> <?php echo anchor("cafe/del/".$r['bam_id'],"ลบ",array("class"=>"btn btn-primary","onclick" =>" return confirm('Are you sure?');")); ?> </td>
                        </td>
                      </tr>
                        <?php }; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
 <!--   Core JS Files   -->
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