<?php 
include('db_conn/db_connection.php');

//-- lấy họ tên sinh viên
$sql="
	SELECT *
	FROM tbl_sinhvien
	WHERE msv='1821050160';
";
$ht = '';
$r = $dbh->query($sql); 
if ($r->rowCount() > 0) {
    $kq = $r->fetch(PDO::FETCH_ASSOC);
    $ht = $kq['holot'] . $kq['ten'];
}
//--lấy thông tin học phần và điểm
$output='';
$sql= "
	SELECT *
	FROM tbl_diemhocphan
	WHERE msv='1821050160';
";
$r = $dbh->query($sql); 
while ($record = $r->fetch(PDO::FETCH_ASSOC)) {
    $sql_thp = "
        SELECT *
        FROM tbl_diemhocphan
        WHERE mhp='" . $record['mhp'] . "';
    ";
    $kq = $dbh->query($sql_thp); 
    $row = $kq->fetch(PDO::FETCH_ASSOC); 
    $thp = $row['tenhocphan'];

    $dhp = 0.6 * $record['a'] + 0.3 * $record['b'] + 0.1 * $record['c'];
	$str= "
	<tr>
		<th>" . $thp . "</th>
		<td>" . $record['c'] . "</td>
		<td>" . $record['b'] . "</td>
		<td>" . $record['a'] . "</td>
		<td>" . $dhp . "</td>
	</tr>
	";
	
	$output = $output . $str;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bài thực hành 02</title>

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
	<div class="panel-body p-20">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th colspan="5"><i><?php echo $ht ?></i></th>
				</tr>
				<tr>
					<th>Môn học</th>
					<th>C</th>
					<th>B</th>
					<th>A</th>
					<th>Điểm học phần</th>
				</tr>
			</thead>
			<tbody>
				<?php echo $output; ?>
			</tbody>
		</table>
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