<?php
  session_start();
  // $mname=$_SESSION['MNAME'];
  $UID=$_SESSION['UID'];

  // session_start();
  // if($_SESSION['stat']=="Active")
  // {
  //   // echo "Welcome ".$_SESSION["username"];
  // }
  // else
  // {
  //   header("location:index.php");
  // }
  include('dbconnection.php');
  // include('dbconnection.php');
  $sql="select * from fixture";
  // echo "$sql";
  $result=$con->query($sql);


?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Cricket club</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider-2.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/jqtransform.css">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/vegur_400.font.js"></script>
<script src="js/Vegur_bold_700.font.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/tms-0.4.x.js"></script>
<script src="js/jquery.jqtransform.js"></script>
<script src="js/FF-cash.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script>
$(document)
    .ready(function () {
    $('.form-1')
        .jqTransform();
    $('.slider')
        ._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 1000,
        preset: 'fade',
        pagination: true,
        pagNums: false,
        slideshow: 7000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
</script>

<style>
 /*td, th {
  border: 1px solid black;
}*/

table {
  border-collapse: collapse;
  width: 100%;
}

th, td,tr {
      border-bottom: 1px solid #ddd;
      border-color: #FFFFFF;
      padding: 8px;
      color: #FFFFFF;
    }
</style>

<style>

    
      th, td {
      border-bottom: 1px solid #ddd;
      padding: 8px;
      color: #FFFFFF;
    }

 
</style> 


<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <!--==============================header=================================-->
  <header>
    <div>
      <h1><a href="index.html"><img src="images/logo.jpg" alt=""></a></h1>
      <!-- <div class="social-icons"> <span>Follow Us:</span> <a href="#" class="icon-3"></a> <a href="#" class="icon-2"></a> <a href="#" class="icon-1"></a> </div> -->
      <div id="slide">
        <div class="slider">
          <ul class="items">
            <li><img src="images/slider-1-small.jpg" alt=""></li>
            <li><img src="images/slider-2-small.jpg" alt=""></li>
            <li><img src="images/slider-3-small.jpg" alt=""></li>
          </ul>
        </div>
        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
      <nav>
        <?php include 'usermenu.php' ?>
        <!-- <ul class="menu">
          <li><a href="user_view_batches.php">Batches</a></li>
                <li><a href="user_bookslot.php">Booking</a></li>
                <li><a href="user_notifications.php">Notifications</a></li>
                <li><a href="user_fixtureview.php">Fixtures</a></li>
                <li><a href="#">Images</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="index.php">Logout</a></li>
        </ul> -->
      </nav>
    </div>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3" style="color: white">Fixtures</h2>
        <!-- <a href="admin_fixadd.php">Add New</a> -->
        <table style="border:none" align="center">
          <tr>
            <th>Bid</th>
          <th>Match</th>
          <th>Date</th>
          <th>Time</th>
          </tr>
          <?php 
          $slno=0;
          while($row=mysqli_fetch_assoc($result))
          {
            $slno=$slno+1;
        ?>

        <tr>
          <td>
            <?php echo $slno ?>
          </td>

          <td>
            <?php echo $row['matchn'] ?>
          </td>
        
          <td>
            <?php echo $row['date'] ?>
          </td>
          <td>
            <?php echo $row['time'] ?>
          </td>
         
          
          <?php $idd=$row['mid']; ?>

          <!-- <td><a href="admin_fixadd.php?id=<?php echo $idd; ?>">Update</a></td> -->
     
        </tr>

        <?php
          }
        ?>
        </table>
        <!-- <center>
        <form  method="post">
          <h2 class="top-1 p3" style="color: white">LOGIN HERE</h2>
          <table align="center">
            <tr>
              <td>USERNAME</td>
              <td><input type="text" name="uname" required></td>
            </tr>
            <br>
            <tr>
              <td>PASWORD</td>
              <td><input type="password" name="password" required></td>
            </tr>
            <td align="center" colspan="2">
              <button type="submit" name="submit">LOGIN</button>
              
            </td>
          </table> -->
          
        </form>
      </center>
      </div>
      
          
          <!-- <h2 class="p3">Our contacts</h2>
          <dl>
            <dt class="color-1 p2"><strong>8901 Marmora Road,<br>
              Glasgow, D04 89GR.</strong></dt>
            <dd><span>Freephone:</span>+1 800 559 6580</dd>
            <dd><span>Telephone:</span>+1 959 603 6035</dd>
            <dd><span>E-mail:</span><a href="#" class="link">mail@demolink.org</a></dd>
          </dl>
        </div> -->
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>
<!--==============================footer=================================-->
<footer>
  <p>© Terrific Hitters</p>
 <!-- <p>Website Template by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></p> -->
</footer>
<script>Cufon.now();</script>
</body>
</html>
