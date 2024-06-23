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
    <title>-- THÊM HỌC PHẦN  --</title>

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
                                    <h2 class="title">Quản Lí Lớp Học Phần</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Quản Lí Lớp Học Phần</li>
                                        <li class="active">Thêm Mới Lớp Học Phần</li>
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
                                                    <h5>Thêm Mới Lớp Học Phần</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                            <?php
                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
try {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Lấy dữ liệu từ biểu mẫu
    $mlcn = $_POST['mlcn'];
    $mhp = $_POST['mhp'];
    $nhom = $_POST['nhom'];
    $hocki = $_POST['hocki'];
    $namhoc = $_POST['namhoc'];

    // Câu lệnh SQL INSERT
    $sql = "INSERT INTO tbl_lophocphan (mlcn, mhp, nhom, hocki, namhoc) VALUES (:mlcn, :mhp, :nhom, :hocki, :namhoc)";

    // Chuẩn bị và thực thi câu lệnh
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':mlcn', $mlcn, PDO::PARAM_STR);
    $stmt->bindParam(':mhp', $mhp, PDO::PARAM_STR);
    $stmt->bindParam(':nhom', $nhom, PDO::PARAM_INT);
    $stmt->bindParam(':hocki', $hocki, PDO::PARAM_INT);
    $stmt->bindParam(':namhoc', $namhoc, PDO::PARAM_STR);
    $stmt->execute();

    echo "Dữ liệu đã được thêm thành công vào bảng tbl_lophocphan.";
} catch (PDOException $e) {
    echo "Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage();
}
                                            }
?>
                                                <form class="form-horizontal" method="post">

                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Mã Lớp</label>
                                                        <div class="col-sm-10">
 <input type="text" name="mlcn" class="form-control" id="default" placeholder="VD: DCCTCT66B1" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Mã Học Phần</label>
                                                        <div class="col-sm-10">
 <input type="text" name="mhp" class="form-control" id="default" placeholder="VD: 7080116" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Nhóm</label>
                                                        <div class="col-sm-10">
 <input type="text" name="nhom" class="form-control" id="default" placeholder="VD: 7" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Học Kì</label>
                                                        <div class="col-sm-10">
 <input type="text" name="hocki" class="form-control" id="default" placeholder="VD: 3" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Năm Học</label>
                                                        <div class="col-sm-10">
 <input type="text" name="namhoc" class="form-control" id="default" placeholder="VD: 2022-2023" required="required">
                                                        </div>
                                                    </div>
                                                    

                                                    
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
