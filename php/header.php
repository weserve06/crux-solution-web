<style>
    header{
        position:fixed;
    	display: -webkit-flex;
    	display: -moz-flex;
    	display: -ms-flex;
    	display: -o-flex;
    	display: flex;
    	-webkit-flex-direction: row;
    	-moz-flex-direction: row;
    	-ms-flex-direction: row;
    	-o-flex-direction: row;
    	flex-direction: row;
    	-ms-align-items: center;
    	align-items: center;
    	width:100vw;
        top: 0;
    	z-index: 100;
        padding: 10px 30px;
    	transition:.3s;
        background-color:transparent;
    }
    header.active{
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
        background-color:#ffffff;
    }
    header h2{
        margin-left: 35px;
    }
    header nav{
    	margin-left: auto;
    	margin-right: 33px;
    	transition: .5s;
        display: flex !important;
    	z-index: 300;
    }
    .menu-title{
    	font-family: 'Montserrat',sans-serif;
    	display: inline-block;
    	text-transform: uppercase;
    	font-size: 13px;
    	font-weight: 600;
    	padding: 19px;
        color:#6d6d6d;
        display:none;
        margin-left: 34px;
        margin-top:100px;
    }
    header ul{
    	margin: 0;
    	padding: 0;
    	display: flex;
    	-webkit-flex-direction: row;
    	-moz-flex-direction: row;
    	-ms-flex-direction: row;
    	-o-flex-direction: row;
    	flex-direction: row;
    	-ms-align-items: center;
    	align-items: center;
    	counter-reset: mycount;
    }
    header ul:last-of-type{
        display:none;
    }
    header ul li{
    	font-family: 'Montserrat',sans-serif;
    	display: inline-block;
    	cursor: pointer;
    	text-transform: uppercase;
    	font-size: 13px;
    	font-weight: 600;
    	padding: 14px;
    }
    header ul li a{
        color: #fff;
        text-decoration:none;
    }
    header ul li a:hover{
        color:#333!important;
        text-decoration:none;
    }
    header ul:first-of-type li:before{
    	counter-increment: mycount;
    	content:'0'counter(mycount);
    	margin-right: 6px;
    	color:#ffffff6b;
    }
    header.active .ul-header-color{
        color: #333;
    }
    header.active .ul-header:first-of-type li:before{
        color:#3333336b;
    }
    .hamburger{
    	position: absolute;
    	left: 20px;
    	top: 15px;
    	width:30px;
    	height:30px;
    	display:none;
    	align-items:center;
    	z-index:600;
    }
    .hamburger-inner, .hamburger-inner:after, .hamburger-inner:before{
    	background-color: #333;
    	width: 30px;
    	height:4px;
    	display:block;
    	border-radius:2px;
    	transition: .3s;
    }
    .hamburger-inner:after{
        content:' ';
        transform:translateY(6px);
    }
    .hamburger-inner:before{
        content:' ';
        transform:translateY(-10px);
    }
    .hamburger.is-active > .hamburger-inner{
        transform:rotate(45deg);
    }
    .hamburger.is-active > .hamburger-inner:after{
        transform:translateY(-4px) rotate(90deg);
    }
    .hamburger.is-active > .hamburger-inner:before{
        transform:translateY(0px) rotate(-90deg);
    }
    @media only screen and (max-width:930px){
    	.hamburger{
    		display: flex;
    	}
    	
    	header nav{
    		background-color: #fff;
    		position: fixed;
    		display: block;
    		width: 100vw;
    		height: 100vh;
    		top: 0;
    		left: 0;
    		margin: 0;
    		transform: translateX(-100%);
    	}
        .menu-title{
            padding-left: 0;
            display:block;
        }
    	header nav ul:first-of-type{
    		display: flex;
    		-webkit-flex-direction: column;
    		-moz-flex-direction: column;
    		-ms-flex-direction: column;
    		-o-flex-direction: column;
    		flex-direction: column;
    		align-items: unset;
    		margin-top: 5px;
    		margin-left: 20px;
    	}
    	header nav ul:last-of-type{
    	    display: flex;
    	    transform: translate(50%,0%) rotate(-90deg);
    	    position: absolute;
    	    right: 23px;
    	}
    	nav.showing{
    		transform: translateX(0);
    	}
    }

    .header-a-tag-active{
        position: relative;
    }
    .header-a-tag-active:before{
        content: '';
        position: absolute;
        height: 3px;
        border-radius: 20px;
        width: 100%;
        background-color: #012b7d;
        top: 100%;
        margin-top: 3px;
    }
</style>
<header>
		<a href="/software_development/">
            <h2 class="font-mont" style="display: inline-block;">CRUX</h2>      
        </a>
		<nav>
		    <span class="menu-title">menu</span>
			<ul class="ul-header">
				<li><a class="ul-header-color header-a-tag-active" href="/software_development/">home</a></li>
				<li><a class="ul-header-color about-a-tag" href="about">Our Works</a></li>
				<li><a class="ul-header-color contact-a-tag" href="contact">Get a Quote</a></li>
			</ul>
			<ul>
			    <li>facebook</li>
			    <li>instagram</li>
			    <li>twitter</li>
			    <li>behance</li>
			</ul>
		</nav>
		<div class="hamburger"><div class="hamburger-inner"></div></div>
</header>
<script>
	$('.hamburger').click(function(){
		if($(this).hasClass('is-active')){
			$(this).removeClass('is-active');
			$('nav').removeClass('showing');
			$('header').css('z-index','100');
		}else{
			$(this).addClass('is-active');
			$('nav').addClass('showing');
			$('header').css('z-index','500');
		}
	});
	$(window).scroll(function(){
	    if($(this).scrollTop()==0){
	        $('header').removeClass('active');
	    }else{
	        $('header').addClass('active');
	    }
	});
	$('header nav ul:last-of-type').css('bottom',$('header nav ul:last-of-type').width()/2+50+'px');
</script>