<?php
require_once("wp-bootstrap-navwalker.php");
add_theme_support( 'post-thumbnails' );
/**
 */
function abat4y_add_style() {
wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css');

wp_enqueue_style('font-css',get_template_directory_uri().'/css/font-awesome.min.css');

wp_enqueue_style('main-css',get_template_directory_uri().'/css/main.css');
}


function abat4y_add_script() {
//remove resisteration for old jquery
wp_deregister_script('jquery');
//add new resisteration for  jquery
wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),false,'',true );
// enqueu jquery
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false,true);

wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js',array(), false ,true);

wp_enqueue_script('html5shiv',get_template_directory_uri().'/js/html5shiv.min.js');
wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
wp_enqueue_script('respond',get_template_directory_uri().'/js/respond.min.js');
wp_script_add_data('respond', 'conditional', 'lt IE 9' );

}
function wpdocs_custom_excerpt_length( $length ) {
        if(is_author()){
             return 30;
        }
        elseif(is_category()){
            return 60;
        }

        else{ return 35;}
   
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '[more...]';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function add_nav_register_menu(){

register_nav_menus( array(
    'bootstrap_menu'=> 'navigation bar' ,
    'footer_menu' =>'footer menu'
) );

}
function add_nav_menu(){

wp_nav_menu(array(
'theme_location'=>'bootstrap_menu',
'menu_class'=>'navbar-nav ml-auto',
'container'=> false,
'depth'=>2,
'walker'=>new wp_bootstrap_navwalker()
));

}



add_action( 'wp_enqueue_scripts', 'abat4y_add_style' );
add_action( 'wp_enqueue_scripts', 'abat4y_add_script' );
add_action( 'init', 'add_nav_register_menu' );


//numbering_pagenation
    function add_pagenation_num (){
    global $wp_query; //mack wp_query global
    $all_pages= $wp_query->max_num_pages ;// get all pages
    $curent_page=max(1,get_query_var('paged')); //get curent page
    if($all_pages>1)
    {
        return paginate_links( array(
            'base'   => get_pagenum_link( ).'%_%',
            'format' => 'page/%#%',
            'current'=> $curent_page,
            'mid_size'=>2,
            'end_size'=>2
            
        ) );

        }
       
    }
/// regestier abatchy sidbar (to add widgets)
function abatchy_main_sidbar(){
register_sidebar( array(
        'name'          => 'Main Sidebar',
         'id'            => 'sidebar-1',
        'description'   => 'main-sidebar in evrywhere',
        'class'         => 'main-Sidebar',
        'before_widget' => '<div class="widget-main">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>'
));
}

add_action('widgets_init','abatchy_main_sidbar');
?>
