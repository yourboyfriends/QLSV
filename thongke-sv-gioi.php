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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HỆ THỐNG QUẢN LÍ HỌC TẬP SINH VIÊN | Quản Trị</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
              <?php include('/xampp/htdocs/qldsv_29_11_2023/qldsv/includes/admin_ui/admin_nav_bar.php');?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('/xampp/htdocs/qldsv_29_11_2023/qldsv/includes/admin_ui/admin_left_sidebar.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Thống kê Sinh Viên Đạt Danh Hiệu '%'</h2>  
                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div style="
                                    width: 100%;
                                    display: block;
                                    /* margin-top: -136px; */
                                    padding: 0px 32%;" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<?php
function calculateAverage($a, $b, $c) {
    return $a * 0.6 + $b * 0.3 + $c * 0.1;
}

try {
    $query = "SELECT A, B, C FROM tbl_diemhocphan";

    $stmt = $dbh->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
        $totalStudents = count($result);
        $weakStudents = $averageStudents = $quiteStudents = $goodStudents = $excellentStudents = 0;

        foreach ($result as $row) {
            $average = calculateAverage($row['A'], $row['B'], $row['C']);

            if ($average < 5) {
                $weakStudents++;
            } elseif ($average >= 5 && $average < 7) {
                $averageStudents++;
            } elseif ($average >= 7 && $average < 8) {
                $quiteStudents++;
            } elseif ($average >= 8 && $average < 9) {
                $goodStudents++;
            } else {
                $excellentStudents++;
            }
        }

        // Tính phần trăm
        $weakPercentage = ($weakStudents / $totalStudents) * 100;
        $averagePercentage = ($averageStudents / $totalStudents) * 100;
        $quitePercentage = ($quiteStudents / $totalStudents) * 100;
        $goodPercentage = ($goodStudents / $totalStudents) * 100;
        $excellentPercentage = ($excellentStudents / $totalStudents) * 100;

        // Hiển thị kết quả
        // echo "Sinh viên yếu (%): " . $weakPercentage . "<br>";
        // echo "Sinh viên trung bình (%): " . $averagePercentage . "<br>";
        // echo "Sinh viên khá (%): " . $quitePercentage . "<br>";
        // echo "Sinh viên giỏi (%): " . $goodPercentage . "<br>";
        // echo "Sinh viên xuất sắc (%): " . $excellentPercentage . "<br>";
    } else {
        echo "Không có dữ liệu.";
    }
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>  
                                    <!-- SINH VIEN YEU -->
                                        <a style="background-color:rgb(0, 255, 255);     margin-bottom: 12px;" class="dashboard-stat bg-primary" href="#"> <!-- manage-students.php -->
                                        <span class="number counter"><?php echo htmlentities(number_format($weakPercentage, 2));?></span>
                                            <span class="name">Tỷ Lệ Sinh Viên Yếu "%"</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>

                                        <!-- SINH VIEN TRUNG BINH -->
                                        <a style="background-color: rgb(0, 191, 255);    margin-bottom: 12px;" class="dashboard-stat bg-danger" href="#"> <!-- manage-subjects.php -->
                                        <span class="number counter"><?php echo htmlentities(number_format($averagePercentage, 2));?></span>
                                            <span class="name">Tỷ Lệ Sinh Viên Trung Bình "%"</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>

                                        <!-- SINH VIEN KHA -->
                                        <a style="background-color: rgb(0, 128, 255);    margin-bottom: 12px;" class="dashboard-stat bg-warning" href="#"> <!-- manage-classes.php -->
                                        <span class="number counter"><?php echo htmlentities(number_format($quitePercentage, 2));?></span>
                                            <span class="name">Tỷ Lệ Sinh Viên Khá "%"</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>

                                        <!-- SINH VIEN GIOI -->
                                        <a style="background-color: rgb(128, 0, 255);    margin-bottom: 12px;" class="dashboard-stat bg-success" href="#"> <!-- manage-results.php -->
                                        <span class="number counter"><?php echo htmlentities(number_format($goodPercentage, 2));?></span>
                                            <span class="name">Tỷ Lệ Sinh Viên Giỏi "%"</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>

                                        <!-- SINH VIEN XUAT SAC -->
                                        <a style="background-color: rgb(191, 0, 255);    margin-bottom: 12px;" class="dashboard-stat bg-primary" href="#"> <!-- manage-students.php -->
                                        <span class="number counter"><?php echo htmlentities(number_format($excellentPercentage, 2));?></span>
                                            <span class="name">Tỷ Lệ Sinh Viên Xuất Sắc "%"</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                            <!-- KET THUC THONG KE -->







                                        
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
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

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
               // toastr["success"]( " Thống Kê sinh viên đạt các loại danh hiệu!");

            });
        </script>
    </body>
</html>
<?php } ?>
