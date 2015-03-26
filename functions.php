<?php

 
require_once( get_template_directory() . '/libs/custom-ajax-auth.php' );
include('cuztom/cuztom.php');

if(function_exists('add_theme_support')){

   add_theme_support('post-thumbnails' ); 
}

function load_my_StyleAndScript(){
     wp_enqueue_script(
            'Jquery',
            'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'
        
        );
        wp_enqueue_script(
            'angular-core',
            'https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js'
        
        );
        wp_enqueue_style(
            'bootstrap-style',
            'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'
        
        );
        wp_enqueue_script(
            'bootstrap-script',
            'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'
        
        );
            wp_enqueue_script(
            'app-js',
            get_template_directory_uri().'/app.js'
        );
        


        
        wp_enqueue_style(
            'main-css',
            get_template_directory_uri().'/style.css'
        );

        
        
        //load script 



    }

    add_action('wp_enqueue_scripts','load_my_StyleAndScript');




add_theme_support('menus');
function ourWidgets(){

           /**
            * Creates a sidebar
            * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
            */
            $args = array(
                'name'          => 'Sidebar',
                'id'            => 'sidebar1',
                
            );
        
            register_sidebar( $args );

    }
    add_action('widgets_init','ourWidgets');


$movies  = new Cuztom_Post_Type( 'Movie', array(
    'has_archive' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' )
) );

$movies->add_taxonomy( 'Genre' );

$movies -> add_meta_box(
    'meta_box_id',
    'Movies Sections',
    array(
         array(
        'name'          => 'name_movie',
        'label'         => 'Name of Movie',
        'description'   => 'Enter Name of Movie',
        'type'          => 'text',
    ),
          array(
        'name'          => 'description_movie',
        'label'         => 'Description',
        'description'   => 'Enter plot of Movie',
        'type'          => 'textarea',
    ),
           array(
        'name'          => 'name_select_rating',
        'label'         => 'Rating',
        'description'   => 'Rate this',
        'type'          => 'select',
        'options'       => array(
            '1'    => '1',
            '2'    => '2',
            '3'    => '3',
            '4'    => '4',
            '5'    => '5'
        ),
        'default_value' => '3'
     ),
           array(
        'name'          => 'name_image_movie',
        'label'         => 'C/D Image',
        'description'   => 'Enter C/D Image',
        'type'          => 'image',
    )

        
    )
);
function pagination_nav() {
    global $wp_query;
 
    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
        </nav>
<?php }
}


    function add_isotope() {
    wp_register_script( 'isotope', get_template_directory_uri().'/vendors/js/jquery.isotope.js', array('jquery'),  true );
    wp_register_script( 'isotope-init', get_template_directory_uri().'/vendors/js/isotope.js', array('jquery', 'isotope'),  true );
    wp_register_style( 'isotope-css', get_stylesheet_directory_uri() . '/vendors/css/isotope.css' );
 
    wp_enqueue_script('isotope-init');
    wp_enqueue_style('isotope-css');
}
 
add_action( 'wp_enqueue_scripts', 'add_isotope' );


