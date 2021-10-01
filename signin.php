<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>  Stella Travel Agency </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

   <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/hamburgers.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
    <!-- ? Preloader Start -->
    
    <!-- Preloader Start -->
   <?php    
   include('header.php');
    ?>
    <!-- header end -->
    <main>
        <!-- Hero Area Start-->
        <div class="hero-area2 slider-height d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-cap text-center">
                            <!-- Bredcrumb -->
                            <nav aria-label="breadcrumb"></nav>
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Contact</a></li> 
                                </ol>
                            
                            <h2 data-animation="fadeInLeft" data-delay=".4s">Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <section class="contact-section">
           <div class="container">

        <div class="row">
          
          <div class="container">
  <div class="row">
    <div class="col-10">
      <div class="card mt-3 tab-card">
        <div class="card-header tab-card-header bg-danger">
          <ul class="nav nav-tabs card-header-tab" id="myTab" role="tablist">
            <li class="nav-item" style="margin-right: 50px;">
                <a class="nav-link text-light" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true"> Login </a>
            </li>
           

            <li class="nav-item">
                <a class="nav-link text-light" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false"> Register </a>
            </li>
            
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-3 col-6" id="one" role="tabpanel" aria-labelledby="one-tab">
            <h5 class="card-title text-center mt-3"> Login </h5>
           <br>
            <form action="" method="post" role="form">
             
                
                <div class="form-group">
                  <input type="email" class="form-control" name="lemail" id="lemail" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              
             
              <div class="form-group">
                <input type="password" class="form-control" name="pass" id="password" placeholder="Password" data-rule="minlen:5" data-msg="Please enter at least 5 chars or numbers" />
                <div class="validate"></div>
              </div><br><br>

              <div class="text-center">
                <button type="submit" name="login" class="genric-btn primary-border circle arrow"> Login </button>
                <button type="reset" class="genric-btn danger-border circle arrow"> Cancel </button>
              </div>
            </form>
                       
          </div>


          <div class="tab-pane fade p-3 col-8" id="two" role="tabpanel" aria-labelledby="two-tab">
           <h5 class="card-title text-center mt-3"> Register  </h5>
           <br>

            <form action="" method="post" role="form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="true" />
                  
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" onchange="CheckEmail();" required="true"  />
                
                </div>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="phno" id="phno" placeholder="Phone No" required="true" onchange="CheckPh();">
              
              </div>
              <div class="form-group">
                <textarea class="form-control" name="address" rows="5" data-rule="required" placeholder="Address" required="true" ></textarea>
               
              </div>
              <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="true" />
                
              </div> <br><br>
             
              <div class="text-center">
                <button type="submit" class="genric-btn info-border circle arrow" name="register"> Register </button>
                <button type="reset" class="genric-btn warning-border circle arrow"> Cancel </button>
              </div>
            </form>

          </div>
          

        </div>

      </div>
    </div>
  </div>
</div>
        </section>
    
    </main>
   
<?php   include('footer.php'); ?>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    
    <!-- JS here -->

    <script>
    function CheckEmail()
    {
      
    var emailID = document.getElementById('email').value;
     atpos = emailID.indexOf("@");
     dotpos = emailID.lastIndexOf(".");
     
     if (atpos < 1 || ( dotpos - atpos < 2 )) 
     {
        alert("Please enter correct email address");
        document.getElementById('email').value=" ";
        document.getElementById('email').focus() ;
        return false;
     }
     return( true );
    }

    function CheckPh()
  {
    
    var p=phno.value;

    var l=p.length;
    if(l<9)
    {
        alert('Enter valide Phno');
        document.getElementById('phno').value;
         document.getElementById('phno').focus();
    }
    
    if (/[0-9]{9} || [0-9]{10}|| [0-9]{11}/.test(p))
    {
        if (/[0-9]{12}/.test(p))
        { 
         alert('Enter valide Phno');
         document.getElementById('phno').value="";
         document.getElementById('phno').focus();
        }
        else
        {
            return true;
        }
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


<?php 


 if(isset($_POST['register']))
 {
   $n=$_POST['name'];
  $e=$_POST['email'];
  $phno = $_POST['phno'];
  $add = $_POST['address'];
  $pass= $_POST['password'];


  $sel = mysqli_query($con,"SELECT * FROM customer WHERE email='$e'");
  $rn=mysqli_num_rows($sel);
  if($rn>0)
  {
    echo "<script> alert('Email already exist!'); location.href='signin.php'; </script>";
  }

  else
  {
    $inst=mysqli_query($con,"INSERT INTO customer(name,email,phone,address,password) VALUES('$n','$e','$phno','$add','$pass')");
    if($inst)
    {
      echo "<script> alert('Register account successfully'); location.href='signin.php'; </script>";
    }
    else
    {
      echo mysqli_error($con);
    }
  }

 }

 if(isset($_POST['login']))
{
  
    $email=$_POST['lemail'];
    $pass=$_POST['pass'];

    $se=mysqli_query($con,"SELECT * FROM customer WHERE email='$email' AND password='$pass'");
    $r=mysqli_num_rows($se);
    if($r>0)
    { 
      $l=mysqli_fetch_assoc($se);
      $_SESSION['cusid']=$l['cid'];
        echo "<script> alert('Login Successful'); location.href='index.php';</script>";

    }
    else
    {
      //echo mysqli_error($con);
        
        echo "<script> alert('Try Again'); location.href='signin.php';</script>";
    }

}

 ?>