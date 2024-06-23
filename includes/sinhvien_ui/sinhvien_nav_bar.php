<!--
  THANH ĐIỀU HƯỚNG KHI ĐĂNG NHẬP LÀ SINH VIÊN
-->

<nav class="navbar top-navbar bg-white box-shadow">
  <div class="container-fluid">
    <div class="row">
      <div class="navbar-header no-padding">
        <a class="navbar-brand" href="dashboard.php">
          HỆ THỐNG QUẢN LÍ HỌC TẬP SINH VIÊN
        </a>
        <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-ellipsis-v"></i>
        </button>
        <button type="button" class="navbar-toggle mobile-nav-toggle">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- /.navbar-header -->

      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
          <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
          <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
          <li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
        </ul>
        <!-- /.nav navbar-nav -->

        <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
          <li>
            <a href="#no" class="color-user text-center">
              <i class="fa fa-user"></i> 
              &nbsp;
              Sinh viên:
              &nbsp;
              <?php
              echo $_SESSION['uid'];
              ?>
            </a>
          </li>
        </ul>
        <!-- /.nav navbar-nav navbar-right -->
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</nav>