<?php
include('dbconnection.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `batch` where bid='$idd' ";
    $result=$con->query($sql);
    header("Location:admin_batchmain.php");

  }

  ?>