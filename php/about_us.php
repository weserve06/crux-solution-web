<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/css/about_us.css">
	<title>About Us</title>
</head>
<body>
<?php
   require 'header.php';
?>
<style type="text/css">
	.ul-header-color{
        color: #333 !important;
    }
    .ul-header:first-of-type li:before{
        color:#3333336b;
    }
</style>
<section class="techquestionpage">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<img src="/images/WeServe.png" class="image">
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="techtext noneshow aboutus_para1">
				<h2 class="font-mont">WeServe</h2>
				<span class="line"></span>
                <p class="font-nunito text-muted">Blood is the most precious gift that anyone can give to another person the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components red cells, platelets and plasma which can be used individually for patients with specific conditions.</p>
				<button class="button shadow">Check it out</button>
			</div>
			</div>
		</div>
	</div>
</section>
<section class="techquestionpage">
	<div class="container mb-5">
		<div class="row">
			<div class="col-md-6 col-lg-6 noneshow aboutus_para2">
				<div class="techtext1">
				<h2 class="font-mont">PDF Scanner</h2>
				<span class="line"></span>
				
				<p class="font-nunito text-muted">Blood is the most precious gift that anyone can give to another person the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components red cells.</p>
				<ul class="techul">
					<li class="font nuntio text-muted">blood is donted by a person.</li>
					<li class="font nuntio text-muted">blood is donted by a person having great day why <br/>so bha jsdgf khD abcd efgh ijkl mnop qrst.</li>
				</ul>
			</div>
				<button class="button shadow">Check it out</button>
			</div>
			<div class="col-md-6 col-lg-6">
				<img src="/images/PDF Scanner.png" class="image">
			</div>
		</div>
	</div>
</section>
<section class="techquestionpage">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<img src="/images/provenance.png" class="image">
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="techtext noneshow aboutus_para3">
				<h2 class="font-mont">Provenance Stories</h2>
				<span class="line"></span>
                <p class="font-nunito text-muted">Blood is the most precious gift that anyone can give to another person the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components red cells, platelets and plasma which can be used individually for patients with specific conditions.</p>
				<button class="button shadow">Check it out</button>
			</div>
			</div>
		</div>
	</div>
</section>
<section class="techquestionpage">
	<div class="container mb-5">
		<div class="row">
			<div class="col-md-6 col-lg-6 noneshow aboutus_para4">
				<div class="techtext1">
				<h2 class="font-mont">CRUX Superstore</h2>
				<span class="line"></span>
				
				<p class="font-nunito text-muted">Blood is the most precious gift that anyone can give to another person the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components red cells.</p>
				<ul class="techul">
					<li class="font nuntio text-muted">blood is donted by a person.</li>
					<li class="font nuntio text-muted">blood is donted by a person having great day why <br/>so bha jsdgf khD abcd efgh ijkl mnop qrst.</li>
				</ul>
			</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<img src="/images/superstore.png" class="image">
			</div>
		</div>
	</div>
</section>
<section class="techquestionpage" style="margin-bottom: 5%;">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<img src="/images/Quicksync.png" class="image">
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="techtext noneshow aboutus_para5">
				<h2 class="font-mont">QuickSync</h2>
				<span class="line"></span>
                <p class="font-nunito text-muted">Blood is the most precious gift that anyone can give to another person the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components red cells, platelets and plasma which can be used individually for patients with specific conditions.</p>
			</div>
			</div>
		</div>
	</div>
</section>
<?php
  require 'footer.php';
?>
</body>
<script type="text/javascript">
function myWaypoint(cname,aniname,per=100){
    $('.'+cname).waypoint(function(direction){
        $('.'+cname).addClass('animate__animated '+aniname);
    }, {
        offset: per+'%'
    });    
}

myWaypoint('aboutus_para1','animate__fadeInRight slomo-1x',60);
myWaypoint('aboutus_para2','animate__fadeInLeft slomo-1x',60);
myWaypoint('aboutus_para3','animate__fadeInRight slomo-1x',90);
myWaypoint('aboutus_para4','animate__fadeInLeft slomo-1x',60);
myWaypoint('aboutus_para5','animate__fadeInRight slomo-1x',60);



$('.ul-header-color').removeClass('header-a-tag-active');
$('.about-a-tag').addClass('header-a-tag-active');
</script>
</html>