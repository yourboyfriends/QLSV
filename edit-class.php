<?php
session_start();
error_reporting(0);
include('/xampp/htdocs/qldsv_29_11_2023/qldsv/db_conn/db_connection.php');

if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{
if (isset($_POST['update'])) {
    $cid=intval($_GET['idd']);
    $holot = $_POST['holot'];
    $ten = $_POST['ten'];
    $sodidong = $_POST['sodidong'];
    $email = $_POST['email'];
    $mlcn = $_POST['mlcn'];
    $msv = $_POST['msv'];


    $sql = "UPDATE tbl_sinhvien SET msv=:msv holot=:holot, ten=:ten, sodidong=:sodidong, email=:email, mlcn=:mlcn WHERE idd =:cid ";
    $query = $dbh->prepare($sql);
    $query->bindParam(':msv', $ten, PDO::PARAM_STR);
    $query->bindParam(':holot', $holot, PDO::PARAM_STR);
    $query->bindParam(':ten', $ten, PDO::PARAM_STR);
    $query->bindParam(':sodidong', $sodidong, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':mlcn', $mlcn, PDO::PARAM_STR);
    $query->bindParam(':cid', $msv, PDO::PARAM_STR);
    $query->execute();
    $msg = "Dữ liệu đã được cập nhật thành công";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin Update Class</title>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <?php include('/xampp/htdocs/qldsv_29_11_2023/qldsv/includes/admin_ui/admin_nav_bar.php');?>   
          <!-----End Top bar>
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

<!-- ========== LEFT SIDEBAR ========== -->
<?php include('/xampp/htdocs/qldsv_29_11_2023/qldsv/includes/admin_ui/admin_left_sidebar.php');?>                   
 <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Quản lí sinh viên </h2>
                                </div>
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li><a href="#">Cập nhật thông tin </a></li>
            							<li class="active">Sửa thông tin sinh viên </li>
            						</ul>
                                </div>
                               
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                             

                              

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Sửa danh sách sinh viên</h5>
                                                </div>
                                            </div>
<?php if($msg){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Well done!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>

                                                <form method="post">
<?php 
$cid=intval($_GET['classid']);
$sql = "SELECT * from tbl_sinhvien where id=:cid";
$query = $dbh->prepare($sql);
$query->bindParam(':cid',$cid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<?php }} ?>


                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">msv</label>
                                                		<div class="">
                                                			<input type="text" name="msv" value="<?php echo htmlentities($result->msv);?>" required="required" class="form-control" id="success">
                                                            <span class="help-block"></span>
                                                		</div>
                                                	</div>
                                                       <div class="form-group has-success">
                                                        <label for="success" class="control-label">họ lót </label>
                                                        <div class="">
                                                            <input type="text" name="holot" value="<?php echo htmlentities($result->$holot);?>" required="required" class="form-control" id="success">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
                                                     <div class="form-group has-success">
                                                        <label for="success" class="control-label">ten</label>
                                                        <div class="">
                                                            <input type="text" name="ten" value="<?php echo htmlentities($result->ten);?>" class="form-control" required="required" id="success">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">sodidong</label>
                                                        <div class="">
                                                            <input type="text" name="sodidong" value="<?php echo htmlentities($result->sodidong);?>" class="form-control" required="required" id="success">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">email</label>
                                                        <div class="">
                                                            <input type="text" name="email" value="<?php echo htmlentities($result->email);?>" class="form-control" required="required" id="success">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">malopcn</label>
                                                        <div class="">
                                                            <input type="text" name="mlcn" value="<?php echo htmlentities($result->$mlcn);?>" class="form-control" required="required" id="success">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
                                                    
  <div class="form-group has-success">

                                                        <div class="">
                                                           <button type="submit" name="update" class="btn btn-success btn-labeled">Update<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    </div>


                                                    
                                                </form>

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                               
                               

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

             
                    <!-- /.right-sidebar -->

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

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>



        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
<?php  } ?>
