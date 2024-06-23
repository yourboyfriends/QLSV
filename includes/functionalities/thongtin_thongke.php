<!--== main-page: thanh điều hướng ==-->
<div class="container-fluid">
  <div class="row page-title-div">
    <div class="col-md-6">
      <h2 class="title">THÔNG TIN</h2>

    </div>

    <!-- /.col-md-6 text-right -->
  </div>
  <!-- /.row -->
  <div class="row breadcrumb-div">
    <div class="col-md-6">
      <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i>Trang chủ</a></li>
        <li class="active">Thống kê</li>
      </ul>
    </div>

  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->

<!--== main-page: nội dung ==-->
<section class="section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat bg-primary" href="manage-students.php">
<!--hien thi so sinh vien-->
<?php 
    $sql1 ="SELECT tbl_sinhvien.msv from tbl_sinhvien ";
    $query1 = $dbh -> prepare($sql1);
    $query1->execute();
    $results1=$query1->fetchAll(PDO::FETCH_OBJ);
    $totalstudents=$query1->rowCount();
?>
<!--het-->

          <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
          <span class="name">SINH VIÊN</span>
          <span class="bg-icon"><i class="fa fa-users"></i></span>
        </a>
        <!-- /.dashboard-stat -->
      </div>
      <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat bg-danger" href="manage-subjects.php">
          <span class="number counter">0</span>
          <span class="name">HỌC PHẦN</span>
          <span class="bg-icon"><i class="fa fa-ticket"></i></span>
        </a>
        <!-- /.dashboard-stat -->
      </div>
      <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat bg-warning" href="manage-classes.php">
          <span class="number counter">0</span>
          <span class="name">LỚP CHUYÊN NGHÀNH</span>
          <span class="bg-icon"><i class="fa fa-bank"></i></span>
        </a>
        <!-- /.dashboard-stat -->
      </div>
      <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat bg-success" href="manage-results.php">
          <span class="number counter">0</span>
          <span class="name">SINH VIÊN XUẤT XẮC</span>
          <span class="bg-icon"><i class="fa fa-file-text"></i></span>
        </a>
        <!-- /.dashboard-stat -->
      </div>
      <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.section -->