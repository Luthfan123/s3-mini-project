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

if(isset($_POST['submit']))
  {
    // echo "hello";
    $name=$_POST['name'];
    $adr=$_POST['address'];
    $email=$_POST['email'];
    $type=$_POST['type'];
    $dob=$_POST['date'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $pwd=$_POST['pass'];
    // INSERT INTO `login` (`uid`, `uname`, `password`, `utype`) VALUES (NULL, '', '', '')


    $sql="INSERT INTO `login` (`uname`, `password`, `utype`) VALUES ('$email', '$pwd', 'member')";
    $result=$con->query($sql);

    $sql="select max(uid) as logid from login";
  $result=$con->query($sql);
  $row=mysqli_fetch_assoc($result);
  $lid=$row['logid'];
  echo "$lid";

  $sql="INSERT INTO `member` ( `name`, `address`, `email`, `type`, `dob`, `gender`, `phone`, `uid`) VALUES ('$name', '$adr', '$email', '$type', '$dob', '$gender', '$phone', '$lid')";
  $result=$con->query($sql);
    header("Location:index.php");
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
           <!--  <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav ">
               <li><a href="usermain.php">Home</a></li>
                <li><a href="userappointment.php">Booking</a></li>
                <li><a href="App_history.php">Appointments</a></li>
                <li><a href="Services.php">Services</a></li>
                <li><a href="Product.php">Product</a></li>
                <li><a href="Feedback.php">Feedback</a></li>
                <li><a href="Offers.php">Offers</a></li>
                <li><a href="Logout.php">Logout</a></li>
              </ul>

            </div><! -->
            <h1><b><i>TERRIFIC HITTERS CRICKET CLUB</i></b></h1>
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
      <h3><b>MEMBER REGISTRATION</b></h3>
      <br>
      <form method="POST">
        <table  align="center" >
          <tr>
            <td>Name</td>
            <td><input type="text" name="name" required />  <br></td>
          </tr>
           <tr>
            <td>Address</td>
            <td><input type="text" name="address" required /> <br></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email" required /> <br></td>
          </tr>
          <tr>
            <td>Type</td>
            <td><select name="type">
              <option value="Regular">BATSMAN</option>
              <option value="Regular">BOWLER</option>
              <option value="Regular">ALL ROUNDER</option>
            </select>
            <br>
          </td>
          </tr>
          <tr>
            <td>Date of Birth</td>
            <td><input type="date" name="date" required /> <br></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><select name="gender"><option value="Male">Male</option><option value="Female">Female</option></select><br></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><input type="number" name="phone" required /> <br></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="pass" required /> <br></td>
          </tr>
           <tr>
            <td></td>
            <td>
              <input type="submit" value="Register" name="submit">
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
