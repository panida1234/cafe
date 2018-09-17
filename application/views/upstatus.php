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
<?php include "tem.php" ?>
<body class="">

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">สถานะการสั่ง</h4>
              </div>
              <?php echo form_open('cafe/upstatus_1/'.$rs['id_buy']); ?>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        คิวที่  
                      </th>
                      <th>
                        เมนูที่สั่ง
                      </th>
                      <th>
                        ราคา
                      </th>
                      <th>
                        Up Status
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                        <input type="text" id="id_buy" name="id_buy" disabled="" class="form-control" placeholder="" value="<?php echo $rs['id_buy'] ?>">
                        </td>
                        <td>
                        <input type="text" id="name_order" name="name_order" disabled="" class="form-control" placeholder="" value="<?php echo $rs['name_order'] ?>">
                        </td>
                        <td>
                        <input type="text" id="price" name="price" disabled="" class="form-control" placeholder="" value="<?php echo $rs['price'] ?>">
                        </td>
                        <td>             
 
      <div class="col-sm-10">
        <select name="status" class="form-control" id="status">
        <option value="กำลังจัดเตรียม">กำลังจัดเตรียม</option>
        <option value=" เสร็จแล้ว">เสร็จแล้ว</option>
      </select>
      </div>

                        </td>
                        
                        <td><div class="row">
                    <div class="update  ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">บันทึก</button>
                    </div>
                  </div></td>
                  <?php echo form_close(); 
                      ?>
                      </tr>
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