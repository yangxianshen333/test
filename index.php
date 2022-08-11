<!doctype html>
<html lang="en">
	<head>
	<body>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta data-n-head="1" name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="theme-color" content="#111111">
	
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="shortcut icon" href="img/favicon.ico">
	<title>Company name</title>
	
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/loading.css">
	<link rel="stylesheet" href="css/popscreen.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
	<div class="loadingdiv">
		 <div class="blob-center">
		  <div class="blob-center"></div>
		  <div class="blob"></div>
		  <div class="blob"></div>
		  <div class="blob"></div>
		  <div class="blob"></div>
		  <div class="blob"></div>
		  <div class="blob"></div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
		  <defs>
			<filter id="goo">
			  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
			  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
			  <feBlend in="SourceGraphic" in2="goo" />
			</filter>
		  </defs>
		</svg>
	</div>
	<?php //desktop?>
	<?php include('navbar.php');?>
	<section class="Mainslidedesktop">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class='clickable pop-in' src="images/main4da.jpg"></div>
                    <div class="swiper-slide"><img src="images/main4d.jpg"></div>
                    <div class="swiper-slide"><img src="images/main3d.jpg"></div>
                    <div class="swiper-slide"><img src="images/main5d.jpg"></div>
                </div>
                
                <div class="swiper-pagination"></div>
            </div>
    </section>
	<section class='desk_gif'>
	<img src='images/instant.gif'>
	</section>
	<section class='widgetdesktop'>
		<div class='widgetcontain'>
			<div class='widgetbox'>
			
				<div class='widgetleft'>
					<img src='images/l2.jpg' style='width:100%;'>
				</div>
				
				<div class='widgetright'>
					<section class="promotion">
						<div class="swiper mySwiper2" style=' border-radius:20px;'>
						<div class="swiper-wrapper">
							<div class="swiper-slide"><img class='clickable pop-in' src="images/b1.jpg"></div>
							<div class="swiper-slide"><img src="images/b9.jpg"></div>
						</div>
						</div>
					</section>
					<section class="promotion" style='padding-top:20px;'>
						<img class='clickable pop-in' src="images/b3.jpg"style='max-height:210px; min-height:210px; width:100%; border-radius:20px; object-fit:cover;'>
					</section>
				</div>
			</div>
		</div>
	</section>
	
	<section class='hotgamedesktop'>
		<div class='hotgamedesktopcontain'>
			<div class='hotgametitle'>
				HOT GAMES
				<div class='moregame'>
				<a href='gamepage.php'><button id='join' class='joinbtn'>MORE GAMES</button></a>
				</div>
			</div>
			<div class='hotgamebox'>
				<div class='hotgameitem'>
					<img class='clickable pop-in' src="images/d3dd.jpg">
					<img class='clickable pop-in' src="images/d4dd.jpg">
					<img class='clickable pop-in' src="images/d2dd.jpg">
					<img class='clickable pop-in' src="images/d6dd.jpg">
					<img class='clickable pop-in' src="images/d7dd.jpg">
					<img class='clickable pop-in' src="images/d5dd.jpg">
				</div>
			</div>
		</div>
	</section>
	
	<section class='download'>
		<img class='clickable pop-in' src="images/download1.jpg">
	</section>
	
	<?php include('desk_footer.php');?>	
	
	<?php //mobile?>
	<section id='mobilepart' class='viewpart mobilepart'>
	<?php include('index_mobile.php');?>
	</section>
	<section id='gamepagepart' class='viewpart gamepagepart indexhide'>
	</section>
	<section id='registerpart' class='viewpart registerpart indexhide'>
	</section>
	<section id='promotionpart' class='viewpart promotionpart indexhide'>
	</section>
	<section class='javapage'></section>
	<section class='javapage2'></section>

	<?php include('mobile_footer.php');?>
	
	
	

<script type="text/javascript">
//Loading
	window.addEventListener('load', function () {
		$('.loadingdiv').fadeOut();	
		$('.gamepagepart').load('index_gamepage.php');
		$('.registerpart').load('index_register.php');
		$('.promotionpart').load('index_promotion.php');
	})	
</script>
<script src="js/swiper.min.js"></script>
<script src="js/Main.js"></script>
	<audio controls loop id="mainaudio">
	  <source src="music/main.mp3" type="audio/mpeg">
	  Your browser does not support the audio element.
	</audio>
	<audio controls loop id="mobile_music" style='display:none;'>
	  <source src="music/main.mp3" type="audio/mpeg">
	  Your browser does not support the audio element.
	</audio>

</body>

</head>
</html>

