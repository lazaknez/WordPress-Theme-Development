<?php

//dodavanje CSS i JS fajla
function lk_setup()
{
	//google fontovi i font awesome ikonice
	wp_enqueue_style('google-fonts','//fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
	wp_enqueue_style('fontawesome','//use.fontawesome.com/releases/v5.15.1/css/all.css');

	wp_enqueue_style('style',get_stylesheet_uri());
  wp_enqueue_script('main',get_theme_file_uri('/js/main.js'),NULL,'1.0.0',true);
}

add_action('wp_enqueue_scripts','lk_setup');

//Dodavanje Theme Support
function lk_init()
{
	//Set_featured_image dodato u okviru Post type
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(350, 200, true);
	//cita sve iz Settingsa teme, cita Site Title i Tagline
	add_theme_support('title-tag');//wp_head();
	//podrska za html5
	add_theme_support('html5',
		array('comment-list','comment-form','search-form'));
}

add_action('after_setup_theme','lk_init');

//Dodavanje kartice Projekti
function lk_custom_post_type()
{
	//prvi parametar:ime,stavke
	register_post_type('project',array(
		'rewrite'=>array('slug'=>'projects'),
		'labels'=>array('name'=>'Projects',
						'singular_name'=>'Project',
						'add_new_item'=>'Dodaj novi projekat',
						'edit_item' =>'Izmeni projekat'
		),
		'menu-icon' => 'dashicons-admin-site',//dodato sa  WordPress-ovog dashicons-a
		'public'=>true,
		'has_archive'=>true,
		'supports'=>array('title','thumbnail','editor','excerpt','comments')
	));
}
add_action('init','lk_custom_post_type');


//Sidebar

function lk_widgets()
{
	register_sidebar(array(
		'name' => 'Main Sidebar',
		'id' => 'main_sidebar',
		'before_title' => '<h3>',
		'after_title'=>'</h3>' )
	);
}

add_action('widgets_init','lk_widgets');


//Filteri za search

function search_filter($query)
{
	if ($query->is_search()) {
		$query->set('post_type',array('post','project'));
	}
}

add_filter('pre_get_posts','search_filter');
