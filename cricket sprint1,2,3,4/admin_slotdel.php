<?php
include('dbconnection.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `slot` where slid='$idd'";
    $result=$con->query($sql);
    header("Location:admin_slotmain.php");

  }

  ?>