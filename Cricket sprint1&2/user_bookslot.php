<?php
  session_start();
  $mname=$_SESSION['MNAME'];
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
  
  $col=array();
  if(isset($_POST['submit']))
  {
    $dt=$_POST['dt'];
    $_SESSION['$bookdt']=$dt;
    // $sql="select * from slot where date='$dt'";
    $sql="select * from slot";
    $result=$con->query($sql);
    $slot = array();
    // $col=array();
    while($row=mysqli_fetch_assoc($result))
    {
        $tm=$row['sttime'];
        $slot[]=$tm;
        $sql="select * from booking where date='$dt' and time='$tm'";
        $result2=$con->query($sql);
        $nrows=mysqli_num_rows($result2);
        if ($nrows>0)
        {
          $col[]=1;
        }
        else
        {
          $col[]=0;
        }
    }
  }
  

 







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
      <h3><b>Check Availability</b></h3>
      <br>
      <form method="post">
        <table>
          <tr>
            <td>Date</td>
            <td><input type="date" name="dt"></td>
            <td><input type="submit" name="submit" value="Check Availability"></td>
          </tr>
        </table>
      </form>
      <table align="center">

       
       
            <tr>
           <?php 
           $cnt=count($col);
           for($i=0;$i<$cnt;$i++)
          // while($row=mysqli_fetch_assoc($result))
            {

            ?>
      
          <td>
            <?php 
              if($col[$i]==0)
              { 
            ?>
                <a href="user_confirmbook.php?id=<?php echo $slot[$i]; ?>"><button style="background-color: green;"><?php echo $slot[$i] ?></button></a>
            <?php
             }
             else
             {
            ?>
                <button style="background-color: red"><?php echo $slot[$i] ?></button>
            <?php
             }
            ?>
            
          </td>
        <?php
          }
        ?>
        </tr>
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
