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
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(../img/bg-img/fitness.jpg);">
        <div class="bradcumbContent">
            <h2>Services</h2>
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

    <!-- ##### Service Intro Area Start ##### -->
    <section class="services-intro">
        <div class="container">
            <div class="row align-items-center">
                <!-- Service Intro Text -->
                <div class="col-12 col-lg-6">
                    <div class="service-intro-text mb-100">
                        <div class="section-heading">
                            <div class="line-"></div>
                            <h2>Services and Amenities</h2>
                        </div>
                        <p>Start your day off with our complimentary hot breakfast served daily. Enjoy a free shuttle service to the Toronto Pearson Airport. Added amenities include an indoor pool, fitness centre, access to our business centre, and free Wi-Fi. </p>
                        <a href="#" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>

                <!-- Services Features -->
                <div class="col-12 col-lg-6">
                    <div class="row mb-100">

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <!--<i class="icon-cocktail-1"></i>-->
									<i class='fas fa-wifi'></i>
                                    <p>Free Wifi</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class='fas fa-shuttle-van'></i>
                                    <p>Airport Shuttle</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class='fas fa-coffee'></i>
                                    <p>Free Breakfast</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Service Intro Area End ##### -->

    <!-- ##### Core Features Start ##### -->
    <section class="core-features-area">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Single Core Feature Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-core-feature mb-100">
                        <div class="bg-thumbnail bg-img" style="background-image: url(../img/bg-img/poolarea.jpg);"></div>
                        <!-- Content -->
                        <div class="feature-content">
                            <i class='fas fa-swimming-pool'></i>
                            <h3>Indoor Pool</h3>
                            <p>Check out our state of the art indoor pool and spend some time relaxing. Open to all guests from 6:00AM until 11:00PM daily.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Core Feature Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-core-feature mb-100">
                        <div class="bg-thumbnail bg-img" style="background-image: url(../img/bg-img/fitness.jpg);"></div>
                        <!-- Content -->
                        <div class="feature-content">
                            <i class='fas fa-dumbbell'></i>
                            <h3>Fitness Centre</h3>
                            <p>Enjoy our complimentary fitness centre with a sauna, open to all guests 24 hours daily.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Core Feature Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-core-feature mb-100">
                        <div class="bg-thumbnail bg-img" style="background-image: url(../img/bg-img/diningarea.jpg);"></div>
                        <!-- Content -->
                        <div class="feature-content">
                            <i class='fas fa-utensils'></i>
                            <h3>Restaurant</h3>
                            <p>Dine in our hotel restaurant, The Toronto Eatery, where you can enjoy comfort foods and a cozy dining scene. Open 6:00AM until 10:00PM. Complimentary breakfast served daily.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Core Features End ##### -->

    <!-- ##### Services Area Start ##### -->
    <section class="services-area">
        <div class="container">
            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <i class='fas fa-business-time'></i>
                        <h4>Business Rooms</h4>
                        <p>Need a business/conference room for the day? We've got you covered! We offer multiple conference rooms for your office seminars and meetings.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="200ms">
                        <i class='fas fa-cocktail'></i>
                        <h4>Lounge Bar</h4>
                        <p>Enjoy a cocktail at our hotel bar and lounge area. Sit back with a drink and enjoy the modern atmosphere. Open 11:00AM until 1AM daily.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <i class='fas fa-parking'></i>
                        <h4>Parking</h4>
                        <p>We offer on-site parking in our lot for $15.00 CAD/night.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <i class='fas fa-shuttle-van'></i>
                        <h4>Airport Shuttle</h4>
                        <p>Enjoy a complimentary shuttle to the airport. Contact front desk to schedule a shuttle. Operates daily.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <i class='fas fa-building'></i>
                        <h4>Local Attractions</h4>
                        <p>Toronto Pearson Hotel is located near a GO train station for easy access into Downtown Toronto. Nearby attractions include Woodbine Racetrack, Toronto Congress Centre, and Wild Water Kingdom. </p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <i class='fas fa-credit-card'></i>
                        <h4>Added Extras</h4>
                        <p>Some additional ammenities for a fee are available: Room Service, additional room safe, valet service, extra sofa bed(s), and luggage hold.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Services Area End ##### -->

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