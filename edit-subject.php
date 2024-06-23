<?php
session_start();
error_reporting(0);
include('/xampp/htdocs/qldsv_29_11_2023/qldsv/db_conn/db_connection.php');
if(strlen($_SESSION['alogin'])==""){
    {   
    header("Location: index.php"); 
    }
 } else {

    if (isset($_POST['Update'])) {
        $sid=intval($_GET['id']);
        $malop = $_POST['mlcn'];
        $mahocphan = $_POST['mhp'];
        $nhom = $_POST['nhom'];
        $hocki = $_POST['hocki'];
        $namhoc = $_POST['namhoc'];
$sql="UPDATE tbl_lophocphan SET  mlcn=:malop,mhp=:mahocphan, nhom=:nhom, hocki=:hocki, namhoc=:namhoc WHERE id=:cid";

$dbh->query('SET foreign_key_checks = 0');

$query = $dbh->prepare($sql);
$query->bindParam(':mlcn',$malop,PDO::PARAM_STR);
$query->bindParam(':mhp',$mahocphan,PDO::PARAM_STR);
$query->bindParam(':nhom',$nhom,PDO::PARAM_STR);
$query->bindParam(':hocki',$hocki,PDO::PARAM_STR);
$query->bindParam(':namhoc',$namhoc,PDO::PARAM_STR);
$query->bindParam(':id',$sid,PDO::PARAM_STR);

$chk = $query->execute();

$msg=" Cập Nhật Lớp Học Phần";

$dbh->query('SET foreign_key_checks = 1');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin Update Subject </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            
             <?php include('/xampp/htdocs/qldsv_29_11_2023/qldsv/includes/admin_ui/admin_nav_bar.php');?> 
            
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== ad LEFT SIDEBAR ========== -->
                   <?php include('/xampp/htdocs/qldsv_29_11_2023/qldsv/includes/admin_ui/admin_left_sidebar.php');?>  
                    <!-- /.ad-left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Cập Nhập Thông Tin Lớp Học Phần</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Cập Nhập Thông Tin Lớp Học Phần</li>
                                        <li class="active">Sửa Lớp Học Phần</li>
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
                                                    <h5>Sửa Lớp Học Phần</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
<?php if($msg){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Thành Công!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Thật Bại!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>
                                                <form class="form-horizontal" method="post">

 <?php
 $malop = $_GET['id'];
 $sql = "SELECT mlcn, mhp, nhom, hocki, namhoc FROM tbl_lophocphan WHERE id =:sid";
$query = $dbh->prepare($sql);
$query->bindParam(':sid',$sid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)    
{   ?>
<?php }
                                                } ?>   
                                          
                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Mã Lớp:</label>
                                                        <div class="col-sm-10">
 <input type="text" name="mlcn" value="<?php echo htmlentities($result->malop);?>" class="form-control" id="default" placeholder="VD: DCCTCT66B1" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Mã Học Phần:</label>
                                                        <div class="col-sm-10">
 <input type="text" name="mhp" class="form-control" value="<?php echo htmlentities($result->mahocphan);?>"  id="default" placeholder="VD: 7080116" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Nhóm:</label>
                                                        <div class="col-sm-10">
 <input type="text" name="nhom" class="form-control" value="<?php echo htmlentities($result->nhom);?>"  id="default" placeholder="VD: 2" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Học Kì:</label>
                                                        <div class="col-sm-10">
 <input type="text" name="hocki" class="form-control" value="<?php echo htmlentities($result->hocki);?>"  id="default" placeholder="VD: 3" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Năm Học:</label>
                                                        <div class="col-sm-10">
 <input type="text" name="namhoc" class="form-control" value="<?php echo htmlentities($result->namhoc);?>"  id="default" placeholder="VD: 2022-2023" required="required">
                                                        </div>
                                                    </div>

                                                    

                                                    
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" name="Update" class="btn btn-primary">Cập Nhật</button>
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
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
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
