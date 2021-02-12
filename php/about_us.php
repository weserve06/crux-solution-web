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
                <p class="font-nunito text-muted">WeServe brings up a global platform for volunteers and needy people equipped with technology. WeServe enables one to act smartly amid Covid-19 pandemic. It comprises of features that would help people to cope up during calamities. It is a concept of bringing support to any person who is not in position to help themselves.</p>
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
				<h2 class="font-mont">Span</h2>
				<span class="line"></span>
				
				<p class="font-nunito text-muted">The client, a global leader in machinery creation services was looking for an app with employee management system to expand their business processes digitally, while imposing ease of workflow within their management too. We had to balance between adapting the legacy system and imposing the advance logic to make the process easier and efficient.</p>
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
                <p class="font-nunito text-muted">Provenance Stories is a website to showcase all the pioneers who laid the foundation of our very own IT industry we see today. It incorporates algorithms like Round Robin so that all the stories get equal opportunity to be showcased in the highlight in front of the users. Provenance Stories is developed using Django and it was developed with core motive of displaying information aesthetically.</p>
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
				<h2 class="font-mont">Infinity Design</h2>
				<span class="line"></span>
				
				<p class="font-nunito text-muted">Getting a chance to work with a client who has a clear vision is one in a million. Our client wanted to fill the gap that he believed existed in the market of embroidery. He also believed that a platform like this would really do well as there weren’t many other close competitors. Keeping this authenticity in mind and staying true to our client’s vision, we successfully finished Infinity Design.</p>
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
                <p class="font-nunito text-muted">Quick sync will be an in-house application that solves the very problem we have faced in filling up different forms i.e., re-seized photographs and static details that are mandatory in government or private examinations and stay common for all, Quick sync will solve this problem by creating a secure cloud storage and end-to-end AES encryption, user information can be directly fed to the form via browser plugin or filling the form in application itself easing up the process.</p>
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