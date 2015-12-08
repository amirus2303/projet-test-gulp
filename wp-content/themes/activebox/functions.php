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
	'menu_position' => 4,
	'supports' => array('title','editor','thumbnail','custom-fields','comments')
	
	);
	register_post_type('activities',$args);
}

add_action ('init', 'create_taxonomy', 0);
function create_taxonomy()
{
	$labels = array(
	'name' => 'Catégories projets',
	'singular_name' => 'Catégorie projet',
	'search_items' => 'Rechercher une catégorie',
	'all_items' => 'Toutes les catégories',
	'edit_item' => 'Editer une catégorie',
	'update_item' => 'Modifier une catégorie',
	'add_new_item' => 'Ajouter une catégorie',
	'new_item_name' => 'Nouvelle catégorie',
	'menu_name' => 'Catégorie'
	
	);
	
	register_taxonomy('categories', array('activities'), array (
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'categories')
	
	
	));
}

// Custom post type - Img-boxes
add_action('init', 'img_boxes_init');
function img_boxes_init()
{
	$labels = array(
	'name' => 'Boites d\'images',
	'singular_name' => 'Boite image',
	'add_new' => 'Ajouter une boite image',
	'add_new_item' => 'Ajouter un nouvelle boite image',
	'edit_item' => 'Modifier une boite image',
	'new_item' => 'Nouvelle boite image',
	'view_item' => 'Voir la boite image',
	'search_items' => 'Rechercher une boite image',
	'not_found' => 'Aucune boite image trouvée',
	'not_found_in_trash' => 'Aucune boite image dans la corbeille',
	'menu_name' => 'Mes boites images'
	
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
	'menu_position' => 5,
	'supports' => array('title','editor','thumbnail','custom-fields','comments')
	
	);
	register_post_type('img_boxes',$args);
}

add_action ('init', 'create_taxonomy_img_boxes', 0);
function create_taxonomy_img_boxes()
{
	$labels = array(
	'name' => 'Catégories boites image',
	'singular_name' => 'Catégorie boite image',
	'search_items' => 'Rechercher une catégorie',
	'all_items' => 'Toutes les catégories',
	'edit_item' => 'Editer une catégorie',
	'update_item' => 'Modifier une catégorie',
	'add_new_item' => 'Ajouter une catégorie',
	'new_item_name' => 'Nouvelle catégorie',
	'menu_name' => 'Catégorie'
	
	);
	
	register_taxonomy('categories', array('img_boxes'), array (
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'categories')
	
	
	));
}

//Suppression des dimensions hard codées pour les box images
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

?>