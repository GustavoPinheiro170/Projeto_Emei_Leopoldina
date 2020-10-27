
<?php
/*
Theme Name: Leopoldina
Author: Gustavo Pinheiro
Author URI: http://www.hostinger.com/tutorials
Description: Escola Leopoldina
Version: 1.0

*/

// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}


// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );


// Register a new navigation menu
function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  // Hook to the init action hook, run our navigation menu function
  add_action( 'init', 'add_Main_Nav' );


  function emei_turmas(){
	register_post_type('turmas',
	array(
		'labels'            => array(
			'name'          => __('Turmas'),
			'singular_name' => __('Turma')
		),
		'public'      => true,
		'has_archive' => true,
		'menu_icon'   => 'dashicons-format-quote',
		'supports'    => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'),
		'taxonomies'  => array('category', 'post_tag'),
		)	
	);
}

add_action('init', 'emei_turmas');


function quemsomos(){
	register_post_type('quemsomos',
	array(
		'labels'            => array(
			'name'          => __('Quem Somos'),
			'singular_name' => __('Quem Somos')
		),
		'public'      => true,
		'has_archive' => true,
		'menu_icon'   => 'dashicons-format-quote',
		'supports'    => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'),
		'taxonomies'  => array('category', 'post_tag'),
		)	
	);
}

add_action('init', 'quemsomos');

function projetos(){
	register_post_type('projetos',
	array(
		'labels'            => array(
			'name'          => __('Projetos'),
			'singular_name' => __('Projeto')
		),
		'public'      => true,
		'has_archive' => true,
		'menu_icon'   => 'dashicons-format-quote',
		'supports'    => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'),
		'taxonomies'  => array('category', 'post_tag'),
		)	
	);
}

add_action('init', 'projetos');



//Adiciona suporte a Post Thumbnails no Tema
add_theme_support( 'post-thumbnails' );


?>