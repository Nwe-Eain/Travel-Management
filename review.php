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
                                    <li class="breadcrumb-item"><a href="#"> Vistor Reviews </a></li> 
                                </ol>
                            </nav>
                            <h2 data-animation="fadeInLeft" data-delay=".4s"> Vistor Reviews </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
 <section class="load-balancing  pt-top section-bg2">

 
    <?php if(isset($_SESSION['cusid'])){ ?>
     <div class="blog_right_sidebar col-4">
                     <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                           
                           <a  href='makereview.php' class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                              type="submit"> Give Reviews </a>
                        </form>
                     </aside>

            </div>
     <?php } ?>
            
    <div class="container">
  
  <div class="comments-area">
                     <h4> Reviews </h4>

     <?php 
            $selr=mysqli_query($con,"SELECT * FROM review r,customer c,booking b WHERE r.cid=c.cid AND b.bid=r.bid ORDER BY r.rid DESC");
            while($r=mysqli_fetch_assoc($selr))
            {
             ?>
                     <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <img src="assets/img/elements/f1.jpg" alt="">
                              </div>
                              <div class="desc">
                                 <p class="comment">
                                    <?php echo $r['review_msg']; ?>
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                          <a href="#"><?php echo $r['name']; ?></a>
                                       </h5>
                                       
                                    </div>
                                    <br>
                                    <div class="reply-btn">
                                       <a href="detail.php?iid=<?php echo $r['infoid']; ?>" class="btn-reply text-uppercase"> Detail Tripinfo</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                 <?php } ?>
                   
                    
                  </div> 
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

