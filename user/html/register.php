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
	<link rel="stylesheet" href="../css/register-css.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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

    
<div class="container">
        <div class="row centered-form">
        <div class="col-sm-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title" style="font-size: 20px;">Register to become a Pearson Member! <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-8">
			    					<div class="form-group">
									<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-sm-6 col-sm-6 col-md-8">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>
							
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-8">
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
									</div>
								</div>
							</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-8">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-8">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
	
	
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