<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="main_bg"><!-- start main -->
<div class="container">
  <div class="main_grid1">
    <h3 class="style pull-left"><?php the_title(); ?></h3>
    <ol class="breadcrumb pull-right">
      <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
      <li class="active"><?php the_title(); ?></li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
  <div class="main about span_of_3">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="para"><?php the_content(); ?></div>
      </div>
    </div>
  </div>
  <h4 class="text-center texxt-center center-block">You can check us out and hire us on Houzz</h4>
  <div class="text-center center-block">
    <table style="width: 125px;" cellpadding="0" cellspacing="0"><tr><td><a href="http://www.houzz.com/pro/lacustomconstructionllc/la-custom-construction"><img src="http://www.houzz.com/res/1974/pic/badge125_125.png?v=1974" alt="Remodeling and Home Design" width="125" height="125" border="0" /></a></td></tr></table>
  </div>
</div>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no page matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>