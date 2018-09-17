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
       
                 
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">New User</h5> 
                <?php echo form_open('cafe/upusers/'.$rs['id']); ?>
                <div class="col-md-1 px-1">
                      <div class="form-group">
                        <label>ID</label>
                        <input type="text" id="id" name="id" disabled="" class="form-control" placeholder=""value="<?php echo $rs['id'] ?>">
                      </div>
                    </div>
              </div>
              <div class="card-body">
                <form action="add_users">
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>ชื่อ-นามสกุล</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="" value="<?php echo $rs['name'] ?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>รหัสผ่าน</label>
                        <input type="text" id="password" name="password" class="form-control" placeholder="" value="<?php echo $rs['password'] ?>">
                      </div>
                    </div>
                    <div class="col-md-2 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>สถานะ</label>
                        <input type="text" id="status" name="status" class="form-control" placeholder="" value="<?php echo $rs['status'] ?>">
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>เบอร์โทรศัพท์</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="" value="<?php echo $rs['phone'] ?>">
                      </div>
                    </div>
                  </div>
                  
                  <div>
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">เพิ่มสมาชิก</button>
  
                    </div>
                  </div>
                  <?php echo form_close(); 
                      ?>
                </form>
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