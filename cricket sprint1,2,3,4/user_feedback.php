
<?php
  include('dbconnection.php');
  session_start();
  $mname=$_SESSION['MNAME'];
  $mid=$_SESSION['UID'];
  // echo " $mname";
  // session_start();
  // if($_SESSION['stat']=="Active")
  // {
  //   // echo "Welcome ".$_SESSION["username"];
  // }
  // else
  // {
  //   header("location:index.php");
  // }


if(isset($_POST['submit']))
  {
    // echo "hello";
    $mid=$_POST['id'];
    $feed=$_POST['name'];
    
   // $result=$con->query($sql);
    
    $sql="INSERT INTO `feedback` (`mem_id`, `feedback`, `reply`) VALUES ('$mid', '$feed', '')";
    $result=$con->query($sql);
    header("Location:usermain.php");
    }
 
   // $name="";
   //  $email="";
   //  $phone="";
   //  $adr="";
   //  $gender="";
   //  $pwd="";



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
          <h2 class="top-1 p3" style="color: white">Feedback</h2>
          <a href="user_myfeedback.php">Show My Feedback</a>
          <table align="center">
            <tr>
            <td></td>
            <td><input type="hidden" name="id" value="<?php echo $mid ?>" readonly />  <br></td>
          </tr>
           <tr>
            <td>Feedback</td>
            <td><textarea name="name" required /> </textarea> <br></td>
          </tr>
          

          </tr>
            <td align="center" colspan="2">
              <button type="submit" name="submit">Submit</button>
              
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
