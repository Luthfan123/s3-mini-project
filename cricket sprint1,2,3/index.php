
<?php
  session_start();
  // $mname=$_SESSION['MNAME'];
  // $UID=$_SESSION['UID'];

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
  $sql="select * from notification";
  // echo "$sql";
  $result=$con->query($sql);
  $marq="";

  while($row=mysqli_fetch_assoc($result))
    {
      $marq=$marq.$row['notification']."&nbsp".$row['date']."<br>";
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
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
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
      <div class="social-icons"> <span>Follow Us:</span> <a href="#" class="icon-3"></a> <a href="#" class="icon-2"></a> <a href="#" class="icon-1"></a> </div>
      <div id="slide">
        <div class="slider">
          <ul class="items">
            <li><img src="images/slider-1.jpg" alt=""></li>
            <li><img src="images/slider-2.jpg" alt=""></li>
            <li><img src="images/slider-3.jpg" alt=""></li>
          </ul>
        </div>
        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
      <nav>
        <ul class="menu">
          <li class="current"><a href="index.html">Main</a></li>
          <!-- <li><a href="buying.html">Buying</a></li> -->
          <li><a href="user_register.php">Register</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">Terrific Hitters Cricket Club</h2>
        <p class="p2">The Terrific Hitters Cricket Club is one of the  surviving cricket clubs in the state of Kerala.
                  Cricket Academy was the brainchild of the efforts of an enthusiastic group of cricket lovers in Kozhikode. 
                  The Club continues to be a nursery, nurturing budding talents to achieve their true potential in the game of cricket. </p>
        <p class="line-1">The members can register for membership, book ground, register for different training batches and receive notices
                        from the management.</p>
        <h2 class="p4">Batting. Bowling. Fielding.</h2>
        <div class="wrap block-1">
          <div> <img src="images/page1-img1.jpg" alt="" class="img-border">
            <h3>Batting</h3>
            <p>In cricket, batting is the act or skill of hitting the ball with a bat to score runs and prevent the loss of one's wicket. 
Any player who is currently batting is a batter, batsman or batswoman, regardless of whether batting
 is their particular area of expertise. Batting players have to adapt to various conditions when playing
 on different cricket pitches, especially in different countries - therefore, as well as having outstanding 
physical batting skills, top-level batters will have quick reflexes, excellent decision-making and be good strategists.</p>
            <a href="#" class="button">More</a> </div>
          <div> <img src="images/page1-img2.jpg" alt="" class="img-border">
            <h3>Bowling</h3>
            <p>Bowling, in cricket, is the action of propelling the ball toward the wicket defended by a batter.
 A player skilled at bowling is called a bowler. Bowling the ball is distinguished from throwing the ball by a strictly specified biomechanical definition,
 which restricts the angle of extension of the elbow. A single act of bowling the ball towards
 the batsman is called a ball or a delivery. Bowlers bowl deliveries in sets of six, called an over.
 Once a bowler has bowled an over, a teammate will bowl an over from the other end of the pitch. </p>
            <a href="#" class="button">More</a> </div>
          <div class="last"> <img src="images/page1-img3.jpg" alt="" class="img-border">
            <h3>Fielding</h3>
            <p>Fielding in the sport of cricket is the action of fielders in collecting the ball after it is struck by the
 striking batter, to limit the number of runs that the striker scores and/or to get a batter out by either 
catching a hit ball before it bounces, or by running out either batter before they can complete the run they are
 currently attempting.</p>
            <p>There are a number of recognised fielding positions, and they can be categorised
 into the offside and leg side of the field. Fielding also involves preventing the ball from going to or over the
 edge of the field.</p>
            <a href="#" class="button">More</a> </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="left-1">
          <h2 class="top-1 p3">Notifications</h2>

          <marquee width="60%" direction="up" height="100px">
              <?php echo "$marq"; ?>
          </marquee>
          
          <h2 class="p3">Cricket  Stadiums</h2>
          <img src="images/page1-img4.png" alt="">
          <div class="lists">
            <ul class="list-1">
              <li><a href="#">India</a></li>
              <li><a href="#">Australia</a></li>
              <li><a href="#">England</a></li>
            </ul>
            <ul class="list-1 last">
              <li><a href="#">New Zealand</a></li>
              <li><a href="#">South Africa</a></li>
              <li><a href="#">Srilanka</a></li>
            </ul>
          </div>
        </div>
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
