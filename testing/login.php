<?php
include('db_conn/db_connection.php');

if($_POST){
  $mdd = $_POST['mdd'];
  $mk = $_POST['mk'];

  $sql = "
    SELECT * 
    FROM tbl_login
    WHERE mdd=" . $mdd . " AND mk=" . $mk .
  ";";

  $kq = $conn->query($sql);
  if($kq->num_rows>0){
    $user = $kq->fetch_assoc();
    switch($user['role']){
      case 'SV':
        //điều hướng đến giao diện của SV
        header("location: sv_gui.php");
        break;
      case 'GV':
        //điều hướng đến giao diện của GV
        header("location: gv_gui.php");
        break;
      default:
        //điều hướng đến giao diện của QTV
        header("location: gv_gui.php");
    }
  }
}

?>