<?php
/*
Plugin Name: MediaBurn Relaunch
Plugin URI: http://aihr.us
Description: Custom posts and taxonomies for MediaBurn Relaunch.
Version: 0.0.1
Author: Michael Cannon
Author URI: http://typo3vagabond.com/about-typo3-vagabond/
License: GPL2

Copyright 2011  Michael Cannon  (email : mc@aihr.us)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

remove_role( 'contributor' );

add_action( 'init', 'mbr_register_post_type' );
add_action( 'init', 'mbr_register_taxonomy' );
add_action( 'admin_init', 'mbr_user_can' );
add_action( 'admin_init', 'mbr_modify_roles' );

function mbr_modify_roles () {
	global $wp_roles;

	$roles						= array(
		'administrator',
		'editor',
		'author',
		// removed via above
		// 'contributor',
	);

	foreach ( $roles as $role ) {
		$wp_roles->add_cap( $role, 'read_private_videos' );
		$wp_roles->add_cap( $role, 'read_private_documents' );
	}
}

function mbr_user_can() {
	if ( is_admin() ) {
		global $user;

		if ( user_can( $user->ID, 'administrator' )
			|| user_can( $user->ID, 'editor' )
			|| current_user_can( 'administrator' )
			|| current_user_can( 'editor' ) ) {
			require_once( 'meta-document-editor.php' );
			require_once( 'meta-video-editor.php' );
		} else {
			require_once( 'meta-document-author.php' );
			require_once( 'meta-video-author.php' );

			add_action( 'do_meta_boxes', 'mbr_remove_meta_box' );
		}

		if ( ! user_can( $user->ID, 'administrator' )
			&& ! current_user_can( 'administrator' ) ) {
			add_action( 'do_meta_boxes', 'mbr_remove_meta_box_custom_fields' );
		}
	} else {
		// front-end viewer
		require_once( 'meta-document-editor.php' );
		require_once( 'meta-video-editor.php' );
	}
}

function mbr_remove_meta_box_custom_fields() {
	$dont_support				= array(
		'postcustom'				=> 'normal',
		'wpzoom_post_layout'		=> 'normal',
	);

	foreach ( $dont_support as $deny => $position ) {
		remove_meta_box( $deny, 'video', $position );
		remove_meta_box( $deny, 'document', $position );
		remove_meta_box( $deny, 'post', $position );
	}
}

function mbr_remove_meta_box() {
	$dont_support				= array(
		'authordiv'					=> 'side',
		'categorydiv'				=> 'side',
		'coauthorsdiv'				=> 'normal',
		'collectiondiv'				=> 'side',
		'commentsdiv'				=> 'normal',
		'commentstatusdiv'			=> 'normal',
		'pageparentdiv'				=> 'side',
		'postexcerpt'				=> 'normal',
		'postimagediv'				=> 'side',
		'production_datediv'		=> 'side',
		'publication_datediv'		=> 'side',
		'revisionsdiv'				=> 'side',
		'slugdiv'					=> 'normal',
		'tagsdiv-genre'				=> 'side',
		'tagsdiv-language'			=> 'side',
		'tagsdiv-post_tag'			=> 'side',
		'tagsdiv-producer'			=> 'side',
		'trackbacksdiv'				=> 'normal',
		'wpseo_meta'				=> 'normal',
	);

	foreach ( $dont_support as $deny => $position ) {
		remove_meta_box( $deny, 'video', $position );
		remove_meta_box( $deny, 'document', $position );
	}
	
	$dont_support				= array(
		'authordiv'					=> 'side',
		// 'categorydiv'				=> 'side',
		'coauthorsdiv'				=> 'normal',
		'commentsdiv'				=> 'normal',
		'commentstatusdiv'			=> 'normal',
		'formatdiv'					=> 'side',
		'pageparentdiv'				=> 'side',
		'postexcerpt'				=> 'normal',
		'revisionsdiv'				=> 'side',
		'slugdiv'					=> 'normal',
		'trackbacksdiv'				=> 'normal',
	);

	foreach ( $dont_support as $deny => $position ) {
		remove_meta_box( $deny, 'post', $position );
	}
}

function mbr_register_post_type() {
	register_post_type( 'video',
		array(
			'label' => __('Videos', 'mediaburn-relaunch'),
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'publicly_queryable' => 'true',
			'hierarchical' => false,
			'rewrite' => array('slug' => 'video'),
			'query_var' => true,
			'has_archive' => 'videos',
			'menu_position' => 4,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'comments',
				'revisions',
				'thumbnail',
				'author',
				'custom-fields',
			),
			'taxonomies' => array(
				'category',
				'post_tag',
				'language',
				'genre',
				'collection',
				'producer',
				'production_date',
			),
			'labels' => array (
				'name' => __('Videos', 'mediaburn-relaunch'),
				'singular_name' => __('Video', 'mediaburn-relaunch'),
				'menu_name' => __('Videos', 'mediaburn-relaunch'),
				'add_new' => __('Add Video', 'mediaburn-relaunch'),
				'add_new_item' => __('Add New Video', 'mediaburn-relaunch'),
				'edit' => __('Edit', 'mediaburn-relaunch'),
				'edit_item' => __('Edit Video', 'mediaburn-relaunch'),
				'new_item' => __('New Video', 'mediaburn-relaunch'),
				'view' => __('View Video', 'mediaburn-relaunch'),
				'view_item' => __('View Video', 'mediaburn-relaunch'),
				'search_items' => __('Search Videos', 'mediaburn-relaunch'),
				'not_found' => __('No Videos Found', 'mediaburn-relaunch'),
				'not_found_in_trash' => __('No Videos Found in Trash', 'mediaburn-relaunch'),
				'parent' => __('Parent Video', 'mediaburn-relaunch'),
			),
		)
	);

	register_post_type( 'document',
		array(
			'label' => __('Documents', 'mediaburn-relaunch'),
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'publicly_queryable' => 'true',
			'hierarchical' => false,
			'rewrite' => array('slug' => 'document'),
			'query_var' => true,
			'has_archive' => 'documents',
			'menu_position' => 4,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'comments',
				'revisions',
				'thumbnail',
				'author',
				'custom-fields',
			),
			'taxonomies' => array(
				'category',
				'post_tag',
				'language',
				'genre',
				'collection',
				'producer',
				'publication_date',
			),
			'labels' => array (
				'name' => __('Documents', 'mediaburn-relaunch'),
				'singular_name' => __('Document', 'mediaburn-relaunch'),
				'menu_name' => __('Documents', 'mediaburn-relaunch'),
				'add_new' => __('Add Document', 'mediaburn-relaunch'),
				'add_new_item' => __('Add New Document', 'mediaburn-relaunch'),
				'edit' => __('Edit', 'mediaburn-relaunch'),
				'edit_item' => __('Edit Document', 'mediaburn-relaunch'),
				'new_item' => __('New Document', 'mediaburn-relaunch'),
				'view' => __('View Document', 'mediaburn-relaunch'),
				'view_item' => __('View Document', 'mediaburn-relaunch'),
				'search_items' => __('Search Documents', 'mediaburn-relaunch'),
				'not_found' => __('No Documents Found', 'mediaburn-relaunch'),
				'not_found_in_trash' => __('No Documents Found in Trash', 'mediaburn-relaunch'),
				'parent' => __('Parent Document', 'mediaburn-relaunch'),
			),
		)
	);
}

function mbr_register_taxonomy () {
	register_taxonomy('genre',
		array ( 'video','document',),
		array(
			'hierarchical' => false,
			'label' => __('Genres', 'mediaburn-relaunch'),
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'hierarchical' => true, 'slug' => 'genre'),
			'singular_label' => __('Genre', 'mediaburn-relaunch')
		)
	);

	register_taxonomy('language',
		array ( 'video','document',),
		array(
			'hierarchical' => false,
			'label' => __('Languages', 'mediaburn-relaunch'),
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'hierarchical' => true, 'slug' => 'language'),
			'singular_label' => __('Language', 'mediaburn-relaunch')
		)
	);

	register_taxonomy('producer',
		array ( 'video','document',),
		array(
			'hierarchical' => false,
			'label' => __('Producers', 'mediaburn-relaunch'),
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'hierarchical' => true, 'slug' => 'producer'),
			'singular_label' => __('Producer', 'mediaburn-relaunch')
		)
	);

	register_taxonomy('collection',
		array ( 'video','document',),
		array(
			'hierarchical' => true,
			'label' => __('Collections', 'mediaburn-relaunch'),
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'hierarchical' => true, 'slug' => 'collection'),
			'singular_label' => __('Collection', 'mediaburn-relaunch')
		)
	);

	register_taxonomy('production_date',
		array ( 'video' ),
		array(
			'hierarchical' => false,
			'label' => __('Production Dates', 'mediaburn-relaunch'),
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'hierarchical' => true, 'slug' => 'production_date'),
			'singular_label' => __('Production Date', 'mediaburn-relaunch')
		)
	);

	register_taxonomy('publication_date',
		array ( 'document',),
		array(
			'hierarchical' => false,
			'label' => __('Publication Dates', 'mediaburn-relaunch'),
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('with_front' => false, 'hierarchical' => true, 'slug' => 'publication_date'),
			'singular_label' => __('Publication Date', 'mediaburn-relaunch')
		)
	);
}

?>
