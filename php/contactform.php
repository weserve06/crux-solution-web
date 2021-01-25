<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/contactus.css">
	<link rel="stylesheet" type="text/css" href="/css/basic.css">


	<title>Contact Us</title>
</head>
<body>
	<?php
	require 'header.php';
	?>
	<style type="text/css">
		body
		{
			background-color: #f6f5f5;
		}
		.ul-header-color{
	        color: #333 !important;
	    }
	    .ul-header:first-of-type li:before{
	        color:#3333336b;
	    }
	</style>
<div class="container pt-5 mt-5">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="font-mont"><span style="color:#012b7d;">DON’T BE A STRANGER,</span><br/>
            JUST SAY HELLO.</h2>
		</div>
	</div>
	<div class="row contactpage mb-5">
		<div class="col-lg-6">
			<p class="font-nunito">Feel free to get in touch with us. We are always open to discussing new projects, creative ideas or opportunities & to be part of your visions.</p>
			<img src="/Svg/contact.svg" width="100%">
		</div>
		<div class="col-lg-6">
			<div class="inputform">
				<form>
					<input type="text" placeholder="Full Name" class="input" name="fullname" required="required"><br/>
	                <input type="text" placeholder="Phone number" class="input" name="phone" required="required"><br/>
					<input type="email" placeholder="Email" class="input" name="email" required><br/>
	                <select id="city" class="input" name="city">
					  <option value="City">City</option>
					  <option value="surat">Surat</option>
					  <option value="Ahmedabad">Ahmedabad</option>
					  <option value="Baroda">Baroda</option>
					  <option value="Jamnagar">Jamnagar</option>
					</select><br/>
					<textarea placeholder="Write a message for any query....." class="input" name="message"></textarea>
					<button class="button">Submit</button>
				</form>
		    </div>
		</div>
	</div>
</div>
<?php
 require 'footer.php';
?>
<script type="text/javascript">
	$('.ul-header-color').removeClass('header-a-tag-active');
	$('.contact-a-tag').addClass('header-a-tag-active');
</script>
</body>
</html>