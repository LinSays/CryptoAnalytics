<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crypto_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tokens";
$cryptos = array();
if ($result = $conn->query($sql)) {
  while($row = $result->fetch_assoc()){
    array_push($cryptos, $row);
  }
}else{
  die("error");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Cryptocash is Professional Creative Template" />
<!-- SITE TITLE -->
<title>Crypto</title>
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
<!-- cryptocoins CSS -->
<link rel="stylesheet" href="assets/css/cryptocoins.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/spop.min.css">
<!-- Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<!-- Color CSS -->
<link id="layoutstyle" rel="stylesheet" href="assets/color/theme.css">
</head>

<body class="v_dark" data-spy="scroll" data-offset="110">

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
						          <a  class="nav-link page-scroll nav_item active" href="#home_section">Home</a>
                    </li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.2s"><a class="nav-link page-scroll nav_item" href="#about">About Us</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.3s"><a class="nav-link page-scroll nav_item" href="#goal">Our goal</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.4s"><a class="nav-link page-scroll nav_item" href="#whyus">Why Us</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.5s"><a class="nav-link page-scroll nav_item" href="#coin">Crypto Currencies</a></li>
                </ul>
                <ul class="navbar-nav nav_btn align-items-center">
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="2s"><a class="btn btn-default btn-radius nav_item" href="login.php">Admin</a></li>
                </ul>
			</div>
		</nav>
	</div>
</header>
<!-- END HEADER --> 

<!-- START SECTION BANNER -->
<section id="home_section" class="section_banner bg_black_dark" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/banner_bg2.png">
    <canvas id="banner_canvas" class="transparent_effect fixed"></canvas>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 order-lg-first">
              <p style="color:white">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 order-first">
                <div class="banner_image_right res_md_mb_50 res_xs_mb_30 animation" data-animation-delay="1.5s" data-animation="fadeInRight"> 
                    <img alt="banner_vector2" src="assets/images/banner_img2.png"> 
                </div>
          	</div>
        </div>
        </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION SERVICES -->
<section id="about" class="small_pb small_pt">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
				<div class="title_default_light title_border text-center">
              <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">About Us</h4>
              <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
        </div>
			</div>
    </div>
  </div>
</section>
<!-- END SECTION SERVICES --> 

<!-- START SECTION ABOUT US -->
<section id="goal" class="small_pt">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
            	<div class="text_md_center">
                	<img class="animation" data-animation="zoomIn" data-animation-delay="0.2s" src="assets/images/about_img2.png" alt="aboutimg2"/> 
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 res_md_mt_30 res_sm_mt_20">
                <div class="title_default_light title_border">
                  <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Our Goals</h4>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.8s">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT US --> 



<!-- START SECTION TEAM -->
<section id="whyus" class="section_team small_pt">
    <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 offset-lg-2">
            <div class="title_default_light title_border text-center">
              <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Why US?</h4>
              <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
            </div>
          </div>
        </div>
        
    </div>
</section>
<!-- END SECTION TEAM --> 
<!-- START SECTION TOKEN SALE -->
<section id="coin" class="section_token token_sale bg_light_dark" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/token_bg.png">
	<div class="container">
        <div class="row">
			    <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12">
              <div class="title_default_light title_border text-center">
                  <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Crypto Currencies</h4>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                  </p>
              </div>
			    </div>
        </div>
        <div class="row small_space justify-content-center">
          <div class="row col-lg-12 col-md-12">
              <?php for($i=0; $i<count($cryptos);$i++) { ?>
              <div class="col-lg-3 col-md-4 col-sm-6 res_md_mb_30 res_sm_mb_20" style=" margin-bottom:20px">
                <div class="bg_navy_blue_dark radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                  <div class="text-center"> 
                    <a href="#crypto_<?=$cryptos[$i]['id']?>" class="content-popup">
                      <img src="admin/upload/<?=$cryptos[$i]['logo']?>" height="150" alt="placeholder9"/>
                    </a>  
                  </div>
                  <div class="team_info text-center">
                      <h4><a href="#crypto_<?=$cryptos[$i]['id']?>" class="content-popup"><?=$cryptos[$i]['name']?></a></h4>
                      <p>$<?=$cryptos[$i]['price']?></p>
                  </div>
                  <div id="crypto_<?=$cryptos[$i]['id']?>" class="team_pop mfp-hide">
                    <div class="row m-0">
                      <div class="col-md-4 text-center"> 
                        <div class="team_img_wrap">
                            <img class="w-100" src="admin/upload/<?=$cryptos[$i]['logo']?>" height="330" alt="user_img-lg"/>
                            <div class="team_title"> 
                              <h4><?=$cryptos[$i]['name']?></h4>
                              <span>$<?=$cryptos[$i]['price']?></span>
                            </div> 
                        </div>
                      </div>
                      <div class="col-md-8">
                          <div class="pt-3">
                              <h4>About</h4>
                              <h5>Total Supply: <span><?=$cryptos[$i]['total_supply']?></span></h5>
                              <h5>Market Cap: <span><?=$cryptos[$i]['market_cap']?></span></h5>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
          </div>
        </div>
    </div>
</section>
<!-- END SECTION TOKEN SALE --> 

<!-- START SECTION FAQ -->
<!-- <section id="faq" class="bg_light_dark">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-8 col-md-12 offset-lg-2">
              <div class="title_default_light title_border text-center">
                <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Have Any Questions?</h4>
                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Frequently asked questions (FAQ) or Questions and Answers (Q&A), are listed questions and answers, all supposed to be commonly asked in some context</p>
              </div>
            </div>
        </div>
        <div class="row small_space">
        	<div class="col-lg-12 col-md-12">
            	<div class="tab_content">
                    <ul class="nav nav-pills tab_nav_s2 tab_color_white justify-content-center" id="pills-tab" role="tablist">
                          <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                            <a class="active" data-toggle="tab" href="#tab1">General</a>
                          </li>
                          <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                            <a data-toggle="tab" href="#tab2">Pre-ICO & ICC </a>
                          </li>
                          <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                            <a data-toggle="tab" href="#tab3">ICO Tokens</a>
                          </li>
                          <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                            <a data-toggle="tab" href="#tab4">Legal</a>
                          </li>
                    </ul>
                    <div class="tab-content half_tab">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        	<div class="row">
                            	<div class="col-md-6">
                                	<div id="accordion1" class="faq_content">
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                          <div class="card-header" id="headingOne">
                                            <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is cryptocurrency?</a> </h6>
                                          </div>
                                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                                            <div class="card-body"> The best cryptocurrency to buy is one we are willing to hold onto even if it goes down. For example, I believe in Steem enough that I am willing to hold it even if it goes down 99% and would start buying more of it if the price dropped.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                          <div class="card-header" id="headingTwo">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Which cryptocurrency is best to buy today?</a> </h6>
                                          </div>
                                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
                                            <div class="card-body"> The best cryptocurrency to buy is one we are willing to hold onto even if it goes down. For example, I believe in Steem enough that I am willing to hold it even if it goes down 99% and would start buying more of it if the price dropped.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                          <div class="card-header" id="headingThree">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How about day trading crypto?</a> </h6>
                                          </div>
                                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                                            <div class="card-body"> While profits are possible trading cryptocurrencies, so are losses. My first year involved me spending hundreds of hours trading Bitcoin with a result of losing over $5,000 with nothing to show for it. Simply trading digital currencies is very similar to gambling because no one really knows what is going to happen next although anyone can guess! While I was lucky to do nothing expect lose money when I started, the worst thing that can happen is to get lucky right away and get a big ego about what an amazing cryptocurrency trader we are. </div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                          <div class="card-header" id="headingFour">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">When to sell a cryptocurrency?</a> </h6>
                                          </div>
                                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                                            <div class="card-body"> Before Steem I was all in an another altcoin and really excited about it. When I first bought the price was low and made payments to me every week just for holding it. As I tried to participate in the community over the next several months, I was consistently met with a mix of excitement and hostility. When I began talking openly about this, the negative emotions won over in the community and in me. Originally I had invested and been happy to hold no matter what the price which quickly went up after I bought it. </div>
                                          </div>
                                        </div>
                          			</div>
                          		</div>
                                <div class="col-md-6">
                                	<div id="accordion2" class="faq_content">
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                          <div class="card-header" id="headingFive">
                                            <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">How does one acquire bitcoins?</a> </h6>
                                          </div>
                                          <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion2">
                                            <div class="card-body"> The best cryptocurrency to buy is one we are willing to hold onto even if it goes down. For example, I believe in Steem enough that I am willing to hold it even if it goes down 99% and would start buying more of it if the price dropped.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                          <div class="card-header" id="headingSix">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Can I make money with Bitcoin?</a> </h6>
                                          </div>
                                          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                            <div class="card-body"> You should never expect to get rich with Bitcoin or any emerging technology. It is always important to be wary of any thing that sounds too good to be true or disobeys basic </div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                          <div class="card-header" id="headingSeven">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">What happens when bitcoins are lost?</a> </h6>
                                          </div>
                                          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion2">
                                            <div class="card-body"> While profits are possible trading cryptocurrencies, so are losses. My first year involved me spending hundreds of hours trading Bitcoin with a result of losing over $5,000 with nothing to show for it. Simply trading digital currencies is very similar to gambling because no one really knows what is going to happen next although anyone can guess! While I was lucky to do nothing expect lose money when I started, the worst thing that can happen is to get lucky right away and get a big ego about what an amazing cryptocurrency trader we are. </div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                          <div class="card-header" id="headingEight">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Where is the invest my bitcoin?</a> </h6>
                                          </div>
                                          <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                            <div class="card-body"> Before Steem I was all in an another altcoin and really excited about it. When I first bought the price was low and made payments to me every week just for holding it. As I tried to participate in the community over the next several months, I was consistently met with a mix of excitement and hostility. When I began talking openly about this, the negative emotions won over in the community and in me. Originally I had invested and been happy to hold no matter what the price which quickly went up after I bought it. </div>
                                          </div>
                                        </div>
                          			</div>
                          		</div>
                          	</div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                        	<div class="row">
                            	<div class="col-md-6">
                                    <div id="accordion3" class="faq_content">
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                          <div class="card-header" id="headingNine">
                                            <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">How does one acquire bitcoins?</a> </h6>
                                          </div>
                                          <div id="collapseNine" class="collapse show" aria-labelledby="headingNine" data-parent="#accordion3">
                                            <div class="card-body"> While it may be possible to find individuals who wish to sell bitcoins in exchange for a credit card or PayPal payment, most exchanges do not allow funding via these payment methods. This is due to cases where someone buys bitcoins with PayPal, and then reverses their half of the transaction. This is commonly referred to as a chargeback.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                          <div class="card-header" id="headingTen">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">Can I make money with Bitcoin?</a> </h6>
                                          </div>
                                          <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion3">
                                            <div class="card-body"> You should never expect to get rich with Bitcoin or any emerging technology. It is always important to be wary of anything that sounds too good to be true or disobeys basic economic rules.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                          <div class="card-header" id="headingEleven">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">What happens when bitcoins are lost?</a> </h6>
                                          </div>
                                          <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion3">
                                            <div class="card-body">When a user loses his wallet, it has the effect of removing money out of circulation. Lost bitcoins still remain in the block chain just like any other bitcoins. However, lost bitcoins remain dormant forever because there is no way for anybody to find the private key(s) that would allow them to be spent again. Because of the law of supply and demand, when fewer bitcoins are available, the ones that are left will be in higher demand and increase in value to compensate.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                          <div class="card-header" id="headingTwelve">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">Who controls the Bitcoin network?</a> </h6>
                                          </div>
                                          <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion3">
                                            <div class="card-body">Nobody owns the Bitcoin network much like no one owns the technology behind email. Bitcoin is controlled by all Bitcoin users around the world. While developers are improving the software, they can't force a change in the Bitcoin protocol because all users are free to choose what software and version they use.</div>
                                          </div>
                                        </div>
                                  	</div>	
                                </div>
                                <div class="col-md-6">
                                	<div id="accordion4" class="faq_content">
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                          <div class="card-header" id="headingThirteen">
                                            <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">How does one acquire bitcoins?</a> </h6>
                                          </div>
                                          <div id="collapseThirteen" class="collapse show" aria-labelledby="headingThirteen" data-parent="#accordion4">
                                            <div class="card-body"> While it may be possible to find individuals who wish to sell bitcoins in exchange for a credit card or PayPal payment, most exchanges do not allow funding via these payment methods. This is due to cases where someone buys bitcoins with PayPal, and then reverses their half of the transaction. This is commonly referred to as a chargeback.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                          <div class="card-header" id="headingFourteen">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">Can I make money with Bitcoin?</a> </h6>
                                          </div>
                                          <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordion4">
                                            <div class="card-body"> You should never expect to get rich with Bitcoin or any emerging technology. It is always important to be wary of anything that sounds too good to be true or disobeys basic economic rules.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                          <div class="card-header" id="headingFifteen">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">What happens when bitcoins are lost?</a> </h6>
                                          </div>
                                          <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion4">
                                            <div class="card-body">When a user loses his wallet, it has the effect of removing money out of circulation. Lost bitcoins still remain in the block chain just like any other bitcoins. However, lost bitcoins remain dormant forever because there is no way for anybody to find the private key(s) that would allow them to be spent again. Because of the law of supply and demand, when fewer bitcoins are available, the ones that are left will be in higher demand and increase in value to compensate.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                          <div class="card-header" id="headingSixteen">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">Who controls the Bitcoin network?</a> </h6>
                                          </div>
                                          <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion4">
                                            <div class="card-body">Nobody owns the Bitcoin network much like no one owns the technology behind email. Bitcoin is controlled by all Bitcoin users around the world. While developers are improving the software, they can't force a change in the Bitcoin protocol because all users are free to choose what software and version they use.</div>
                                          </div>
                                        </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                        	<div class="row">
                            	<div class="col-md-6">
                                	<div id="accordion5" class="faq_content">
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                          <div class="card-header" id="headingSeventeen">
                                            <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">How are bitcoins created?</a> </h6>
                                          </div>
                                          <div id="collapseSeventeen" class="collapse show" aria-labelledby="headingSeventeen" data-parent="#accordion5">
                                            <div class="card-body"> New bitcoins are generated by a competitive and decentralized process called "mining". This process involves that individuals are rewarded by the network for their services. Bitcoin miners are processing transactions and securing the network using specialized hardware and are collecting new bitcoins in exchange.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                          <div class="card-header" id="headingEighteen">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">Why do bitcoins have value?</a> </h6>
                                          </div>
                                          <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordion5">
                                            <div class="card-body">Bitcoins have value because they are useful as a form of money. Bitcoin has the characteristics of money (durability, portability, fungibility, scarcity, divisibility, and recognizability) based on the properties of mathematics rather than relying on physical properties (like gold and silver) or trust in central authorities (like fiat currencies). In short, Bitcoin is backed by mathematics. </div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                          <div class="card-header" id="headingNineteen">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">What determines bitcoin's price?</a> </h6>
                                          </div>
                                          <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordion5">
                                            <div class="card-body"> The price of a bitcoin is determined by supply and demand. When demand for bitcoins increases, the price increases, and when demand falls, the price falls. There is only a limited number of bitcoins in circulation and new bitcoins are created at a predictable and decreasing rate</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                          <div class="card-header" id="headingTwenty">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">Can bitcoins become worthless?</a> </h6>
                                          </div>
                                          <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordion5">
                                            <div class="card-body"> Yes. History is littered with currencies that failed and are no longer used, such as the German Mark during the Weimar Republic and, more recently, the Zimbabwean dollar.</div>
                                          </div>
                                        </div>
                                  	</div>
                                </div>
                                <div class="col-md-6">
                                	<div id="accordion6" class="faq_content">
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                          <div class="card-header" id="headingNine">
                                            <h6 class="mb-0"> <a data-toggle="collapse" href="#collapse21" aria-expanded="true" aria-controls="collapse21">How are bitcoins created?</a> </h6>
                                          </div>
                                          <div id="collapse21" class="collapse show" aria-labelledby="heading21" data-parent="#accordion6">
                                            <div class="card-body"> New bitcoins are generated by a competitive and decentralized process called "mining". This process involves that individuals are rewarded by the network for their services. Bitcoin miners are processing transactions and securing the network using specialized hardware and are collecting new bitcoins in exchange.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                          <div class="card-header" id="heading22">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse22" aria-expanded="false" aria-controls="collapse22">Why do bitcoins have value?</a> </h6>
                                          </div>
                                          <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordion6">
                                            <div class="card-body">Bitcoins have value because they are useful as a form of money. Bitcoin has the characteristics of money (durability, portability, fungibility, scarcity, divisibility, and recognizability) based on the properties of mathematics rather than relying on physical properties (like gold and silver) or trust in central authorities (like fiat currencies). In short, Bitcoin is backed by mathematics. </div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                          <div class="card-header" id="heading23">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse23" aria-expanded="false" aria-controls="collapse23">What determines bitcoin's price?</a> </h6>
                                          </div>
                                          <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#accordion6">
                                            <div class="card-body"> The price of a bitcoin is determined by supply and demand. When demand for bitcoins increases, the price increases, and when demand falls, the price falls. There is only a limited number of bitcoins in circulation and new bitcoins are created at a predictable and decreasing rate</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                          <div class="card-header" id="heading24">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse24" aria-expanded="false" aria-controls="collapse24">Can bitcoins become worthless?</a> </h6>
                                          </div>
                                          <div id="collapse24" class="collapse" aria-labelledby="heading24" data-parent="#accordion6">
                                            <div class="card-body"> Yes. History is littered with currencies that failed and are no longer used, such as the German Mark during the Weimar Republic and, more recently, the Zimbabwean dollar.</div>
                                          </div>
                                        </div>
                                 	</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                        	<div class="row">
                                <div class="col-md-6">
                                	<div id="accordion7" class="faq_content">
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                          <div class="card-header" id="heading25">
                                            <h6 class="mb-0"> <a data-toggle="collapse" href="#collapse25" aria-expanded="true" aria-controls="collapse25">Is Bitcoin legal?</a> </h6>
                                          </div>
                                          <div id="collapse25" class="collapse show" aria-labelledby="heading25" data-parent="#accordion7">
                                            <div class="card-body">To the best of our knowledge, Bitcoin has not been made illegal by legislation in most jurisdictions. However, some jurisdictions (such as Argentina and Russia) severely restrict or ban foreign currencies. Other jurisdictions (such as Thailand) may limit the licensing of certain entities such as Bitcoin exchanges.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                          <div class="card-header" id="heading26">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse26" aria-expanded="false" aria-controls="collapse26">Is Bitcoin useful for illegal activities?</a> </h6>
                                          </div>
                                          <div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#accordion7">
                                            <div class="card-body">Bitcoin is money, and money has always been used both for legal and illegal purposes. Cash, credit cards and current banking systems widely surpass Bitcoin in terms of their use to finance crime. Bitcoin can bring significant innovation in payment systems and the benefits of such innovation are often considered to be far beyond their potential drawbacks.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                          <div class="card-header" id="heading27">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse27" aria-expanded="false" aria-controls="collapse27">Can Bitcoin be regulated?</a> </h6>
                                          </div>
                                          <div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#accordion7">
                                            <div class="card-body"> The Bitcoin protocol itself cannot be modified without the cooperation of nearly all its users, who choose what software they use. Attempting to assign special rights to a local authority in the rules of the global Bitcoin network is not a practical possibility.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                          <div class="card-header" id="heading28">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse28" aria-expanded="false" aria-controls="collapse28">What about Bitcoin and taxes?</a> </h6>
                                          </div>
                                          <div id="collapse28" class="collapse" aria-labelledby="heading28" data-parent="#accordion7">
                                            <div class="card-body"> Bitcoin is not a fiat currency with legal tender status in any jurisdiction, but often tax liability accrues regardless of the medium used. There is a wide variety of legislation in many different jurisdictions which could cause income, sales, payroll, capital gains, or some other form of tax liability to arise with Bitcoin.</div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	<div id="accordion8" class="faq_content">
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                          <div class="card-header" id="heading29">
                                            <h6 class="mb-0"> <a data-toggle="collapse" href="#collapse29" aria-expanded="true" aria-controls="collapse29">Is Bitcoin legal?</a> </h6>
                                          </div>
                                          <div id="collapse29" class="collapse show" aria-labelledby="heading29" data-parent="#accordion8">
                                            <div class="card-body">To the best of our knowledge, Bitcoin has not been made illegal by legislation in most jurisdictions. However, some jurisdictions (such as Argentina and Russia) severely restrict or ban foreign currencies. Other jurisdictions (such as Thailand) may limit the licensing of certain entities such as Bitcoin exchanges.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                          <div class="card-header" id="heading30">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse30" aria-expanded="false" aria-controls="collapse30">Is Bitcoin useful for illegal activities?</a> </h6>
                                          </div>
                                          <div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#accordion8">
                                            <div class="card-body">Bitcoin is money, and money has always been used both for legal and illegal purposes. Cash, credit cards and current banking systems widely surpass Bitcoin in terms of their use to finance crime. Bitcoin can bring significant innovation in payment systems and the benefits of such innovation are often considered to be far beyond their potential drawbacks.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                          <div class="card-header" id="heading31">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse31" aria-expanded="false" aria-controls="collapse31">Can Bitcoin be regulated?</a> </h6>
                                          </div>
                                          <div id="collapse31" class="collapse" aria-labelledby="heading31" data-parent="#accordion8">
                                            <div class="card-body"> The Bitcoin protocol itself cannot be modified without the cooperation of nearly all its users, who choose what software they use. Attempting to assign special rights to a local authority in the rules of the global Bitcoin network is not a practical possibility.</div>
                                          </div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                          <div class="card-header" id="heading32">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse32" aria-expanded="false" aria-controls="collapse32">What about Bitcoin and taxes?</a> </h6>
                                          </div>
                                          <div id="collapse32" class="collapse" aria-labelledby="heading32" data-parent="#accordion8">
                                            <div class="card-body"> Bitcoin is not a fiat currency with legal tender status in any jurisdiction, but often tax liability accrues regardless of the medium used. There is a wide variety of legislation in many different jurisdictions which could cause income, sales, payroll, capital gains, or some other form of tax liability to arise with Bitcoin.</div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END SECTION FAQ -->

<!-- START SECTION BLOG -->
<!-- <section class="small_pb">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-8 col-md-12 offset-lg-2">
              <div class="title_default_light title_border text-center">
                <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Latest News</h4>
              </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
            	<div class="blog_slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="blog_item animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="assets/images/placeholder1.jpg" alt="placeholder1">
                                </a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">Bitcoin Price Slightly Recovers as Ripple Market Cap</a></h6>
                                    <p>The crypto markets continued to build on April's gains this week, with alternative cryptocurrencies like nano, VeChain and bytecoin leading the way.</p>
                                    <a href="#" class="text-capitalize">Read More</a>
                                </div>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ion-android-time"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ion-android-chat"></i> 2 Comment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog_item animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="assets/images/placeholder1.jpg" alt="placeholder1">
                                </a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">The Year Cryptocurrencies Seized the Mainstream Spotlightp</a></h6>
                                    <p>The crypto markets continued to build on April's gains this week, with alternative cryptocurrencies like nano, VeChain and bytecoin leading the way.</p>
                                    <a href="#" class="text-capitalize">Read More</a>
                                </div>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ion-android-time"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ion-android-chat"></i> 2 Comment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog_item animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="assets/images/placeholder1.jpg" alt="placeholder1">
                                </a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">Bitcoin Facing Decisive Year in 2018, Says Legendary Investor</a></h6>
                                    <p>The crypto markets continued to build on April's gains this week, with alternative cryptocurrencies like nano, VeChain and bytecoin leading the way.</p>
                                    <a href="#" class="text-capitalize">Read More</a>
                                </div>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ion-android-time"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ion-android-chat"></i> 2 Comment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog_item animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="assets/images/placeholder1.jpg" alt="placeholder1">
                                </a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">Bitcoin Price Slightly Recovers as Ripple Market Cap</a></h6>
                                    <p>The crypto markets continued to build on April's gains this week, with alternative cryptocurrencies like nano, VeChain and bytecoin leading the way.</p>
                                    <a href="#" class="text-capitalize">Read More</a>
                                </div>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ion-android-time"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ion-android-chat"></i> 2 Comment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END SECTION BLOG -->

<!-- START CLIENTS SECTION -->
<!-- <section class="client_logo small_pt small_pb">
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
        		<div class="title_default_light title_border text-center">
        			<h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Our Clients</h4>
        		</div>
        	</div>
        </div>
        <div class="row align-items-center text-center overflow_hide small_space">
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.3s"> 
                	<img src="assets/images/client_logo_wt1.png" alt="client_logo_wt1" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.4s"> 
                	<img src="assets/images/client_logo_wt2.png" alt="client_logo_wt2" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.5s"> 
                	<img src="assets/images/client_logo_wt3.png" alt="client_logo_wt3" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.6s"> 
                	<img src="assets/images/client_logo_wt4.png" alt="client_logo_wt4" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.7s"> 
                	<img src="assets/images/client_logo_wt5.png" alt="client_logo_wt5" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.8s"> 
                	<img src="assets/images/client_logo_wt6.png" alt="client_logo_wt6" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.8s"> 
                	<img src="assets/images/client_logo_wt7.png" alt="client_logo_wt7" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.8s"> 
                	<img src="assets/images/client_logo_wt8.png" alt="client_logo_wt8" /> 
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END CLIENTS SECTION -->

<!-- START SECTION CONTACT -->
<section id="contact" class="contact_section small_pt">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-8 col-md-12 offset-lg-2">
              <div class="title_default_light title_border text-center">
                <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Get In Touch!</h4>
              </div>
            </div>
        </div>
        <div class="row align-items-center small_space">
            <div class="col-lg-4 col-md-6 offset-lg-2">
            	<div class="bg_light_dark  contact_box_s2 animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
                    <div class="contact_title">
                        <h5 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Contact With Us</h5>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Our office is located in a beautiful building and garden</p>
                    </div>
                    <ul class="list_none contact_info mt-margin">
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"> 
                        	<i class="ion-ios-location"></i>
                            <div class="contact_detail"> <span>Address</span>
                            	<p>22 International Division Via G.B. Pirelli</p>
                            </div>
                        </li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"> 
                        	<i class="ion-android-call"></i>
                            <div class="contact_detail"> <span>Phone</span>
                            	<p>+23 0123 4567</p>
                            </div>
                        </li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"> 
                        	<i class="ion-ios-email"></i>
                            <div class="contact_detail"> <span>Email-id</span>
                            	<p>Yourmail@gmail.com</p>
                            </div>
                        </li>
                  </ul>
                  <div class="contct_follow pt-2 pt-md-4">
                      <span class="text-uppercase animation" data-animation="fadeInUp" data-animation-delay="0.2s">Follow Us</span>
                      <ul class="list_none social_icon">
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="#"><i class=" fa fa-facebook"></i></a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"><a href="#"><i class=" fa fa-twitter"></i></a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#"><i class=" fa fa-google-plus"></i></a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.7s"><a href="#"><i class=" fa fa-pinterest"></i></a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.8s"><a href="#"><i class=" fa fa-linkedin"></i></a></li>
                     </ul>
                 </div>
              	</div>
            </div>
            <div class="col-lg-5 col-md-6">
            	<div class="pt-4 pt-md-0 animation" data-animation="fadeInRight" data-animation-delay="0.1s">
                    <form method="post" name="enq" class="field_form">
                    <div class="row">
                      <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <input type="text" required="required" placeholder="Enter Name *" id="first-name" class="form-control" name="name">
                      </div>
                      <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <input type="email" required="required" placeholder="Enter Email *" id="email" class="form-control" name="email">
                      </div>
                      <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <input type="text" required="required" placeholder="Enter Subject" id="subject" class="form-control" name="subject">
                      </div>
                      <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="1s">
                        <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="2"></textarea>
                      </div>
                      <div class="col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="1.2s">
                        <button type="submit" title="Submit Your Message!" class="btn btn-default btn-radius btn-block" id="submitButton" name="submit" value="Submit">Submit <i class="ion-ios-arrow-thin-right"></i></button>
                      </div>
                      <div class="col-md-12">
                        <div id="alert-msg" class="alert-msg text-center"></div>
                      </div>
                    </div>
                    </form>
                </div>
        	</div>
        </div>
	</div>
</section>
<!-- END SECTION CONTACT --> 

<!-- START FOOTER SECTION -->
<footer>
	<div class="top_footer bg_light_dark" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/footer_bg.png">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
                    <div class="footer_logo mb-3 animation" data-animation="fadeInUp" data-animation-delay="0.2s"> 
                        <a href="#home_section" class="page-scroll">
                            <img alt="logo" src="assets/images/footer_logo.png">
                        </a> 
                    </div>
                    <div class="footer_desc">
          				<p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Cryptocash stands firmly in support of financial freedom and the liberty that Bitcoin provides globally for anyone to voluntarily participate in a permissionless and decentralized network.</p>
                    </div>
         		</div>
                <div class="col-lg-3 col-md-6 res_md_mt_30 res_sm_mt_20">
                	<h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Quick Links</h4>
                    <ul class="footer_link list_arrow">
                    	<li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="#">Cryptocash ICO</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#">How It Works</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="#">Tokens</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"><a href="#">FAQ</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-6 res_md_mt_30 res_sm_mt_20">
                	<div class="newsletter_form">
                        <h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Newsletter</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">By subscribing to our mailing list you will always be update with the latest news from us.</p>
                        <form class="subscribe_form animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <input class="input-rounded" type="text" required placeholder="Enter Email Address"/>
                          <button type="submit" title="Subscribe" class="btn-info" name="submit" value="Submit"> Subscribe </button>
                        </form>
                    </div>
                </div>
      		</div>
    	</div>
    </div>
    <div class="bottom_footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="copyright">Copyright &copy; 2021 All Rights Reserved.</p>
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
<!-- modern_canvas js --> 
<script src="assets/js/modern_canvas.js"></script> 
<script src="assets/js/spop.min.js"></script> 
<!-- <script src="assets/js/notification.js"></script>  -->
<!-- scripts js --> 
<script src="assets/js/scripts.js"></script>
</body>
</html>