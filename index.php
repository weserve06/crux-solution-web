<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<title>Crux Software</title>
</head>
<body>
<?php
	require 'php/header.php';
?>
<style>
	.MainPage{
		position: relative;
	}
	.big_circle
	{
		width:1000px;
		height:1000px;
		left:46%;
		top:-50%;
		border-radius:50%;
		background-image: linear-gradient(to right,#012b7d,#64a4f4b8);
		position: absolute;

	} 
	@media screen and (max-width: 992px){
		.big_circle
		{
			display: none;
		}
	}

	.ServicesPage{
		background: #f7f7f7;
		z-index: 1;
		position: relative;
	}

</style>
<section class="MainPage">
	<div class="big_circle"></div>
	<div class="container pt-5">
		<div class="row">
			<div class="col-lg-5 Mainrow">
				<h2 class="font-mont">Your</h2>
				<h1 class="font-mont bold-title">IT  Hello Development<br/>
				Partner</h1>
				<p class="font-nunito1 text-muted para1">Crux solutions is highly enthusiast in creating design and development solutions for startups, SMBs, and enterprises.Development solutions for startups, SMBs, and enterprises.</p>
			    <button class="button"><a href="php/contactform.php" style="  list-style-type: none;color:white;text-decoration: none;">Get a quote</a></button>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-6 d-flex justify-content-center">
				<img src="images/home.png" width="100%">
			</div>
		</div>
	</div>
</section>
<style type="text/css">
	.flip-card__number{
		position: absolute;
		color: #fff;
		z-index: 10;
	}
	.stiker2{
		width: 100%;
		height: auto;
		position: absolute;
		left: 100%;
		transform: translateX(-100%);
	}
	.flip-card_icon
	{
		width:40px;
	}
	.flip-card__front img{
		margin-bottom: 15px;
	}
	.flip-card__title{
		line-height: 25px;
	}
	.flip-card__back .flip-card__title{
		line-height: 25px;
	}
</style>
<section class="ServicesPage">
	<div class="container pl-1 pr-1">
		<div class="row">
			<div class="col-lg-12 mb-5">
				<h1 class="bold-title font-mont">
						Our Services
				</h1>
				<span class="line" style="width:18%;"></span>
			</div>
		</div>
		<div class="row mt-5">
			<div class="flips__container col-md-12">
			    <div class="flip-card">
			      <div class="flip-card__inner">
			         <div class="flip-card__front">
			            <div class="flip-card__icon" style="width:40px;">
			               <img src="Svg/web-programming.svg" width="100%">
			            </div>
			            <span class="flip-card__title">Web<br/>Development</span>
			            <div class="flip-card__box flip-card__box--right">
			               <div class="flip-card__number">01</div>
			               <div class="flip-card__image">
		            			<img class="stiker2" src="Svg/stiker2.svg">
			               </div>
			            </div>
			         </div>
			         <div class="flip-card__back">
			            <div class="flip-card__back-top">
			               <div class="flip-card__icon flip-card__icon--colored">
			               <img src="Svg/web-programming.svg" width="100%">
			               </div>
			               <h3 class="flip-card__title">Web <br>Development</h3>
			            </div>
			            <div class="flip-card__box flip-card__box--left">
			               <div class="flip-card__number">01</div>
			               <div class="flip-card__image flip-card__image--back">
			               	    <img class="stiker2" src="Svg/stiker2.svg">
			               </div>
			            </div>
			            <div class="flip-card__description">We take care of your product on the development stage. Our IT outsourcing company creates custom web dev solutions for startups and enterprises. We listen to your ideas carefully and deliver the exact result.</div>
			         </div>
			      </div>
			   	</div>
			   	<div class="flip-card">
			      <div class="flip-card__inner">
			         <div class="flip-card__front">
			            <div class="flip-card__icon" style="width:40px;">
			               <img src="Svg/smartphone.svg" width="100%">         
			            </div>
			            <span class="flip-card__title">Mobile <br>Development</span>
			            <div class="flip-card__box flip-card__box--right">
			               <div class="flip-card__number">02</div>
			               <div class="flip-card__image">
			               	    <img class="stiker2" src="Svg/stiker2.svg">
			               </div>
			            </div>
			         </div>
			         <div class="flip-card__back">
			            <div class="flip-card__back-top">
			               <div class="flip-card__icon flip-card__icon--colored">
			               <img src="Svg/smartphone.svg" width="100%">         
			               </div>
			               <h3 class="flip-card__title">Mobile <br>Development</h3>
			            </div>
			            <div class="flip-card__box flip-card__box--left">
			               <div class="flip-card__number">02</div>
			               <div class="flip-card__image flip-card__image--back">
			                  <!-- no svg -->
			               </div>
			            </div>
			            <div class="flip-card__description">Convert more clients by reaching out to your target audience via mobile apps. Our software development company will help you with building iOS, Android and cross-platform mobile development solutions.</div>
			         </div>
			      </div>
			   </div>
			   <div class="flip-card">
			      <div class="flip-card__inner">
			         <div class="flip-card__front">
			            <div class="flip-card__icon" style="width:40px;">
			                  <img src="Svg/quality-assurance.svg" width="100%">
			            </div>
			            <span class="flip-card__title">Quality <br>Assurance</span>
			            <div class="flip-card__box flip-card__box--right">
			               <div class="flip-card__number">03</div>
			               <div class="flip-card__image">	
			               	    <img class="stiker2" src="Svg/stiker2.svg">

			               </div>
			            </div>
			         </div>
			         <div class="flip-card__back">
			            <div class="flip-card__back-top">
			               <div class="flip-card__icon flip-card__icon--colored">
			                  <img src="Svg/quality-assurance.svg" style="width:40px;">
			   	            </div>
			               <h3 class="flip-card__title">Quality <br>Assurance</h3>
			            </div>
			            <div class="flip-card__box flip-card__box--left">
			               <div class="flip-card__number">03</div>
			               <div class="flip-card__image flip-card__image--back">
			                 <!-- no img -->
			               </div>
			            </div>
			            <div class="flip-card__description">Quality is our priority. We have a team of QA engineers who will check if your software is bug-free right in the course of development. Alternatively, they will test your ready app before release.</div>
			         </div>
			      </div>
			   </div>
			   <div class="flip-card">
			      <div class="flip-card__inner">
			         <div class="flip-card__front">
			            <div class="flip-card__icon">
			               <img src="Svg/24h.svg" style="width:40px;">
			            </div>
			            <span class="flip-card__title">WhiteLabel<br>Services</span>
			            <div class="flip-card__box flip-card__box--right">
			               <div class="flip-card__number">04</div>
			               <div class="flip-card__image">
			               	    <img class="stiker2" src="Svg/stiker2.svg">
			                	
			                </div>
			            </div>
			         </div>
			         <div class="flip-card__back">
			            <div class="flip-card__back-top">
			               <div class="flip-card__icon flip-card__icon--colored">
			               <img src="Svg/24h.svg" style="width:40px;">
			               </div>
			               <h3 class="flip-card__title">WhiteLabel<br>Services</h3>
			            </div>
			            <div class="flip-card__box flip-card__box--left">
			               <div class="flip-card__number">05</div>
			               <div class="flip-card__image flip-card__image--back">
			                  <!-- no img -->
			               </div>
			            </div>
			            <div class="flip-card__description">Ensure the risk-free and cost-effective release of your application. Our DevOps specialists will secure a smooth and continuous deployment process and provide ongoing support of your software.</div>
			         </div>
			      </div>
			   </div>

			   <!-- cut here -->
			   <!-- cut here -->
			</div>
		</div>
	</div>
</section>
<section class="ProcessPage">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 d-flex justify-content-center align-items-center">
				<div class="col-lg-12 innerprocess">
						<h1 class="bold-title font-mont">
						Our Process
					</h1>
					<span class="line"></span><br/>

					<div pc="15" tb="15" mb="15" style="height:5px;"></div>
					<h4 class="font-mont1">We are here to support you</h4>
					<div pc="15" tb="15" mb="15" style="height:15px;"></div>
						<p class="font-nunito1 text-muted">Even we hate delays, we follow transparent workflow and kick off development within week.Even we hate delays, we follow transparent workflow and kick off development within week.</p>
						<p class="font-nunito1 text-muted">Even we hate delays, we follow transparent workflow and kick off development within week.Even we hate delays, we follow transparent workflow and kick off development within week.</p>
					</div>
			</div>
			<div class="col-lg-6">
					
				<img src="Svg/progress1.svg" class="processimage">
			    
		    </div>
		</div>
	<div class="process-wrapper">
	<div id="progress-bar-container">
		<ul>
			<li class="step step01 active">
				<span class="active">2 days</span>
				<div class="step-inner font-mont">Tell your<br/> requirements</div>
			</li>
			<li class="step step02">
				<span>3 days</span>
				<div class="step-inner font-mont">Get Estimation</div></li>
			<li class="step step03">
				<span>1 Week</span>
				<div class="step-inner font-mont">Final Kick-OFF<br/> Documentation </div></li>
			<li class="step step04">
				<span>2 Months</span>
				<div class="step-inner font-mont">Development</div></li>
			<li class="step step05">
				<!-- <span>hello world4</span> -->
				<div class="step-inner font-mont">Product Release</div></li>
		</ul>
		
		<div id="line">
			<div id="line-progress"></div>
		</div>
	</div>


	<div id="progress-content-section">
	<!-- 	<div class="section-content discovery active">
			<h2>HOME SECTION</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
		</div> -->
		
		<!-- <div class="section-content strategy">
			<h2>GALLERY SECTION</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
		</div> -->
		
		<!-- <div class="section-content creative">
			<h2>Creative CREATIONS</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
		</div> -->
		
		<!-- <div class="section-content production">
			<h2>TESTIMONIALS NOW</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
		</div> -->
		
		<!-- <div class="section-content analysis">
			<h2>OUR LOCATIONS</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
		</div> -->
	</div>
	</div>
</div>
</section>
<section class="benefitsPage">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-12 innerprocess">
					<center><h1 class="font-mont bold-title" style="margin-bottom: 25px;">Which Benefits will you get?</h1>
					<span class="line"></span>
					<h3 class="font-nunito1 text-muted" style="font-size:30px;padding-top: 30px;">"We are here to help you"</h3></center>
	        </div>
		</div>
		<div class="row">
			<div class="col-lg-6 outerdiv">
					<style type="text/css">
						.innerdiv{
							position: relative;
							height: 100%;
						}
						.stiker{
							width: 50px;
							position: absolute;
							top: 0;
							left: 0;
							transform: translateY(-10px);
						}
					</style>
					<div class="innerdiv shadow">
		                <img class="stiker" src="Svg/stiker1.svg" >
						<div style="padding-left:10px; ">
							<h5 class="font-mont1">Personal Approach</h5>
			                <p class="font-nunito1 text-muted para2">
			                Each project is unique. That’s why we study your business, analyze your needs and make a unique commercial offer based on our research. We do not strive for selling outsourcing services, we seek long-lasting cooperation that’s why we suggest you a few ways to get your software done and you are free to choose the one that fits you best.</p>
			            </div>
	               </div>
			</div>
			<div class="col-lg-6 outerdiv">
				<div class="innerdiv shadow">
		            <img class="stiker" src="Svg/stiker1.svg">
		            <div style="padding-left:10px; ">
						<h5 class="font-mont1">Account Management</h5>
		                <p class="font-nunito1 text-muted para2">Devox Software assigns a customer success manager to each project to help you work with your remote developers. We encourage honest communication between the parties because transparency is our top priority. This is how we establish efficient liaison with our customers and work on strategic long-term relations together.</p>
	                </div>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 outerdiv">
				<div class="innerdiv shadow">
		            <img class="stiker" src="Svg/stiker1.svg" >
					<div style="padding-left:10px; ">
						<h5 class="font-mont" style="font-weight:500">Effective Communication</h5>
		                <p class="font-nunito1 text-muted para2">Each project is unique. That’s why we study your business, analyze your needs and make a unique commercial offer based on our research. We do not strive for selling outsourcing services, we seek long-lasting cooperation that’s why we suggest you a few ways to get your software done and you are free to choose the one that fits you best.</p>
		            </div>
	            </div>
			</div>
			<div class="col-lg-6 outerdiv">
				<div class="innerdiv shadow">
		            <img class="stiker" src="Svg/stiker1.svg">
					<div style="padding-left:10px; ">
						<h5 class="font-mont" style="font-weight:500">Convenient Outsourcing Destination</h5>
	        	        <p class="font-nunito1 text-muted para2">There is no mediator between you and your remote team members - you can communicate directly with your employees be it projectbased outsourcing or a custom-recruited dedicated team. Alternatively, you can fully rely on our project managers or hire a dedicated PM who will distribute and assign tasks to your Ukrainian programmers.</p>
	        	    </div>
                </div>
			</div>
		</div>
	</div>
</section>
<section class="Aboutsoftware">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="font-mont1" style="padding-left:5px;">About</h2>
		       <h1 class="bold-title font-mont">
						Crux Solutions
					</h1>
			   <span class="line" style="width:25%;"></span><br/>
	        </div>
	        <div class="row">
	        	<div class="col-lg-6">
	        		<img src="images/19963.png" width="100%">
	        	</div>
	        	<div class="col-lg-6 innerabout">
	        		<div class="aboutus">
		        		<p class="font-nunito1 text-muted">Crux Solutions is an Software development company from India. Our key value is our co-operation. We collab with our client and take project as our own making the best out of the solution that is required.
	                    <br/><br/>
						The benefit you get with us is facilitation. Digital transformation has never been easier – all you need to do is just tell us your requirements. We will advise you on the fitting solution, resources, and timeframes for your business.
                         <br/><br/>
                         Our main asset are our client. to run your project from initial estimation to release.
					  </p>
					  <button class="button"><a href="about_us.html" style="  list-style-type: none;color:white;text-decoration: none;">Our Works</a></button>
				   </div>
	        	</div>
	        </div>
        </div>
	</div>
</section>
<?php
  require 'php/footer.php';
?>
</body>
<script>
    
    $(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "3%");
	$('#progress-bar-container li span').removeClass('active');
	$('span',this).addClass('active');
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "25%");
	$('#progress-bar-container li span').removeClass('active');
	$('span',this).addClass('active');
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "50%");
	$(".creative").addClass("active").siblings().removeClass("active");
	$('#progress-bar-container li span').removeClass('active');
	$('span',this).addClass('active');
});

$(".step04").click( function() {
	$("#line-progress").css("width", "75%");
	$(".production").addClass("active").siblings().removeClass("active");
	$('#progress-bar-container li span').removeClass('active');
	$('span',this).addClass('active');
});

$(".step05").click( function() {
	$("#line-progress").css("width", "100%");
	$(".analysis").addClass("active").siblings().removeClass("active");
	$('#progress-bar-container li span').removeClass('active');
	$('span',this).addClass('active');
});

 
    </script>
</html>