<?php
/**
 * @package portfolio-new-custom-post-type
 * @version 1.7.1
 */
/*
Plugin Name: Portfolio new custom post type
Plugin URI: #
Description: This is just a simple plugin
Author: Mario Bondici
Version: 1.0
Author URI: #
*/
/* Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
(Portfolio new post type) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
(Portfolio new post type) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with (Portfolio new post type). If not, see (http://link to your plugin license).
*/



function portfolio_new_custom_post_type() {
 
    $labels = array(
        'name'               => __( 'Portfolio'),
        'singular_name'      => __( 'Articolo' ),
        'menu_name'          => __( 'Portfolio'),
        'name_admin_bar'     => __( 'Portfolio'),
        'add_new'            => __( 'Nuovo articolo'),
        'add_new_item'       => __( 'Aggiungi nuovo articolo'),
        'new_item'           => __( 'Nuovo articolo'),
        'edit_item'          => __( 'Modifica articolo'),
        'view_item'          => __( 'Visualizza articolo'),
        'all_items'          => __( 'Elenco articoli'),
        'search_items'       => __( 'Cerca articoli'),
        'not_found'          => __( 'Nessun articolo trovato'),
        'not_found_in_trash' => __( 'Nessun articolo trovato nel cestino')
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'rewrite'            => array('slug' => 'portfolio'),
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'portfolio', $args );
}
 
add_action( 'init', 'portfolio_new_custom_post_type' );






?>
