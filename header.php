<?php 

session_start();
include('Admin/connection.php');

 ?>

  <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php">
                                Stella Travel
                            </a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href=""> Trip Types </a>
                                        <ul class="submenu">
                                <?php 
                            $selt=mysqli_query($con,"SELECT * FROM triptype");
                            while($r=mysqli_fetch_assoc($selt))
                            { ?>
                             <li><a href="triptype.php?id=<?php echo $r['tid']; ?>&n=<?php echo $r['tname']; ?>"> <?php echo $r['tname']; ?> </a></li>
                            <?php } ?>             
                                        </ul>
                             </li>
                            <li><a href="trips.php"> View Packages</a></li>
                           
                            <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <?php if(!isset($_SESSION['cusid'])){ ?>
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="#" class="mr-40">+95 9 2345677</a>
                            <a href="signin.php" class="btn">Sign In</a>
                        </div>
                    <?php }
                    else{ ?>


                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="#" class="mr-40">+95 9 2345677</a>
                            <a href="history.php" class="btn"> Booking History</a>
                            <a href="logout.php"> Logout </a>
                        </div>


                    <?php } ?>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->