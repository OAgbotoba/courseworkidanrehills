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
<style type="text/css">
        
        #message {
          display:none;
          width: 300px;
          background: #f3f5f5;
          color: #000;
          font-size: 12px;
          position: relative;
          padding: 20px;
          margin-top: 10px;
        }
        
        #message p {
          padding: 10px 0px;
          font-size: 12px;
        }
        .valid {
          color: green;
        }
        
        .valid:before {
          position: relative;
          left: 25px;
        }
        
        /* Add a red text color and an "x" icon when the requirements are wrong */
        .invalid {
          color: red;
        }
        
        .invalid:before {
          position: relative;
          left: 25px;
        }
        
        
            </style>
            
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
	<section class="bgwhite p-t-66 p-b-38"style="background-color:#fff">
		<div class="container">
			<div class="row">
				

            
    

        <!-- Session Status -->
        <div class="col-sm">

        <!-- Validation Errors -->
        <div class="card">
  <div class="card-body">
	  
        <form method="POST" action="actionproceed.php" style="margin:6%;">
        <br>
                    <?php echo Message(); 
                            echo SuccessMessage(); 
                        ?>
                    <br>
             <br>
			<p class="vs_211">Register with Us</p>
            <!-- Email Address -->
            <div class="row">
            <div class="col">
            <div class="form-group">
                <label for="email">Surname</label>

                <input id="email" class="form-control mt-1 w-full inputs" required type="text" name="surname">
				<span class="text-danger"></span>
            </div>
</div>
<div class="col">
            <div class="form-group">
                <label for="email">Firstname</label>

                <input id="email" class="form-control mt-1 w-full inputs" required type="text" name="firstname">
				<span class="text-danger"></span>
            </div>
</div>
</div>
<div class="row">
            <div class="col">
            <div class="form-group">
                <label for="email">Email</label>

                <input id="email" class="form-control mt-1 w-full inputs" required type="email" name="email">
				<span class="text-danger"></span>
            </div>
</div>
<div class="col">
            <div class="form-group">
                <label for="email">Phone Number</label>

                <input id="email" class="form-control mt-1 w-full inputs" required type="text" name="phoneno">
				<span class="text-danger"></span>
            </div>
</div>
</div>
<div class="row">
            <div class="col">
            <label for="password">Continent</label>
			<div class="form-group">
            
               

                <select name="continent" required class="form-control mt-1 w-full inputs">
                <option value="">Select your Continent</option>    
                <option value="Africa">Africa</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Asia">Asia</option>
                    <option value="Europe">Europe</option>
                    <option value="North America">North America</option>
                    <option value="Oceania">Oceania</option>
                    <option value="South America">South America</option>

                </select>
            </div>
</div>
</div>
<div class="row">
<div class="col">
            <div class="form-group">
                <label for="email">Country</label>

                <input class="form-control mt-1 w-full inputs" type="text" required name="country">
				<span class="text-danger"></span>
            </div>
</div>
</div>

            <!-- Password -->
            <div class="row">
            <div class="col">
            <label for="password">Password</label>
			<div class="form-group">
            
               

                <input id="password" class="form-control mt-1 w-full inputs" type="password" required  name="password">
				<span class="text-danger"></span>
            </div>
            <div id="message">
                        <h3 style="font-size:14px;">Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
             </div>
</div>
            <div class="col">
            <label for="password">Confirm Password</label>
			<div class="form-group">
             <input id="password" class="form-control mt-1 w-full inputs" type="password" required  name="conpassword">
				<span class="text-danger"></span>
            </div>
</div>
            <!-- Remember Me -->
            

            <div class="flex items-center justify-end mt-4">
            
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 labels" href="{{ route('password.request') }}">
                
                    </a>


                
            </div>
			<input type="submit" class="sub" value="Submit">
			<p style="color:red">Already Registered? Click to <a href="login.php" style="font-weight:bold;color:#3600D9">Sign In</a></p>
        </form>
    </div>


			</div>
		</div>
		 <!-- Session Status -->
		
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
    <script>
var stateObject = {
"Electronic": {"Nigera", "Outside Nigeria"},
"Paper": {"Nigera", "Outside Nigeria"},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),

for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
</script>
<script src="build/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {      
      utilsScript: "build/js/utils.js",
    });
  </script>
<script>
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
</script> 


</body>
</html>
