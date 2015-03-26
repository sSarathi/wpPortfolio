<?php 
/*
	Template Name: Movie Page

*/
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
		</div>
	<div class="col-sm-7">
		<?php 	/*** The WordPress Query class.
		* @link http://codex.wordpress.org/Function_Reference/WP_Query
		 *
		*/
		$args = array(
							
		'post_type' => 'Movie'
		);

		$query = new WP_Query( $args );
		?>
					<div id="catmenu">
						<ul id="filters">
						    <li><a href="#" class='btn btn-primary' data-filter="*" class="selected">Everything</a></li>
							<?php 
								$terms =   get_terms('genre');
								$count = count($terms); //How many are they?
								//echo $count;
								if ( $count > 0 ){  //If there are more than 0 terms
									foreach ( $terms as $term ) {  //for each term:
										echo "<li><a class='btn btn-primary' href='#' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
										//create a list item with the current term slug for sorting, and name for label
									}
								} 
							?>
						</ul>
					</div> 
					<!--end of catmenu-->
					<!--the loop -->
					
					<?php if ( have_posts() ) :?><div id="isotope-list"><?php while ( $query->have_posts() ) : $query->the_post(); ?>


			
						    <?php   
							$termsArray = get_the_terms( $post->ID, "genre" );  //Get the terms for this particular item
							$termsString = ""; //initialize the string that will contain the terms
								foreach ( $termsArray as $term ) { // for each term 
									$termsString .= $term->slug.' '; //create a string that has all the slugs 
								}
							?> 
							<div class="<?php echo $termsString; ?> item"> <?php // 'item' is used as an identifier ?>



								<?php $name = get_post_meta(get_the_ID(),'_meta_box_id_name_movie',true);  ?>
								<?php $description = get_post_meta(get_the_ID(),'_meta_box_id_description_movie',true);  ?>
								<?php $rating = get_post_meta(get_the_ID(),'_meta_box_id_name_select_rating',true);  ?>
								<?php $image = wp_get_attachment_image(get_post_meta($post->ID, '_box_name_name_image_movie', true));  ?>
											 <div class="movies-style">
											
													<?php the_post_thumbnail(); ?>
													</br>
													<h4><?php echo $name ?></h4>
													</br>
													<?php echo $description ?>
													</br>
													</br>
													</br>
													Rating:<?php echo $rating ?>
													</br>
													</br>
											</div>
				</div> <!-- end item -->
				<?php endwhile; ?>
				<!-- post navigation -->
			</div> <!-- end isotope-list -->

		<?php else: ?>
		<p>you hav no player</p>
		<?php endif; ?>
		<!--end of the loop -- >
	</div><!--end of column-->
	
	<div class="col-sm-2">
	</div>
</div>
</div>
<?php get_footer(); ?>