<?php
include('dbconnection.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `files` where slno='$idd' ";
    $result=$con->query($sql);
    header("Location:admin_postimages.php");

  }

  ?>