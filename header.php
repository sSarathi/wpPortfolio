<!DOCTYPE html>
<html>
<head>
	
	<title><?php wp_title( '-', true, right);  ?>

		<?php bloginfo('name'); ?>
	</title>


</head>
<?php wp_head(); ?>
<body>


<?php if (is_user_logged_in()) { ?>
     <a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
<?php } else { get_template_part('ajax', 'auth'); ?>             
        <a class="login_button" id="show_login" href="">Login</a>
        <a class="login_button" id="show_signup" href="">Signup</a>
<?php } ?>




	


	
	<header>

				<div class="blog-masthead"><nav>
						<div class="container">
							<nav class="blog-nav" id="nav">
								<div class="row">
		<div class="col-sm-2">
			
			


		
		</div>
		<div class="col-sm-7">
								<?php $args=array(
							'menu' => 'main-navigation',
							'echo' => false
						

							); 
								echo strip_tags(wp_nav_menu( $args ),'<a>');


							?>
						</div>
							
							
					</nav>
				</div>
				</div>
				<script>
function setActive() {
  aObj = document.getElementById('nav').getElementsByTagName('a');
 console.log(aObj);
  for(i=0;i<aObj.length;i++) { 
  	console.log(document.location.href.indexOf(aObj[i].href));
    if(document.location.href.indexOf(aObj[i].href)>=0) {
    	if(i==0)
    	aObj[i].className='';
    	else
    	aObj[i].className='active';
      
    }
  }
}

window.onload = setActive;


</script>

					
				
			</header>
			
	







