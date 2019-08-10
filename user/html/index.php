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
    <!--<link rel="icon" href="img/core-img/favicon.ico">-->
	<link rel="icon" href="../img/core-img/titlelogo.png">

    <!-- Core Stylesheet -->
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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
				<!--<div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>-->
                <div class="slide-img bg-img" style="background-image: url(../img/bg-img/exterior2.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Toronto Pearson Hotel</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Toronto Pearson Hotel is located at the Airport Corporate Centre, just steps away from Toronto Pearson Airport.
								Whether you are looking to book a conference room for work or are simply looking for a comfortable room near the airport for an exciting trip, Toronto Pearson Hotel is ready and waiting to make your stay a great one.</p>
                                <a href="about-us.php" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
								
							</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(../img/bg-img/roomarea.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Enjoy your Stay</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Make the most of your Toronto trip in our modern and exceptional rooms. We offer various Guest Rooms, Corner Rooms, and Suites.</p>
                                <a href="rooms.php" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(../img/bg-img/loungearea.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Make new Memories</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Check out our hotel restaurant The Toronto Eatery and grab some cocktails at our hotel bar and lounge. Relax by our state of the art pool or spend some time at our fitness room. Plenty of activities for everyone to enjoy.</p>
                                <a href="services.php" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Book Now Area Start ##### -->
    <div class="book-now-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="book-now-form">
                        <form action="booking.php" method="post">
						<!--<form action="#">-->
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
								<option> 1 </option>
								<option> 2 </option>
								<option> 3 </option>
								<option> 4 </option>
								<option> 5 </option>
								<option> 6 </option>
								<option> 7 </option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select4">Children</label>
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
                    <div class="about-text text-center mb-100">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2>Welcome to Toronto Pearson Hotel</h2>
                        </div>
                        <p>A modern hotel located in an ideal location just minutes away from Toronto Pearson International Airport. We have meeting rooms, an indoor pool, fitness area, and an all-day restaurant.</p>
                        <?php 
						$hash = password_hash("test", PASSWORD_DEFAULT);
						echo password_verify("test", $hash);		//"test" = form value, $hash = database value
					    ?>
						<div class="about-key-text">
						    <h6><span class="fa fa-check"></span>Complimentary Wi-Fi</h6>
							<h6><span class="fa fa-check"></span>Free Shuttle Service</h6>
                            <h6><span class="fa fa-check"></span>Complimentary Breakfast</h6>
                            <h6><span class="fa fa-check"></span>Wheelchair Accessible</h6>
                        </div>
                        <a href="#" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail homepage mb-100">
                        <!-- First Img -->
                        <div class="first-img wow fadeInUp" data-wow-delay="100ms">
                            <img src="../img/bg-img/exterior3.jpg" alt="">
                        </div>
                        <!-- Second Img -->
                        <div class="second-img wow fadeInUp" data-wow-delay="300ms">
                            <img src="../img/bg-img/lobby.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Pool Area Start ##### -->
    <section class="pool-area section-padding-100 bg-img bg-fixed" style="background-image: url(../img/bg-img/poolarea.jpg);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-7">
                    <div class="pool-content text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="section-heading text-center white">
                            <div class="line-"></div>
                            <h2>Relax by the Pool</h2>
                            <p>Enjoy our state of the art pool, open to all hotel guests through the hours of 6:00AM - 11:00PM.</p>
                        </div>

                        <!--<div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-cocktail-1"></i>
                                    <p>Pool Beachbar</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-swimming-pool"></i>
                                    <p>Infinity Pool</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-beach"></i>
                                    <p>Sunbeds</p>
                                </div>
                            </div>
                        </div>-->
                        <!-- Button -->
                        <a href="#" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Pool Area End ##### -->

    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Choose a room</h2>
                        <p>Make the most of your time in Toronto by staying in one of our exceptional rooms.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(../img/room-img/GuestRoom/king/guestroom-king2.jpg);"></div>
                        <!-- Price -->
                        <p class="price-from">From $100/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Guest Room</h4>
                            <p>Enjoy our modern guest rooms, consisting of either a King bed or two double beds.</p>
                        </div>
                        <!-- Book Room -->
                        <a href="booking.php" class="book-room-btn btn palatin-btn">Book Room</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(../img/room-img/CornerRoom/double/corner-double.jpg);"></div>
                        <!-- Price -->
                        <p class="price-from">From $130/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Corner Room</h4>
                            <p>Our corner rooms are larger guest rooms with either a King bed or two double beds.</p>
                        </div>
                        <!-- Book Room -->
                        <a href="booking.php" class="book-room-btn btn palatin-btn">Book Room</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="500ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(../img/room-img/Suite/king/suite-king2.jpg);"></div>
                        <!-- Price -->
                        <p class="price-from">From $180/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Suite</h4>
                            <p>Our modern Suites consist of either a 1 bedroom King Suite or a 2 Room Suite with a King bed.</p>
                        </div>
                        <!-- Book Room -->
                        <a href="booking.php" class="book-room-btn btn palatin-btn">Book Room</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Rooms Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area d-flex flex-wrap align-items-center">
        <div class="home-map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.5572978037067!2d-79.60560308504161!3d43.65737817912103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3855a45b2455%3A0xd9883da67bdcb33c!2sToronto+Airport+Corporate+Centre!5e0!3m2!1sen!2sca!4v1564776722616!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Info -->
        <div class="contact-info">
            <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                <div class="line-"></div>
                <h2>Hotel Information</h2>
                <p><b>Check In:</b> 3:00pm &nbsp &nbsp <b>Check Out:</b> 12:00pm</p>
				<p><b>Smoking:</b> Non-Smoking </p>
				<p><b>Parking:</b> $15.00 CAD</p>
				<p><b>Pets:</b> No pets allowed</p>
            </div>
            <h4 class="wow fadeInUp" data-wow-delay="300ms">2425 Matheson Blvd E, Mississauga, ON L4W 5K4</h4>
            <h5 class="wow fadeInUp" data-wow-delay="400ms">+1(905)-361-6400</h5>
            <h5 class="wow fadeInUp" data-wow-delay="500ms">tpearson@gmail.com</h5>
            <!-- Social Info -->
            <div class="social-info mt-50 wow fadeInUp" data-wow-delay="600ms">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

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