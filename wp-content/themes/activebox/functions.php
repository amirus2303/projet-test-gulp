<?php
//activer le menu
add_theme_support("nav_menus");
register_nav_menu("primary","Menu principal");


//activer les images
add_theme_support( 'post-thumbnails');

// Custom post type - Mes projets
add_action('init', 'activities_init');
function activities_init()
{
	$labels = array(
	'name' => 'Projets',
	'singular_name' => 'Projet',
	'add_new' => 'Ajouter un projet',
	'add_new_item' => 'Ajouter un nouveau projet',
	'edit_item' => 'Modifier un projet',
	'new_item' => 'Nouveau projet',
	'view_item' => 'Voir le projet',
	'search_items' => 'Rechercher un projet',
	'not_found' => 'Aucun projets trouvé',
	'not_found_in_trash' => 'Aucun projet dans la corbeille',
	'menu_name' => 'Mes projets'
	
	);
	
	$args = array(
	'labels' => $labels,
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'menu_position' => 2,
	'supports' => array('title','editor','thumbnail','custom-fields','comments')
	
	);
	register_post_type('activities',$args);
}

?>