<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>


    <div id="fwslider"><!-- start slider -->
        <div class="slider_container">
            <div class="slide">
                <!-- Slide image -->
                    <img src="<?php bloginfo('template_url'); ?>/images/slider2.jpg">
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="<?php bloginfo('template_url'); ?>/images/slider1.jpg">
                <div class="slide_content">
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div><!--/slider -->
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid">
		<div class="span_of_3"><!-- start span_of_4 -->
			<div class="col-md-3">
				<div class="span4_of_list">
					<span><i class="fa fa-thumbs-o-up"></i></span>
					<h3>Follow Us</h3>
					<p>Follow along on Facebook as we share some of our favorite projects, as well as ideas that inspire us every day.</p>
					<div class="read_more">
						<a class="btn btn-2 active" href="https://www.facebook.com/pages/LA-Custom-Construction-LLC/181921125159921">Facebook</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="span4_of_list">
					<span><i class="fa fa-flag"></i></span>
					<h3>Getting Started</h3>
					<p>We are happy to build on your lot or a lot from our inventory. If you don't already have a house plan, we will work alongside you and an architect to create a plan that meets your needs. We will estimate the construction cost of your home based upon your plans and finishes, striving to give you a competitive price without sacrificing quality. We are happy to provide construction financing through our lenders.
</p>
					<div class="read_more">
						<a class="btn btn-2b" href="<?php bloginfo('url'); ?>/contact">Say hello</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="span4_of_list">
					<span><i class="fa fa-flask"></i></span>
					<h3>Exploration</h3>
					<p>Not sure exactly what you need? Check out our exploration department to find inspiration and fresh ideas.</p>
					<div class="read_more">
						<a class="btn btn-2b" href="<?php bloginfo('url'); ?>/portfolio">Get inspired</a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div><!-- end span_of_4 -->
	</div>
</div>
</div>
<div class="main1_bg"><!-- start main1 -->
<div class="container">
	<div class="main slider_text texxt-center">
		<h4>Why LA Custom Construction?</h4>
		<p>You have your choice of many home builders. Here are just a few examples of why our clients think we're the best.</p>
</div>
</div>
<!-- start banner -->
<div id="bannerBg">
<div id="containingDiv">
            <div id="allinone_carousel_charming">
            	<div class="myloader"></div>
                <!-- CONTENT -->
                <ul class="allinone_carousel_list">
               		<li><img src="<?php bloginfo('template_url'); ?>/images/slider_pic1.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/images/slider_pic2.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/images/slider_pic3.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/images/slider_pic4.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/images/slider_pic5.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/images/slider_pic3.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/images/slider_pic4.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/images/slider_pic5.jpg" alt="" class="img-responsive"/></li>

                </ul>
          </div>
</div>
</div>
 <!-- end banner -->
<div id="bannerBg">
<div id="containingDiv">
            <div id="allinone_carousel_charming">
              <div class="myloader"></div>
                <!-- CONTENT -->
                <ul class="allinone_carousel_list">
                  <li>Luke & Jamie- Thank you for everything. We love our outdoor kitchen and have really enjoyed it this summer. Yall are extremely talented and we wish you the best of luck with your business<h3>Ken and Valerie</h3></li>
                  <li>Luke & Jamie- Thank you for everything. We love our outdoor kitchen and have really enjoyed it this summer. Yall are extremely talented and we wish you the best of luck with your business<h3>Ken and Valerie</h3></li>

                </ul>
          </div>
</div>
</div>
</div>
<div class="main_btm"><!-- start main_btm -->
<div class="container">
<div class="clear"></div>
<hr>
<div class="clear"></div>
	<div class="cau_hide">
	<div class="cursual"><!--  start cursual  he -->		<h4>Organizations we're a part of:<span class="line><"/span></h4>
	</div>
	<div id="owl-demo" class="owl-carousel"><!----start-img-cursual---->
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php bloginfo('template_url'); ?>/images/member_logo_2.png" style="height:85px">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="<?php bloginfo('template_url'); ?>/images/member_logo_1.png" style="height:85px">
			</div>
		</div>
	</div><!----//End-img-cursual---->
	</div>
</div>
</div>


<?php get_footer(); ?>