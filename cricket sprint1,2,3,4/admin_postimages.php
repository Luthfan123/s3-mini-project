
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
    
      $filename= basename($_FILES["file1"]["name"]);

      $ext = pathinfo($filename, PATHINFO_EXTENSION);

      $fnn=date("YmdHis").".".$ext;

      $target_dir = "uploads/";
      // $target_file = $target_dir . basename($_FILES["file1"]["name"]);
      $target_file = $target_dir.$fnn;
      if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
          // echo "The file ". htmlspecialchars( basename( $_FILES["file1"]["name"])). " has been uploaded.";
          // echo "<script>alert('ok')</script>";
        }
        else
        {
          // echo "<script>alert('error')</script>";
        }
 
        $sql="INSERT INTO `files` (`file`) VALUES ('$target_file')";

    
        $result=$con->query($sql);
        ?>
        <script type="text/javascript">
          alert("File Uploaded");
          Location.href="adminmain.php";
        </script>

        <?php
        // header("Location:adminmain.php");
  }

  $sql="select * from files";
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
<meta name="viewport" content="width=200, initial-scale=1" />

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
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
      <center>
        <form  method="post" enctype="multipart/form-data">
          <h2 class="top-1 p3" style="color: white">Upload Images</h2>
          <table align="center">
            <tr>
                            <td>Post Here</td>
                            <td>
                              <input type="file" required  name="file1">
                              <button type="submit" name="submit">Upload</button>
                            </td>
                          </tr>

                         
            <td align="center" colspan="2">
              
              
            </td>
          </table>
          
        </form>
      </center>
      <div class="row">
      <p>&nbsp;</p> 
       <?php 
          while($row=mysqli_fetch_assoc($result))
          {
            $slno=$row['slno']
        ?>

            <!-- <img class="ImgThumbnail" src="<?php echo $row['file'] ?>"/> -->
          <div class="col-sm-4">
            <div class="card">
                <img src="<?php echo $row['file'] ?>" alt="Denim Jeans" style="width:100%">
                
                
                <p><a href="removeimage.php?id=<?php echo $slno; ?>"><button>Remove</button></a></p>
            </div>
        </div>

      <?php
    }
    ?>
  </div>
      
      <div class="modal">

      <span class="close">×</span>
      <img class="modalImage" id="img01" />
      </div>
   


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
<script>
var modalEle = document.querySelector(".modal");
var modalImage = document.querySelector(".modalImage");
Array.from(document.querySelectorAll(".ImgThumbnail")).forEach(item => {
   item.addEventListener("click", event => {
      modalEle.style.display = "block";
      modalImage.src = event.target.src;
   });
});
document.querySelector(".close").addEventListener("click", () => {
   modalEle.style.display = "none";
});
</script>
<script>Cufon.now();</script>
</body>
</html>
