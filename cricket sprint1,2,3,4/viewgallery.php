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
<meta name="viewport" content="width=100%, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
<meta name="viewport" content="width=200, initial-scale=1" />

<style>
* {
   box-sizing: border-box;
}
h1 {
   text-align: center;
}
.ImgThumbnail {
   border-radius: 5px;
   cursor: pointer;
   transition: 0.3s;
   height: 250px;
   width: 250px;
}
.ImgThumbnail:nth-of-type(1) {
   margin-left: 20%;
}
.modal {
   display: none;
   position: fixed;
   z-index: 1;
   padding-top: 100px;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgb(0, 0, 0);
   background-color: rgba(0, 0, 0, 0.9);
}
.modalImage {
   margin: auto;
   display: block;
   width: 50%;
   height: 60%;
   max-width: 700px;
}
#caption {
   margin: auto;
   display: block;
   width: 80%;
   max-width: 700px;
   text-align: center;
   color: #ccc;
   padding: 10px 0;
   height: 150px;
}
.close {
   position: absolute;
   top: 15px;
   right: 35px;
   color: #f1f1f1;
   font-size: 40px;
   font-weight: bold;
   transition: 0.3s;
}
.close:hover,
.close:focus {
   color: rgb(255, 0, 0);
   cursor: pointer;
}
@media only screen and (max-width: 700px) {
   .modalImage {
      width: 100%;
   }
}
</style>


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
            <li><img src="images/slider-1-small.jpg" alt=""></li>
            <li><img src="images/slider-2-small.jpg" alt=""></li>
            <li><img src="images/slider-3-small.jpg" alt=""></li>
          </ul>
        </div>
        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
        <?php include 'usermenu.php' ?>
      <!-- <nav>
        <ul class="menu">
          <li><a href="index.html">Main</a></li>
          <li><a href="buying.html">Buying</a></li>
          <li class="current"><a href="selling.html">Selling</a></li>
          <li><a href="renting.html">Renting</a></li>
          <li><a href="finance.html">Finance</a></li>
          <li><a href="contacts.html">Contacts</a></li>
        </ul>
      </nav> -->
    </div>
  </header>
  
 

  <!--==============================content================================-->
  <section id="content">
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   
       <?php 
          while($row=mysqli_fetch_assoc($result))
          {
        ?>

      <img class="ImgThumbnail" src="<?php echo $row['file'] ?>"/>

      <?php
    }
    ?>
      
      <div class="modal">

      <span class="close">×</span>
      <img class="modalImage" id="img01" />
      </div>
   

    
  </section>
</div>
<!--==============================footer=================================-->
<footer>
  <p>© Terrific Hitters</p>
  <!--<p>Website Template by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></p>-->
</footer>
<!-- <script>Cufon.now();</script> -->
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
</body>
</html>
