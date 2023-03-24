<?php  require_once("includes/function.php");?>
<?php require_once("lib/sessions.php");?>
<?php require_once("includes/funct.php");?>
<?php require_once("functions.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home | Idanre Hills</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="asset/images/icons/logo2.png" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/lightbox2/css/lightbox.min.css">

<!--===============================================================================================-->

	<!--<link rel="stylesheet" type="text/css" href="{{ asset('asset/css') }}/util.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css')}}/main.css">-->

	
	<link rel="stylesheet" type="text/css" href="asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
	
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				

				<div class="topbar-child2">
					<span class="topbar-email">
					</span>

					
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="/" class="logo">
					<img src="asset/images/icons/logo1.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
								
							</li>

							<li>
								<a href="about.php">About Us</a>
							</li>
													
							<li>
								<a href="wonders.php">Wonders</a>
								<ul class="sub_menu">
								<li><a href="resort.php">Resort Center</a></li>
									<li><a href="steps.php">640 Steps</a></li>
									<li><a href="oldpal.php">Old Palace</a></li>
									<li><a href="kings.php">King's Cementary</a></li>
									<li><a href="agbo.php">Agboogun Foot</a></li>
									<li><a href="oldcou.php">Old Court</a></li>
									<li><a href="noah.php">Noah Ark</a></li>
									<li><a href="oros.php">Orosun Hill</a></li>
									<li><a href="igbosch.php">Igboore School</a></li>
									<li><a href="unread.php">Unreadable Letters</a></li>
								</ul>
							</li>
							<li>
								<a href="gallery.php">Gallery</a>
							</li>
							<li>
								<a href="contact.php">Contact Us</a>
							</li>
							<li>
						<a href="login.php" class="flex-c-m1 size2a bo-rad-23a s-text2a bgwhite hov1 trans-0-4">Sign In</a>
						
							</li>
							
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="/" class="logo-mobile">
				<img src="asset/images/icons/logo1.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					
					<span class="linedivide2"></span>

						
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
							
							</span>

							<div class="topbar-language rs1-select2">
								
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					
					<li class="item-menu-mobile">
								<a href="index.php">Home</a>
								
							</li>

							<li class="item-menu-mobile">
								<a href="about.php">About Us</a>
							</li>
							
							<li class="item-menu-mobile">
								<a href="wonder.php">Wonders</a>
								<ul class="sub_menu">
									<li><a href="resort.php">Resort Center</a></li>
									<li><a href="steps.php">640 Steps</a></li>
									<li><a href="oldpal.php">Old Palace</a></li>
									<li><a href="kings.php">King's Cementary</a></li>
									<li><a href="agbo.php">Agboogun Foot</a></li>
									<li><a href="oldcou.php">Old Court</a></li>
									<li><a href="noah.php">Noah Ark</a></li>
									<li><a href="oros.php">Orosun Hill</a></li>
									<li><a href="igbosch.php">Igboore School</a></li>
									<li><a href="unread.php">Unreadable Letters</a></li>
								</ul>
							</li>
							<li class="item-menu-mobile">
								<a href="gallery.php">Gallery</a>
							</li>
							<li class="item-menu-mobile">
								<a href="contact.php">Contact Us</a>
							</li>
							<li class="item-menu-mobile">
						<a href="login.php" class="flex-c-m1 size2a bo-rad-23a s-text2a bgwhite hov1 trans-0-4">Sign In</a>
						
							</li>
							
						</ul>				</ul>
			</nav>
		</div>
	</header>

	<!-- Slide1 -->
	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container" style="position:relative; display:block; margin:3%">
			<div class="row">
				<!-- Session Status -->
        <div class="col-lg-6 col-sm-12">
		<h3 style="text-shadow: .1rem .1rem .5rem #3600D9; font-weight:bold">Idanre Hills: About Us</h3>
			<article></article>
        <!-- Validation Errors -->
		<p style="font-size:16px;">Idanre hills is a platform where Tourists all over the world share their experience during their visit to the ancient city of Idanre in Idanre Local Government of Nigeria. The ancient town is where the citizes live for over 500 hundred years before they migrated to the bottom of the hills. Tourist visiting the town will have to climb an interesting 640 steps to get to the top of the hills which the ancient city of the Kingdom.</p>
        
		</div>
		 <!-- Session Status -->
		 <div class="col-lg-6 col-sm-12">
		 	 <div class="v31_116"><img src="asset/images/v31_112.png" style="top:-80px;"></div>
			 </div>

</div>
</di>
	</section>

	
	<!-- Instagram -->
	

	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size15 p-t-30 p-l-15 p-r-15 respon3" >
				

				<img src="asset/images/footlogo.png" alt="IMG-BENNER" style="width:70%">
			</div>

			<div class="w-size15 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Wonders Site
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Agboogun Foot
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Old Palace
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							King's Cementary
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Noah Ark
						</a>
					</li>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Old Court
						</a>
					</li>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Igboore Pry School
						</a>
					</li>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Unreadable Letter
						</a>
					</li>
				</ul>
			</div>

			

			<div class="w-size15 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Security
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Learn more
						</a>
					</li>

									</ul>
			</div>

			<div class="w-size15 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Connect with us
				</h4>

				<div class="flex-m p-t-30">
					<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
				</div>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			

			
		</div>
	</footer>



	
	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	

<!--===============================================================================================-->
	<script type="text/javascript" src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="asset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="asset/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="asset/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="asset/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="asset/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="asset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="asset/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="asset/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="asset/js/main.js"></script>

</body>
</html>
