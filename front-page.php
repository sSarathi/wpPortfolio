<?php get_header(); ?>
<div class="row">
		<div class="col-sm-2">
			
			
		</div>
		<div class="col-sm-7">
			<h1 class="blog-title">
				The Bootstrap Blog
			</h1>
			<p class="lead blog-description">The official Example of creating a blog with bootstrap</p>
			<p>lorem ipsum dolore </p>

			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h3><?php the_title(); ?></h3>
			<?php the_content( ); ?>
		
			<hr>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<p>There are no post or pages</p>
			<?php endif; ?> 
		</div>
		<div class="col-sm-3 sidebar">

				<?php dynamic_sidebar(sidebar1); ?>
		
		</div>


		
</div>
	<?php get_footer(); ?>