<?php
    session_start();
    error_reporting(0);
    include('/xampp/htdocs/qldsv_29_11_2023/qldsv/db_conn/db_connection.php');
    if(strlen($_SESSION['alogin'])==""){   
        header("Location: index.php"); 
    }
    else{  
?>

<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-- THÊM MỚI SINH VIÊN  --</title>

    <!-- favico -->
    <link rel="icon" type="image/x-icon" href="img/it-humg-favicon.ico">

    <!-- css -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen">
    <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen">
    <link rel="stylesheet" href="css/icheck/skins/line/blue.css">
    <link rel="stylesheet" href="css/icheck/skins/line/red.css">
    <link rel="stylesheet" href="css/icheck/skins/line/green.css">
    <link rel="stylesheet" href="css/main.css" media="screen">
     <style>
        .form-control{
            width: inherit;
        }       

    </style> 
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

           
        <?php include('/xampp/htdocs/qldsv_29_11_2023/qldsv/includes/admin_ui/admin_nav_bar.php');?> 
        
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('/xampp/htdocs/qldsv_29_11_2023/qldsv//includes/admin_ui/admin_left_sidebar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page" id="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Quản Lí Sinh Viên </h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Quản Lí Sinh Viên </li>
                                        <li class="active">Thêm Mới Sinh Viên </li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Thêm Mới Sinh Viên </h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    try {
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          // Lấy dữ liệu từ biểu mẫu
          $msv = $_POST['msv'];
          $holot = $_POST['holot'];
          $ten = $_POST['ten'];
          $sodidong = $_POST['sodidong'];
          $email = $_POST['email'];
          $mlcn = $_POST['mlcn'];

          // Câu lệnh SQL INSERT
          $sql = "INSERT INTO tbl_sinhvien (msv, holot, ten, sodidong, email, mlcn) 
          VALUES (:msv, :holot, :ten, :sodidong, :email, :mlcn)";

  // Chuẩn bị và thực thi câu lệnh
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(':msv', $msv, PDO::PARAM_STR);
  $stmt->bindParam(':holot', $holot, PDO::PARAM_STR);
  $stmt->bindParam(':ten', $ten, PDO::PARAM_STR);
  $stmt->bindParam(':sodidong', $sodidong, PDO::PARAM_STR);
  $stmt->bindParam(':email', $email, PDO::PARAM_STR);
  $stmt->bindParam(':mlcn', $mlcn, PDO::PARAM_STR);
  $stmt->execute();

  echo "Dữ liệu đã được thêm thành công vào bảng tbl_sinhvien.";
}
catch (PDOException $e) {
echo "Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage();
}
}
?>
                                                <form class="form-horizontal" method="post">

<div class="form-group">
    <label for="default" class="col-sm-2 control-label">Mã Sinh Viên</label>
    <div class="col-sm-10">
        <input type="text" name="msv" class="form-control" id="default" placeholder="VD: dcctct66i1" required="required">
    </div>
</div>

<div class="form-group">
    <label for="default" class="col-sm-2 control-label">Họ Lót</label>
    <div class="col-sm-10">
        <input type="text" name="holot" class="form-control" id="default" placeholder="VD: Nguyen van " required="required">
    </div>
</div>

<div class="form-group">
    <label for="default" class="col-sm-2 control-label">Tên</label>
    <div class="col-sm-10">
        <input type="text" name="ten" class="form-control" id="default" placeholder="VD: A" required="required">
    </div>
</div>

<div class="form-group">
        <label for="default" class="col-sm-2 control-label">Số Di Động</label>
        <div class="col-sm-10">
            <input type="text" name="sodidong" class="form-control" id="default" placeholder="VD: 0912345678" required="required">
        </div>
    </div>

<div class="form-group">
        <label for="default" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="default" placeholder="VD: example@example.com" required="required">
        </div>
</div>

<div class="form-group">
    <label for="default" class="col-sm-2 control-label">Mã Lớp CN</label>
    <div class="col-sm-10">
        <input type="text" name="mlcn" class="form-control" id="default" placeholder="VD: DCCTCT66B1" required="required">
    </div>
</div>

<!-- Các trường khác của sinh viên -->

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
    </div>
</div>
</form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
         <!-- js lib -->
    <script src="js/modernizr/modernizr.min.js"></script>

<script src="js/jquery/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui/jquery-ui.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/pace/pace.min.js"></script>
<script src="js/lobipanel/lobipanel.min.js"></script>
<script src="js/iscroll/iscroll.js"></script>

<script src="js/prism/prism.js"></script>
<script src="js/waypoint/waypoints.min.js"></script>
<script src="js/counterUp/jquery.counterup.min.js"></script>
<script src="js/amcharts/amcharts.js"></script>
<script src="js/amcharts/serial.js"></script>
<script src="js/amcharts/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
<script src="js/amcharts/themes/light.js"></script>
<script src="js/toastr/toastr.min.js"></script>
<script src="js/icheck/icheck.min.js"></script>

<script src="js/main.js"></script>
<script src="js/production-chart.js"></script>
<script src="js/traffic-chart.js"></script>
<script src="js/task-list.js"></script>
<script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>
<?PHP } ?>
        