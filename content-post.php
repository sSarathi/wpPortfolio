<div class="row">
	<div class="col-sm-2">
			
		</div>
		<div class="col-sm-7">
	<h2 class="blog-post-title"><?php the_title(); 
	?></h2>				

	<ul class="info">
		<li>Posted in: <?php the_category(', '); ?></li>
		<li>Written by: <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a></li>
		<li>On: <?php the_time('F j, Y'); ?></li>
	</ul>
		<div>
		<?php if(is_single()): ?>
					
				<?php the_content(); ?>	
				<?php comments_template(); ?>
						
					

		<?php else: ?>		
						<?php the_excerpt(); ?>
						<p><a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>


					<?php endif; ?>
				</div>
				
	</div>
</div>