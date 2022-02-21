
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
          <h2 class="top-1 p3" style="color: white">REGISTER</h2>
          <table align="center">
            <tr>
            <td>Name</td>
            <td><input type="text" name="name" required>  <br></td>
          </tr>
           <tr>
            <td>Address</td>
            <td><input type="text" name="address" required> <br></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email" required> <br></td>
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
            <td><input type="date" name="date" max="<?php echo date('Y-m-d');?>" required> <br></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><select name="gender"><option value="Male">Male</option><option value="Female">Female</option></select><br></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><input type="tel" name="phone" maxlength="10" pattern="\d{10}" class"form-control" placeholder="phone" required="required" title="please use numbers" /> <br></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="pass" required /> <br></td>
          </tr>
            <td align="center" colspan="2">
              <button type="submit" name="submit">SUBMIT</button>
              <button type="submit"><a href="index.php">BACK</a></button>
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
