<?php
/*
Plugin Name: Mentions Légales
Plugin URI: https://www.vpstrat.com/
Description: Ajoute un menu de mentions légales personnalisables pour les professions réglementées.
Version: 1.0
Author: Aurélien Giorgino
Author URI: https://www.linkedin.com/in/aureliengiorgino/
License: GPL2
*/

// C'est ici que tout commence

// Créer la page des mentions légales
function mentions_legales_page() {
	if (file_exists(plugin_dir_path(__FILE__) . 'mentions-legales-page.php')) {
		include(plugin_dir_path(__FILE__) . 'mentions-legales-page.php');
	}
}

// ajout CSS
function wpdocs_enqueue_custom_admin_style() {
    wp_enqueue_style( 'custom_admin_style', plugin_dir_url( __FILE__ ) . 'css/style-mentions-legales.css' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );


// Ajouter les champs personnalisables
if (is_admin()) {
	require_once(plugin_dir_path(__FILE__) . 'mentions-legales-settings.php');
	add_action("admin_init", "mentions_legales_settings");
	//add_action("admin_menu", "mentions_legales_options");
}

// Ajout du menu des mentions légales
function ajouter_menu_mentions_legales() {
    add_menu_page(
		'Mentions Légales', // titre de la page
		'Mentions Légales', // titre dans le menu
		'manage_options', // capacité requise pour accéder à la page
		'mentions-legales', // slug de la page
		'mentions_legales_options', // fonction pour générer le contenu de la page
        '',
        0 // place le menu tout en haut
    );
}

add_action('admin_menu', 'ajouter_menu_mentions_legales');

?>
