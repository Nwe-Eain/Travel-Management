<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Stella Travel Agency </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/card.css">
    
</head>
<body>
    <!-- ? Preloader Start -->
    
    <?php 
    include('header.php');

    $id;
  
    if(isset($_GET['iid']))
    {
        $id=$_GET['iid'];
        
    }

     ?>
    <main>
        <!-- Hero Area Start-->
        <div class="hero-area2 slider-height d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-cap text-center">
                            <!-- Bredcrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Details</a></li> 
                                </ol>
                            </nav>
                            <h2 data-animation="fadeInLeft" data-delay=".4s"> Details </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        
        <section class="load-balancing  pt-top section-bg2">
            
    <div class="container">
    <h3 class="text-center text-success"> Trip Details </h3>
    <hr>
  <?php 

$selt=mysqli_query($con,"SELECT * FROM trippackage tp,triptype tt,tripinfo ti WHERE tt.tid=tp.tid AND ti.pid=tp.pid AND ti.infoid=$id");
$r=mysqli_fetch_assoc($selt);

   ?>
    
    <div class="row">
        <div class="col-md-8">
            <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="Trip/<?php echo $r['timage']; ?>" alt="">
                     </div>
                     <div class="blog_details">
                        <h2 style="color: #2d2d2d;">
                            <?php echo $r['pname']; ?>
                        </h2>
                       
                        <p class="excert">
                          <?php echo $r['location']; ?>
                        </p>
                        <p>
                           <?php echo $r['information']; ?>
                        </p>
                        <div class="quote-wrapper">
                           <div class="quotes">
                             Availabe Time : <?php echo $r['available_time'] ?>
                           </div>
                        </div>
                        <br>

                        <div class="quote-wrapper">
                           <div class="quotes">
                             Price : $ <?php echo $r['price'] ?>
                           </div>
                        </div>
                        <br>
                        <div class="quote-wrapper">
                           <div class="quotes">
                          Day Of Trip : <?php echo $r['nday']; ?>
                           </div>
                        </div>

                        <br><br>


                        <?php if(!isset($_SESSION['cusid']))
                        {
                        ?>  
                         <a href="signin.php" class="genric-btn primary circle arrow" onclick="javascript:return confirm('You need to login First');"> Book Trip
                        </a>
                       <?php } ?>

                        <br> 
                       
                     </div>
    </div>
        </div>

<?php if(isset($_SESSION['cusid']))
{ ?>
<div class="col-md-4">

<div class="container" >
                
  <form class="form-contact contact_form" action="" method="post">

    <label> Name </label>
    <input type="text" id="name" class="form-control mb-2" name="name" required="true">

    <label> Phone No </label>
    <input type="number" id="phno" class="form-control mb-2" name="phno" required="true" onchange="CheckPhoneno();">

    <label> Depature Date </label>
    <input type="date" id="ddate" class="form-control mb-2" name="ddate" required="true">
   
    <label> No of People </label>
    <input type="number" id="nop" class="form-control mb-2" name="nop" raadonly="true" min="1" max="10" required="true">
   
    <br> <br>
     <button type="submit" class="genric-btn primary circle arrow" name="book"> Book Trip
        <span class="lnr lnr-arrow-right"></span></button>
    <button type="submit" class="genric-btn primary circle arrow"  name="cancle">Cancel
        <span class="lnr lnr-arrow-right"></span></button>
</form>

            </div>
            
        </div>

<?php } ?>
    </div>

        </section>
       
        <!-- Want To work End 2-->
    </main>

    <br><br>
    <?php include('footer.php'); ?>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

<script>
    function CheckPhoneno()
    {
        ph=phno.value;
        l=ph.length;
     
        if(l>10 || l<10) 
        {
           alert('Invalid Phone No');
           phno.value="";
           ph.focus();
        }
        else
        {
            return true;
        }
    }
</script>

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>

<?php if(isset($_POST['book']))
{
    $phno=$_POST['phno'];
    $nop=$_POST['nop'];
    $ddate=$_POST['ddate'];
    $m = date("m",strtotime($ddate));
    $cid = $_SESSION['cusid'];
    $bdate=date('Y-m-d');
   


    $asel=mysqli_query($con,"SELECT available_time from tripinfo WHERE infoid=$id");
    $av=mysqli_fetch_assoc($asel);
    $atime = $av['available_time'];

    if($atime=="The whole year")
    {
    
    $inst=mysqli_query($con,"INSERT INTO booking(cid,infoid,no_of_people,depatureDate,bookingDate,phoneno,bookingstatus) VALUES($cid,$id,'$nop','$ddate','$bdate','$phno','Booking')");

    if($inst)
    {
        echo "<script> alert('Booking Success'); location.href='history.php'; </script>";
    }
    else
    {
        echo mysqli_error($con);
    }


    }



    elseif ($atime=="November till February") 
    {
        
    if($m=='11' || $m=='12' || $m=='01' || $m=='02')
    {

    
    $inst=mysqli_query($con,"INSERT INTO booking(cid,infoid,no_of_people,depatureDate,bookingDate,phoneno,bookingstatus) VALUES($cid,$id,'$nop','$ddate','$bdate','$phno','Booking')");

    if($inst)
    {
        echo "<script> alert('Booking Success'); location.href='history.php'; </script>";
    }
    else
    {
        echo mysqli_error($con);
    }
    }

    else
    {
        echo "<script> alert('Not available_time for this trip. Trip only available November till February'); </script>";
    }



    }

    else
    {

    if($m=='12' || $m=='01' || $m=='02' || $m=='03')
    {
     

    $inst=mysqli_query($con,"INSERT INTO booking(cid,infoid,no_of_people,depatureDate,bookingDate,phoneno,bookingstatus) VALUES($cid,$id,'$nop','$ddate','$bdate','$phno','Booking')");

    if($inst)
    {
        echo "<script> alert('Booking Success'); location.href='history.php'; </script>";
    }
    else
    {
        echo mysqli_error($con);
    }

    }

    else
    {
        echo "<script> alert('Not available_time for this trip. Trip only available December till March'); </script>";
    }

    }


} ?>