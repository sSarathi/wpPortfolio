		<?php wp_footer(); ?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<div ng-app="FooterbarApp">
			<div ng-controller="footerBarCntrl"> 
				<div class="button1">
					
					
					 <button type="button" ng-click="changefooter()" class="btn btn-default btn-lg ">
	        		Toggle Me
	    				</button>
				</div>



				<div ng-hide="myVar">
					<footer class="blog-footer">

						<p><?php echo "sujoyTheme"; ?>-&copy;</p>
							<nav class="blog-nav-1">
								  <?php $args=array(
						        	'theme_location' => 'Footer'
						      		); ?>
									<?php wp_nav_menu($args); ?>
							</nav>			
					</footer>
				</div>


			</div>
				
		</div>
	</body>
</html>