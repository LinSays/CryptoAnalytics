<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Cryptocash is Professional Creative Template" />
<!-- SITE TITLE -->
<title>Crypto – Login</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="assets/css/animate.css" >
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="assets/css/font-awesome.min.css" >
<!-- ionicons CSS -->
<link rel="stylesheet" href="assets/css/ionicons.min.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<!-- Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<!-- Color CSS -->
<link id="layoutstyle" rel="stylesheet" href="assets/color/theme.css">
</head>

<body>

<!-- START LOADER -->
<div id="loader-wrapper">
    <div id="loading-center-absolute">
        <div class="object" id="object_four"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_one"></div>
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<!-- END LOADER --> 

<!-- START HEADER -->
<header class="header_wrap fixed-top">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg"> 
			<a class="navbar-brand page-scroll animation" href="#home_section" data-animation="fadeInDown" data-animation-delay="1s"> 
            	<img class="logo_light" src="assets/images/logo.png" alt="logo" /> 
                <img class="logo_dark" src="assets/images/logo_dark.png" alt="logo" /> 
            </a>
            <button class="navbar-toggler animation" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-animation="fadeInDown" data-animation-delay="1.1s"> 
                <span class="ion-android-menu"></span> 
            </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="dropdown animation" data-animation="fadeInDown" data-animation-delay="1.1s">
						<a  class="nav-link page-scroll nav_item" href="index.php#home_section">Home</a>
                    </li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.3s"><a class="nav-link page-scroll nav_item" href="index.php#about">About Us</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.4s"><a class="nav-link page-scroll nav_item" href="index.php#goal">Our goal</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.5s"><a class="nav-link page-scroll nav_item" href="index.php#whyus">Why Us</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.6s"><a class="nav-link page-scroll nav_item" href="index.php#coin">Coin Information</a></li>
                </ul>
			</div>
		</nav>
	</div>
</header>
<!-- END HEADER --> 

<!-- START SECTION BANNER -->
<section class=" blue_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/home_banner_bg.png"  style="padding-bottom:20px;padding-top:140px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner_text text-center">
                    <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">Login</h1>
                    <ul class="breadcrumb bg-transparent justify-content-center animation m-0 p-0" data-animation="fadeInUp" data-animation-delay="1.3s"> 
                        <li><a href="index.php">Home</a> </li>
                        <li><span>Login</span></li> 
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION LOGIN --> 
<section>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            	<div class="authorize_box">
                	<div class="title_default_dark title_border text-center">
                    	<h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Welcome</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Sign in to your account</p>
                    </div>
                    <div class="field_form authorize_form">
                    	<form>
                        	<div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                            	<input type="text" class="form-control" required="" placeholder="User Name" name="username" id="username">
                            </div>
                            <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                            	<input type="password" class="form-control" required="" placeholder="Password" name="password" id="password">
                            </div>
                            <div class="form-group col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                            	<button class="btn btn-default btn-radius" type="button" onclick="login()">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="divider small_divider"></div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION LOGIN --> 

<!-- START FOOTER SECTION -->
<footer>
	<div class="top_footer blue_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/footer_bg.png">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12">
                	<div class="newsletter_form">
                        <h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Newsletter</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">By subscribing to our mailing list you will always be update with the latest news from us.</p>
                        <form class="subscribe_form animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <input class="input-rounded" type="text" required placeholder="Enter Email Address"/>
                          <button type="submit" title="Subscribe" class="btn-info" name="submit" value="Submit"> Subscribe </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-8 res_md_mt_30 res_sm_mt_20">
                	<h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Quick Links</h4>
                    <ul class="footer_link half_link list_none">
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#">About US</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#">Our Goal</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="#">Why Us</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"><a href="#">Tokens</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-4 res_md_mt_30 res_sm_mt_20">
                	<h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Social</h4>
                    <ul class="footer_social list_none">
                    	<li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="#"><i class="ion-social-facebook"></i> Facebook</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#"><i class="ion-social-twitter"></i> Twitter</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="#"><i class="ion-social-googleplus"></i> Google Plus</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"><a href="#"><i class="ion-social-pinterest"></i> Pintrest</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#"><i class="ion-social-instagram-outline"></i> Instagram</a></li>
                    </ul>
                </div>
                
      		</div>
    	</div>
    </div>
    <div class="bottom_footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="copyright">Copyright &copy; 2018 All Rights Reserved.</p>
        </div>
        <div class="col-md-6">
          <ul class="list_none footer_menu">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
</footer>
<!-- END FOOTER SECTION --> 


<a href="#" class="scrollup btn-default"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="assets/js/jquery-3.6.0.min.js"></script> 
<!-- Latest compiled and minified Bootstrap --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="assets/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="assets/js/waypoints.min.js"></script> 
<!-- parallax js  --> 
<script src="assets/js/parallax.js"></script> 	
<!-- countdown js  --> 
<script src="assets/js/jquery.countdown.min.js"></script> 
<!-- particles min js  --> 
<script src="assets/js/particles.min.js"></script> 
<!-- scripts js --> 
<script src="assets/js/jquery.dd.min.js"></script> 
<!-- jquery.counterup.min js --> 
<script src="assets/js/jquery.counterup.min.js"></script> 
<!-- scripts js --> 
<script src="assets/js/scripts.js"></script>

<script>
    function login(){
        var username = $("#username").val();
        var password = $("#password").val();
        if(username == ""){
            alert("Input the username");
            return;
        }
        if(password == ""){
            alert("Input the password");
            return;
        }   
        $.ajax({
            url: 'controller.php',         
            method: 'post',                
            data: {username: username , password: password},     
            success: function(data){   
                if(data == true){
                    location.href="admin";
                }else{
                    alert("wrong password");
                }
            }
        });
    }
</script>
</body>
</html>