<?php
/**
* Plugin Name: FED16 Pluginexempel
* Description: Custom Post Types
* Author: Anders Gustavsson
* Author URI: http://www.gustavssonindustries.se
* Version: 1.0
* Plugin URI: http://www.google.se
**/

// Security 
defined('ABSPATH') or die ('No script kiddies please!');

/*
require "namnet_pa_file.php";
// I filen säger vi att det finns en funktion som heter init_cpt_portfoliio();
*/

// När plugin aktiverats så hookar man på denna funktion som körs.
// When plugin is activated it is hooked on the function when it runs 
add_action('init', 'fed16_setup_plugin');

function fed16_setup_plugin() {
// om koden ligger i en annan fil, anropa bara funktionen init_cpt_portfolio

// Rubriker och knappar
	$labels = array(
		'name'				=> "Portfolio",
		'singular_name'		=> "Portfolio Item",
		'add_new'			=> " Add new",
		'add_new_item'		=> "Add new portfolio item",
		'new_item'			=> "Add new portfolio",
		'all_items'			=> "All portfolio items",
		'view_items'		=> "View portfolio items",
		'search_items'		=> "Search portfolio",
		'not_found'			=> "Did´nt found any portfolio items",
		'not_found_in_trash' => "Did'nt found any items in thrash",
		'menu_name'			=> "Portfolio"
		);
// Andra inställningar för CPT:n
	$args = array(
		'labels'				=> $labels,
		'description'			=> "Portfolio",
		'public'				=> true,
		'menu_position'			=> 5,
		'menu_icon'				=> 'dashicons-palmtree',
		'supports'				=> array(
									'title',
									'editor',
									'thumbnail',
									'author',
									'excerpt',
									'page-attributes'
										),
		'has_archive'			=> true,
		'rewrite'				=> array(
									'slug'	=> 'portfolio_item',
									'with_front' => true
										)
		);
// Få CPT:n att synas i menyn (samt registera den)
// OBS Skriv ej för långa nman, då funkar det ev. inte
	register_post_type('fed16_cpt_portfolio', $args);

	// Förfarande: 1. labels 2. inställningar 3. Registera taxonomin

	$labels = array(
		'name' 				=> 'Projekttyp',
		'singular_name'		=> 'Projekttyp',
		'search_items'		=> 'Search project type',
		'all_items'			=> 'All projektypes',
		'parent_item'		=> 'Maintype',
		'parent_item_colon'	=> 'Maintype',
		'edit_item'			=> 'Edit projectype',
		'update_item' 		=> 'Update projecttype',
		'add_new_item'		=>	'Add new projecttype',
		'add_new_name'		=>	'New projecttype',
		'menu_name'			=> 'Projecttypes'
		);

	$args = array(
		'labels'		=> $labels,
		'hierarchical'	=> true
		);

	// Aktivera taxonomin'
	register_taxonomy('fed16_projektyp', 'fed16_cpt_portfolio', $args);
}


?>