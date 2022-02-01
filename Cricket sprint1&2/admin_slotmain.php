
<?php
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
  $sql="select * from slot";
  $result=$con->query($sql);
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Cricket Club</title>

    <!-- Bootstrap core CSS -->
    <link href="userdesign/css/bootstrap.css" rel="stylesheet">
    <link href="userdesign/css/custom-styles.css" rel="stylesheet">
    <link href="userdesign/css/image-effects.css" rel="stylesheet">
	
	   <link href="userdesign/css/normalize.css" rel="stylesheet">
		 <link href="userdesign/css/component.css" rel="stylesheet">
      <link rel="userdesign/stylesheet" href="css/font-awesome.css">
      <link rel="userdesign/stylesheet" href="css/font-awesome-ie7.css">
	  
    <script src="userdesign/js/html5shiv.js"></script>
      <script src="userdesign/js/respond.min.js"></script>
	  <script src="userdesign/js/modernizr.custom.js"></script>
 
  </head>

  <body>
     <div class="container page-styling">
    <div class="header-wrapper">
     <!--  <div class="site-name">
        <h1>sitename</h1>
      </div> -->
      <div class="menu">
        <div class="navbar">
         
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav ">
                <li><a href="admin_batchmain.php">Batch</a></li>
                <li><a href="admin_viewmem.php">Members</a></li>
                <li><a href="#">Notification</a></li>
                <li><a href="admin_slotmain.php">Time Slot</a></li>
                <li><a href="admin_bookingview.php">Booking</a></li>
                <li><a href="#">Fixtures</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="#">Report</a></li>
                <li><a href="index.php">Logout</a></li>
              </ul>

            </div><!--/.navbar-collapse -->

          </div>
         
      </div>

      <div class="banner">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="userdesign/img/banner2.jpeg" alt="" class="">
      
    </div>
    <div class="item">
      <img src="userdesign/img/terrific.png" alt="">
    
    </div>
    <div class="item">
      <img src="userdesign/img/banner2.jpeg" alt="">
      <div class="carousel-caption">
          <i class="fw-icon-pencil"></i>
        <h2>Corem ipsum</h2>
        <h1>sit amet vivamus</h1>
        <a href="#" class="btn"> more info</a>
      </div>
    </div>
  </div>
</div>
</div>


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
      </div>
      <!-- <div class="content-wrap">
        <div class="main-title">
          <ul class="grid effect-8" id="grid">
            <li ><h1>Home</h1>
          <h4>Donec nec justo eget felis facilisis fermentum.<br> 
Aliquam porttit or mauris sit amet orci. Aenean dignissim pellentesque felis.</h4></li>
          </ul>
          
        </div>
      </div> -->
          <center>
                  <a href="admin_slotnew.php">Add New</a>
        
         <table border="1" align="center" width="80%">

    <tr>
      <td>Tid</td>
      <td>Staring</td>
      <td>Ending</td>
      <td></td>
      <td></td>
    </tr>

       <?php 
      while($row=mysqli_fetch_assoc($result))
      {
    ?>

    <tr>
      <td>
        <?php echo $row['slid'] ?>
      </td>

      <td>
        <?php echo $row['sttime'] ?>
      </td>

      <td>
        <?php echo $row['etime'] ?>
      </td>
     
     
      
      <?php $idd=$row['slid']; ?>
      <td><a href="admin_slotnew.php?id=<?php echo $idd; ?>">Update</a></td>
      <td><a href="admin_slotdel.php?id=<?php echo $idd; ?>">Delete</a></td>

 
    </tr>

    <?php
      }
    ?>
    </table>
          </center>   
    

     


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="userdesign/js/jquery-1.9.1.js"></script>
    <script src="userdesign/js/bootstrap.js"></script>
    <script src="userdesign/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
     <script src="userdesign/js/masonry.pkgd.min.js"></script>
    <script src="userdesign/js/imagesloaded.js"></script>
    <script src="userdesign/js/classie.js"></script>
    <script src="userdesign/js/AnimOnScroll.js"></script>
    
    <script>
      new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
      } );
    </script>

    
  </body>
</html>
