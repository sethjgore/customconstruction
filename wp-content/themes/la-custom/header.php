<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&larr;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<meta name="description" content="LA Custom Construction, custom home construction, louisiana, baton rouge">

	<meta name="keywords" content="baton rouge, home, custom, construction, LA">

	<!-- Make it pretty -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/main.css" type="text/css" media="screen" />

	<!-- Make it behave -->
	<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.js" type="text/javascript" charset="utf-8">
		// version 1.4.2
	</script>
	<script src="<?php bloginfo('template_url'); ?>/scripts/all.js" type="text/javascript" charset="utf-8"></script>

<!-- Bootstrap -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php bloginfo('template_url'); ?>/css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<!--start slider -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fwslider.css" media="all">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/css3-mediaqueries.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/fwslider.js"></script>
<!--end slider -->
<!-- must have -->
<link href="<?php bloginfo('template_url'); ?>/css/allinone_carousel.css" rel="stylesheet" type="text/css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/allinone_carousel.js" type="text/javascript"></script>
<!--[if IE]><script src="<?php bloginfo('template_url'); ?>/js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->
	<script>
		jQuery(function() {

			jQuery('#allinone_carousel_charming').allinone_carousel({
				skin: 'charming',
				width: 990,
				height: 454,
				responsive:true,
				autoPlay: 3,
				resizeImages:true,
				autoHideBottomNav:false,
				showElementTitle:false,
				verticalAdjustment:50,
				showPreviewThumbs:false,
				//easing:'easeOutBounce',
				numberOfVisibleItems:5,
				nextPrevMarginTop:23,
				playMovieMarginTop:0,
				bottomNavMarginBottom:-10
			});		
		});
	</script>
<!-- Owl Carousel Assets -->
<link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet">
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!-- start circle -->
<script>
(function($){
	$.fn.percentPie = function(options){

		var settings = $.extend({
			width: 100,
			trackColor: "EEEEEE",
			barColor: "E2534B",
			barWeight: 30,
			startPercent: 0,
			endPercent: 1,
			fps: 60
		}, options);

		this.css({
			width: settings.width,
			height: settings.width
		});

		var	that = this,
			hoverPolice = false,
			canvasWidth = settings.width,
			canvasHeight = canvasWidth,
			id = $('canvas').length,
			canvasElement = $('<canvas id="'+ id +'" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
			canvas = canvasElement.get(0).getContext("2d"),
			centerX = canvasWidth/2,
			centerY = canvasHeight/2,
			radius = settings.width/2 - settings.barWeight/2;
			counterClockwise = false,
			fps = 1000 / settings.fps,
			update = .01;
			this.angle = settings.startPercent;

		this.drawArc = function(startAngle, percentFilled, color){
			var drawingArc = true;
			canvas.beginPath();
			canvas.arc(centerX, centerY, radius, (Math.PI/180)*(startAngle * 360 - 90), (Math.PI/180)*(percentFilled * 360 - 90), counterClockwise);
			canvas.strokeStyle = color;
			canvas.lineWidth = settings.barWeight;
			canvas.stroke();
			drawingArc = false;
		}

		this.fillChart = function(stop){
			var loop = setInterval(function(){
				hoverPolice = true;
				canvas.clearRect(0, 0, canvasWidth, canvasHeight);

				that.drawArc(0, 360, settings.trackColor);
				that.angle += update;
				that.drawArc(settings.startPercent, that.angle, settings.barColor);

				if(that.angle > stop){
					clearInterval(loop);
					hoverPolice = false;
				}
			}, fps);
		}

		this.mouseover(function(){
			if(hoverPolice == false){
				that.angle = settings.startPercent;
				that.fillChart(settings.endPercent);
			}
		});

		this.fillChart(settings.endPercent);
		this.append(canvasElement);
		return this;
	}
}(jQuery));

$(document).ready(function() {

	$('.google').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .9,
		fps: 60
	});
  
  $('.moz').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .75,
		fps: 60
	});
  
  $('.safari').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "#76C7C0",
		barWeight: 20,
		endPercent: .5,
		fps: 60
	});
    
});
</script>







	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>


</head>
<body>

<div class="header_bg">
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" style="width: 100px;"/></a>
			</div>
			<div class="h_menu">
			<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
			<nav>
			<ul class="menu list-unstyled">
				<li class="activate"><a href="<?php bloginfo('url'); ?>">HOME</a></li>
				<li><a href="<?php bloginfo('url'); ?>/about">ABOUT</a></li>
				<li><a href="<?php bloginfo('url'); ?>/portfolio">PORTFOLIO</a></li>
				<li><a href="<?php bloginfo('url'); ?>/contact">CONTACT</a></li>
			</ul>
			</nav>
			<script src="<?php bloginfo('template_url'); ?>/js/menu.js" type="text/javascript"></script>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

