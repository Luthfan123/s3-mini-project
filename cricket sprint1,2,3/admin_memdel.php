<?php
include('dbconnection.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `member` where mem_id='$idd' ";
    $result=$con->query($sql);
    header("Location:admin_viewmem.php");

  }

  ?>