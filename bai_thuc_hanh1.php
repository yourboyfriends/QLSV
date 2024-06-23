<?php
include('/xampp/htdocs/qldsv_29_11_2023/qldsv/db_conn/db_connection.php');
?>
<?php 
// Truy vấn SQL để đếm số sinh viên
$sql = "SELECT COUNT(*) as ten FROM tbl_sinhvien";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Lấy dữ liệu từ kết quả
    $row = $result->fetch_assoc();
    $total_students = $row["ten"];

    // Hiển thị số sinh viên trong thẻ span có class là 'counter'
    echo '<script>document.querySelector(".counter").innerHTML = "' . $total_students . '";</script>';
} else {
    echo "Không có dữ liệu sinh viên.";
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai thuc hanh </title>

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
<body>
    <div>
     <!--== main-page: nội dung ==-->
     <section class="section">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat bg-primary" href="manage-students.php">
                      <span class="number counter">0</span>
                      <span class="name">SINH VIÊN</span>
                      <span class="bg-icon"><i class="fa fa-users"></i></span>
                    </a>
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
</body>
</html>