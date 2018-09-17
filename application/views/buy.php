<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<?php include "tem.php" ?>
<body class="">
      <div class="content">
        <div class="row">
          <div class="col-md-5 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">CTC_CAFE</h3>
                  <p class="card-category">กรุณาเลือกเมนู.</p>
              </div>
              <form action="add_order">
              <div class="form-group">
      <label class="control-label col-sm-2" for="name_order">เมนู</label>
      <div class="col-sm-10">
        <select name="name_order" class="form-control" id="name_order">
        <option value="ลาเต้">ลาเต้</option>
        <option value="คาปูชิโน่">คาปูชิโน่</option>
        <option value="กาแฟโบราณ">กาแฟโบราณ</option>
        <option value="เอสเพรสโซ่">เอสเพรสโซ่</option>
      </select>
      </div>
    </div>

                <div class="form-group">
      <label class="control-label col-sm-2" for="price">ราคา</label>
      <div class="col-sm-10">
        <select name="price" class="form-control" id="price">
        <option value="ร้อน 25 บาท">ร้อน 25 บาท</option>
        <option value="เย็น 30 บาท">เย็น 30 บาท</option>
        <option value="ปั่น 35 บาท">ปั่น 35 บาท</option>
      </select>
      </div>
    </div>

                                    <div class="form-group">
      <label class="control-label col-sm-2" for="status">สถานะ</label>
      <div class="col-sm-10">
        <select name="status" class="form-control" id="status">
        <option value="กำลังจัดเตรียม">กำลังจัดเตรียม</option>
        <option value=" เสร็จแล้ว">เสร็จแล้ว</option>
      </select>
      </div>
    </div>
                    <div class="row">
                    <div class="update  ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">สั่ง</button>
                    </div>
                  </div>
                 
              </form>      
                </div>
              </div>
            </div>
          </div>
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