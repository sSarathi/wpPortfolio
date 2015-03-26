
<?php get_header(); ?>
<p>single</p>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'post' ); ?>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<p>There are no post or pages</p>
			<?php endif; ?>
			


<?php get_footer(); ?>