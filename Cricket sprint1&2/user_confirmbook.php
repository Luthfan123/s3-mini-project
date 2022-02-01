<?php
  include('dbconnection.php');
  session_start();
  // $mname=$_SESSION['MNAME'];
  $mid=$_SESSION['UID'];
  $bdate=$_SESSION['$bookdt'];
  if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
  }

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
    $slot=$_POST['slot'];
    $dat=$_POST['date'];
    $sql="INSERT INTO `booking` ( `mem_id`, `date`, `time`) VALUES ( '$mid', '$dat', '$slot')";
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
              <button type="button" class="navbar-toggle" data-toggle="collapse" >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav ">
               <li><a href="user_view_batches.php">Batches</a></li>
                <li><a href="user_bookslot.php">Booking</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="#">Fixtures</a></li>
                <li><a href="#">Images</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="index.php">Logout</a></li>
              </ul>

            </div>

          </div>
         
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

      </div>
     <!--  <div class="content-wrap">
        <div class="main-title">
          <ul class="grid effect-8" id="grid">
            <li><h1>Register</h1></li>
         </div>
      </div> -->
    <center>
      <h3><b>Book Your Slot</b></h3>
      <br>
      <form method="POST">
        <table  align="center" >
          <tr>
            <td>Slot</td>
            <td><input type="text" name="slot" value="<?php echo $idd ?>" readonly />  <br></td>
          </tr>
          <tr>
            <td>Date</td>
            <td><input type="text" name="date" value="<?php echo $bdate ?>" readonly /> <br></td>
          </tr>
          <tr>
            <td></td>
            <td>Charges : 500/Hr</td>
          </tr>

       
           <tr>
            <td></td>
            <td>
              <input type="submit" value="Book" name="submit">
              <br>
            </td>
          </tr>
          
          
        </table>  
      </form>
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
