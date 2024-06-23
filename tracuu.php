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
    <title>-- HỆ THỐNG QUẢN LÍ ĐIỂM SINH VIÊN --</title>

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
        form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            padding: 8px;
            margin-bottom: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            transition: background-color 0.3s ease;
        }

        th {
            background-color: #ddd;
        }
        tr:hover {
    background-color: #00ff00;
        }
    </style>
  </head>

  <body class="top-navbar-fixed">
    <!-- html -->
    <div class="main-wrapper">
      <?php include('includes/nav_bar.php'); ?>

      <div class="content-wrapper">
        <div class="content-container">
          <?php include('includes/left_sidebar.php'); ?>
          <div class="main-page" id="main-page">
            <!--== main-page: thanh điều hướng ==-->
            <div class="container-fluid">
              <div class="row page-title-div">
                <div class="col-md-6">
                  <h2 class="title">TRA CỨU ĐIỂM SINH VIÊN </h2>

                </div>

                <!-- /.col-md-6 text-right -->
              </div>
              <!-- /.row -->
              <div class="row breadcrumb-div">
                <div class="col-md-6">
                  <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-home"></i>Trang chủ</a></li>
                    <li class="active">Tra Cứu</li>
                  </ul>
                </div>

              </div>
            
              <h2>Nhập mã sinh viên</h2>

<form method="post">
    <label for="studentId">Mã sinh viên:</label>
    <input type="text" name="studentId" id="studentId" required>
    <button type="submit" style="background-color: #00ff00;  border: 1px solid #00ff00;">TRA CỨU</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $studentId = $_POST['studentId'];

        $sql = "SELECT sv.msv, sv.holot, sv.ten, dh.A, dh.B, dh.C, (dh.A * 0.6 + dh.B * 0.3 + dh.C * 0.1) AS diem_trung_binh
                FROM tbl_sinhvien sv
                JOIN tbl_diemhocphan dh ON sv.msv = dh.msv
                WHERE sv.msv = :studentId";

        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':studentId', $studentId, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Hiển thị thông tin sinh viên và điểm trung bình 
            echo "<h2>Thông tin Sinh viên</h2>";
            echo "<table>";
            echo "<tr><th>Mã sinh viên</th><th>Họ và tên</th><th>Điểm A</th><th>Điểm B</th><th>Điểm C</th><th>Điểm trung bình</th></tr>";
            echo "<tr><td>{$result['msv']}</td><td>{$result['holot']} {$result['ten']}</td><td>{$result['A']}</td><td>{$result['B']}</td><td>{$result['C']}</td><td>{$result['diem_trung_binh']}</td></tr>";
            echo "</table>";
        } else {
            echo "Không tìm thấy sinh viên với mã sinh viên '$studentId'.";
        }
    } catch (PDOException $e) {
        echo "Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage();
    }
}
?>
    </div>

    <!-- cửa sổ đăng nhập -->
    <?php
    include('includes/logs/login_modal.php');
    ?>


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
      $(function() {
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
          "positionClass": "toast-bottom-right",
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

        toastr["success"]("Chào mừng đến trang tra cứu điểm sinh viên !");
      });
    </script>

    <script>
      function loadContent(url) {
        const xhttp = new XMLHttpRequest();
        xhttp.open("GET", url);
        xhttp.send();
        xhttp.onreadystatechange = (e) => {
          document.getElementById("main-page").innerHTML = xhttp.responseText;
        }
      }
    </script>
  </body>

  </html>
<?php
    }
?>