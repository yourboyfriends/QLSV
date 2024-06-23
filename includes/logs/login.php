<?php
session_start();

if ($_POST) {
  if ($_POST['uid'] == 'admin'){
    $_SESSION['uid'] = $_POST['uid'];
    $_SESSION['uname'] = 'Quản Trị Viên';
    $_SESSION['urole'] = 'qtv';
  }elseif($_POST['uid'] == 'giangvien'){
    $_SESSION['uid'] = $_POST['uid'];
    $_SESSION['uname'] = 'Giảng viên';
    $_SESSION['urole'] = 'gv';
  }else{
    $_SESSION['uid'] = $_POST['uid'];
    $_SESSION['uname'] = 'Sinh viên';
    $_SESSION['urole'] = 'sv';
  }
}

header('location: ../../index.php');
?>