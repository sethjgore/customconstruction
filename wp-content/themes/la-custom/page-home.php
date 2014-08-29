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
					<h3>Portfolio</h3>
					<p>Not sure exactly what you need? Check out pictures of our previous work to find inspiration and fresh ideas.</p>
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
<div class="is_position-relative main1_bg"><!-- start main1 -->
  <div class="container">
  	<div class="main slider_text texxt-center">
  		<h4>Why LA Custom Construction?</h4>
  		<p>You have your choice of many home builders. Here are just a few examples of why our clients think we're the best.</p>
  </div>
    <!-- start banner -->
   <!-- end banner -->
  </div>
  <div class="clear"></div>
</div>
<div>
  <div class="container">
    <div class="row">
      <div class="md-col-3"><img class="is_display_none" src="<?php bloginfo('template_url'); ?>/images/empty-thin.png"><p>Luke & Jamie- Thank you for everything. We love our outdoor kitchen and have really enjoyed it this summer. Yall are extremely talented and we wish you the best of luck with your business</p><h3 class="is_color-salmon">Ken and Valerie</h3></div>
      <div class="md-col-3"><img class="is_display_none" src="<?php bloginfo('template_url'); ?>/images/empty-thin.png"><p>It was a pleasure working with you both in building my first new home. I was green behind the ears to the whole process but yall made it fun and easy. Best of luck on all your future endeavors</p><h3 class="is_color-salmon">Hannah</h3></div>
      <div class="md-col-3"><img class="is_display_none" src="<?php bloginfo('template_url'); ?>/images/empty-thin.png"><p>Thanks for a beautiful home!</p><h3 class="is_color-salmon">Johnelle & Rod</h3></div>
  </div>
  <div class="row">
      <div class="md-col-3"><img class="is_display_none" src="<?php bloginfo('template_url'); ?>/images/empty-thin.png"><p>I wanted to thank you all for being so organized and keeping in touch with me! That's so hard to fine in a contractor these days!</p><h3 class="is_color-salmon">Stacy</h3></div>
      <div class="md-col-3"> <img class="is_display_none" src="<?php bloginfo('template_url'); ?>/images/empty-thin.png"><p>Our new home is truly a work of art created by Luke and Jamie.  They took such pride in the creative touches and details.  They even made the purchasing process enjoyable!  It was much more than business - but a relationship that has been so fulfilling and satisfying </p><h3 class="is_color-salmon">Johnelle & Rod</h3></div>
    </div>
  </div>
</div>


<div class="main_btm"><!-- start main_btm -->
<div class="container">
  <div class="main slider_text texxt-center">
      <h4>Organizations We are a part of</h4>
  </div>

  <div class="span_of_3"><!-- start span_of_4 -->
  <div class="col-md-4">
    <img class="member_img center-block" src="<?php bloginfo('template_url'); ?>/images/member_logo_2.png">
  </div>
  <div class="col-md-4">
    <img class="member_img center-block" src="<?php bloginfo('template_url'); ?>/images/member_logo_3.png">
  </div>
  <div class="col-md-4">
    <img class="member_img center-block" src="<?php bloginfo('template_url'); ?>/images/member_logo_1.png">
  </div>

  <div class="clearfix"></div>
</div><!-- end span_of_4 -->
</div>
</div>


<?php get_footer(); ?>