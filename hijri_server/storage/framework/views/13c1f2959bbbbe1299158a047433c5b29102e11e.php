<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">
<head>
	<?php if(Request::path() === '/'): ?>
	<title>Hijri Interiors | Home</title>
	<?php else: ?>
	<title>Hijri Interiors | <?php echo e(ucwords(str_replace('-', ' ', Request::path()))); ?></title>
	<?php endif; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Jewel a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">

	<?php if(Request::path() === 'contact' || Request::path() === 'order-page'): ?>
    <link href="css/contact.css" rel='stylesheet' type='text/css' />
    <?php elseif(Request::path() === 'soon'): ?>
    <link href="css/soon.css" rel='stylesheet' type='text/css' />
    <?php else: ?>
    <link href="css/single.css" rel='stylesheet' type='text/css' />
	<?php endif; ?>
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
	<!--Header-->
	<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
	<!--//header-->
	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- //js -->
	<!-- password-script -->
	<script >
		/*window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}*/
	</script>
	<!-- //password-script -->
	<!-- required-js-files-->
	<?php if(Request::path() === 'about'): ?>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<?php elseif(Request::path() === 'soon'): ?>
	<script src=" js/moment.js"></script>
	<script src=" js/moment-timezone-with-data.js"></script>
	<link rel="stylesheet" href="css/jquery.countdown.css" />
	<script src="js/timer.js"></script>
	<?php endif; ?>
	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				items:4,
				margin: 10,
				autoplay: true,
    			autoplayHoverPause:true,
    			autoplayTimeout:3000,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 2,
						nav: false
					},
					1000: {
						items:5,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->

	<!--//required-js-files-->
	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- Necessary-JS-File-For-Bootstrap -->
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->




</body>
</html>


