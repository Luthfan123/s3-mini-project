
<?php
  session_start();
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
if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="select * from Fixture where mid=$idd";
    $cres=$con->query($sql);

    $crow=mysqli_fetch_assoc($cres);

    $time=$crow['time'];
    $date=$crow['date'];
    $match=$crow['matchn'];
   

    $_SESSION['did']=$idd;
    $_SESSION['act']="Edit";

    // echo "<script> alert('hello');</script>";

  }
  else
  {
    $_SESSION['act']="Save";
     $time="";
    $date="";
    $match="";
  }
// echo "hello";

if(isset($_POST['submit']))
  {
    echo "ddddddd";
    $time=$_POST['time'];
    $date=$_POST['date'];
    $match=$_POST['match'];
  
    if ($_SESSION['act']=="Edit")
        {
          $didd=$_SESSION['did'];
          $sql="delete from `fixture` where mid='$didd'";
          $result=$con->query($sql);
        }
       
 
        $sql="INSERT INTO `fixture` (`matchn`, `date`, `time`) VALUES ('$match', '$date', '$time')";

    
        $result=$con->query($sql);
        header("Location:admin_fixturemain.php");
  }
 


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
 td, th {
  border: 1px solid black;
}

button{
  background:#2098f5;
}

table {
  border-collapse: collapse;
  
}
td{
  height: 30px;
}

th, td,tr {
      /*border-bottom: 1px solid #ddd;*/
      /*border-color: #FFFFFF;*/
      padding: 25px;
      color: #FFFFFF;
    }
</style>

<!-- <style>

    
      th, td {
      border-bottom: 2px solid #ddd;
      padding: 20px;
      color: #FFFFFF;
    }

 
</style> -->
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
        <?php include 'adminmenu.php' ?>
        <!-- <ul class="menu">
          <li><a href="admin_batchmain.php">BATCH</a></li>
           <li><a href="admin_viewmem.php">MEMBERS</a></li>
          <li><a href="admin_notifications.php">NOTIFICATION</a></li>
          <li><a href="admin_slotmain.php">TIME SLOT</a></li>
          <li><a href="admin_bookingview.php">BOOKING</a></li>
          <li><a href="#">FIXTURES</a></li>
          <li><a href="#">GALLERY</a></li>
          <li><a href="#">FEEDBACK</a></li>
          <li><a href="#">REPORT</a></li>
          <li><a href="index.php">LOGOUT</a></li>
        </ul> -->
      </nav>
    </div>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <!-- <div class="grid_8"> -->
        
        <!-- <table>
          <tr>
            <td>dfjdfh</td>
              <td>dfjdfh</td>
                <td>dfjdfh</td>
          </tr>
          <tr>
            <td>hasg</td>
            <td>jghjgjgj</td>
             <td>jghjgjgj</td>
          </tr>
        </table> -->
        <center>
        <form  method="post">
          <h2 class="top-1 p3" style="color: white">Fixture</h2>
          <table align="center">
            <tr>
                            <td>Match&nbsp;</td>
                            <td><input type="text" required style="width:200px" name="match" value="<?php echo $match; ?>"></td>
                          </tr>
            <tr>
                            <td>Date</td>
                            <td><input type="date" required  style="width:200px" name="date" min="<?php echo date('Y-m-d');?>"></td>
                          </tr>

                          <tr>
                            <td>Time</td>
                            <td><input type="time" required style="width:200px" name="time" value="<?php echo $time; ?>"></td>
                          </tr>
            <td align="center" colspan="2">
              <button type="submit" name="submit">SUBMIT</button>
              
            </td>
          </table>
          
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
