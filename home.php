<?php get_header(); ?>
<p>home</p>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'post' ); ?>
			<?php endwhile; ?>
			<!-- post navigation -->
			<div class="row">
	<div class="col-sm-2">
			
		</div>
		<div class="col-sm-7">
			<?php pagination_nav(); ?>
		</div>

			<?php else: ?>
			<p>There are no post or pages</p>
			<?php endif; ?>
			


<?php get_footer(); ?>