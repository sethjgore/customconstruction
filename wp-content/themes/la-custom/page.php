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
			<div class="col-md-8 col-md-offset-2">
				<div class="para"><?php the_content(); ?></div>
			</div>
		</div>
		


</div>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no page matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>