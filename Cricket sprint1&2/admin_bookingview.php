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

  if(isset($_POST['submit']))
  {
    $date=$_POST['date'];
    $sql="select a.*,b.name from booking as a,member as b where a.mem_id=b.mem_id and a.date='$date'";  
  }
  else
  {
    date_default_timezone_set("Asia/Kolkata");
    $cdate=date("Y/m/d");
    $sql="select a.*,b.name from booking as a,member as b where a.mem_id=b.mem_id and a.date='$cdate'";

  }
  // echo "$sql";
  $result=$con->query($sql);


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
    <style>
        #tabdes {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 75%;
        }

        #tabdes td, #tabdes th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #tabdes tr:nth-child(even){background-color: #f2f2f2;}

        #tabdes tr:hover {background-color: #ddd;}

        #tabdes th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #00450c;
          color: white;
        }
</style>
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
     <h3><b>BOOKING DETAILS</b></h3>
      <br>
      <!-- <a href="user_create_batch.php">New Batch</a> -->
      <table id="tabdes" align="center" width="80%">

        <thead>
          <th>Bid</th>
          <th>Member</th>
          <th>Date</th>
          <th>Time</th>
          <!-- <th></th> -->
        </thead>
        <tr>
          <form method="post">
            <td>Date</td>
            <td><input type="date" name="date">
            <input type="submit" name="submit"></td>
            <td></td>
          </form>
        </tr>

           <?php 
          while($row=mysqli_fetch_assoc($result))
          {
        ?>

        <tr>
          <td>
            <?php echo $row['book_id'] ?>
          </td>

          <td>
            <?php echo $row['name'] ?>
          </td>
        
          <td>
            <?php echo $row['date'] ?>
          </td>
           <td>
            <?php echo $row['time'] ?>
          </td>
          
          <!-- <?php $idd=$row['bid']; ?>

          <td><a href="admin_batchdel.php?id=<?php echo $idd; ?>">Delete</a></td> -->
     
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
