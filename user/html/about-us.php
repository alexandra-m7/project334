<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Toronto Pearson Hotel</title>

    <!-- Favicon -->
    	<link rel="icon" href="../img/core-img/titlelogo.png">

    <!-- Core Stylesheet -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/custom.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <?php include "nav.php"; ?>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(../img/bg-img/exterior.jpg);">
        <div class="bradcumbContent">
            <h2>About us</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Book Now Area Start ##### -->
    <div class="book-now-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="book-now-form">
                        <form action="booking.php" method="post">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select1">Check In</label>
                                <input type="date" id="arrive" name="arrive" value="<?php echo date('Y-m-d'); ?>">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select2">Check Out</label>
                                <input type="date" id="depart" name="depart" value="<?php echo date('Y-m-d'); ?>">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select3">Adults</label>
                                <select class="form-control" id="select3" name="adults">
                                  <option>1</option>
								  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
								  <option>7</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select4">Childrens</label>
                                <select class="form-control" id="select4" name="children">
                                  <option>0</option>
								  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                            </div>

                            <!-- Button -->
                            <button onclick='this.form.submit()' type="button">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Book Now Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-text mb-100">
                        <div class="section-heading">
                            <div class="line-"></div>
                            <h2>Welcome to Toronto Pearson Hotel</h2>
                        </div>
                        <p>A modern hotel located in an ideal location just minutes away from Toronto Pearson International Airport. We have meeting rooms, an indoor pool, fitness area, and an all-day restaurant.</p>
                        <a href="#" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <img src="img/bg-img/hotelexterior8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Milestones Area Start ##### -->
    <section class="our-milestones section-padding-100-0 bg-img bg-overlay bg-fixed" style="background-image: url(../img/bg-img/bg-4.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-center white">
                        <div class="line-"></div>
                        <h2>At a Glance</h2>
                        <p>Check out our numbers below. Toronto Pearson Hotel proudly serves over 100 cocktails per day. With over 200 rooms and 20 meeting rooms for business needs, there is </p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="scf-text">
                            <i class='fas fa-cocktail'></i>
                            <h2><span class="counter">137</span></h2>
                            <p>Cocktails/day</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="scf-text">
                            <i class='fas fa-swimming-pool'></i>
                            <h2><span class="counter">1</span></h2>
                            <p>Pool</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="scf-text">
                            <i class='fas fa-hotel'></i>
                            <!--<h2><span class="counter">79</span></h2>-->
							<?php
							$result = $conn->query("SELECT COUNT(*) as cnt FROM room");
							while($row = $result->fetch_assoc())
							{
								echo '<h2>'.'<span class="counter">'.$row['cnt'].'</span>'.'</h2>';
							} ?>
                            <p>Rooms</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="900ms">
                        <div class="scf-text">
                            <i class='fas fa-business-time'></i>
                            <h2><span class="counter">10</span></h2>
                            <p>Meeting Rooms</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Milestones Area End ##### -->

    <!-- ##### Hotels Area Start ##### -->
    <section class="our-hotels-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Our Hotel</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> Year-round indoor pool</h6>
                            <h6><span class="fa fa-check"></span> 135 guestrooms, 80 corner rooms, 33 signature suites</h6>
                            <h6><span class="fa fa-check"></span>On-site restaurant and lounge bar</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="../img/bg-img/lobby.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> 24-hour fitness centre with sauna</h6>
                            <h6><span class="fa fa-check"></span>Located minutes away from Toronto Pearson Airport</h6>
                            <h6><span class="fa fa-check"></span>Free hot breakfast daily in our hotel restaurant</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="../img/bg-img/breakfast.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> Multiple meeting/conference rooms for business needs</h6>
                            <h6><span class="fa fa-check"></span>Many local attractions near the hotel</h6>
                            <h6><span class="fa fa-check"></span>Comfortable room options to choose from</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="../img/bg-img/loungearea.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hotels Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->
    <!--<section class="testimonial-area section-padding-100 bg-img" style="background-image: url(img/core-img/pattern.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-content">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2>What Clients Say</h2>
                        </div>-->
                        
                        <!-- Testimonial Slides -->
                        <!--<div class="testimonial-slides owl-carousel">-->
                            
                            <!-- Single Testimonial -->
                           <!-- <div class="single-testimonial">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <h6>Michael Smith, <span>Client</span></h6>
                                <img src="img/core-img/trip.png" alt="">
                            </div>-->
                            
                            <!-- Single Testimonial -->
                            <!--<div class="single-testimonial">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <h6>Nazrul Islam, <span>Developer</span></h6>
                                <img src="img/core-img/trip.png" alt="">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- ##### Testimonial Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
        <?php include "footer.php"; ?>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
</body>

</html>
