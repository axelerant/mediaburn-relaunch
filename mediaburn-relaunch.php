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
add_action( 'admin_init', 'mbr_admin_init' );


function mbr_admin_init() {
	mbr_user_can();
	mbr_modify_roles();

	add_filter( 'manage_document_posts_columns', 'mbr_document_manage_posts_columns' );
	add_filter( 'manage_document_posts_custom_column', 'mbr_manage_posts_custom_column', 10, 2 );
	add_filter( 'manage_edit-document_sortable_columns', 'mbr_document_manage_sortable_columns' );
	add_filter( 'manage_edit-video_sortable_columns', 'mbr_video_manage_sortable_columns' );
	add_filter( 'manage_video_posts_columns', 'mbr_video_manage_posts_columns' );
	add_filter( 'manage_video_posts_custom_column', 'mbr_manage_posts_custom_column', 10, 2 );
}


function mbr_video_manage_sortable_columns( $columns ) {
	$columns['control_number']		= 'control_number';
	// $columns['production_date']		= 'production_date';
	$columns['video_tape_format']	= 'video_tape_format';

	return $columns;
}


function mbr_video_manage_posts_columns( $columns ) {
	$columns['control_number']		= __( 'Control Number', 'fitv' );
	$columns['video_tape_format']	= __( 'Video Tape Format', 'fitv' );
	// $columns['color']				= __( 'Color', 'fitv' );
	// $columns['language']			= __( 'Language', 'fitv' );
	$columns['genre']				= __( 'Genre', 'fitv' );
	$columns['collection']			= __( 'Collection', 'fitv' );
	$columns['producer']			= __( 'Producer', 'fitv' );
	$columns['production_date']		= __( 'Production Date', 'fitv' );

	$columns['acquisition_source']    = __( 'Acquisition Source', 'fitv' );
	$columns['actions']    = __( 'Actions', 'fitv' );
	$columns['additional_copies']    = __( 'Additional Copies', 'fitv' );
	$columns['additional_credits']    = __( 'Additional Credits', 'fitv' );
	// $columns['alternative_titles']    = __( 'Alternative Titles', 'fitv' );
	// $columns['audio_format']    = __( 'Audio Format', 'fitv' );
	$columns['condition']    = __( 'Condition', 'fitv' );
	// $columns['corporate_names']    = __( 'Corporate Names', 'fitv' );
	$columns['date_notation']    = __( 'Date Notation', 'fitv' );
	// $columns['film_format']    = __( 'Film Format', 'fitv' );
	$columns['general_note']    = __( 'General Note', 'fitv' );
	// $columns['generation']    = __( 'Generation', 'fitv' );
	// $columns['location_of_production']    = __( 'Location of Production', 'fitv' );
	// $columns['main_contributors']    = __( 'Main Contributors', 'fitv' );
	$columns['main_credits']    = __( 'Main Credits', 'fitv' );
	$columns['not_for_sale']    = __( 'Not For Sale', 'fitv' );
	// $columns['number_of_reels']    = __( 'Number of Reels', 'fitv' );
	// $columns['old_number']    = __( 'Old Number', 'fitv' );
	$columns['performers']    = __( 'Performers', 'fitv' );
	$columns['running_time']    = __( 'Running Time', 'fitv' );
	// $columns['sound']    = __( 'Sound', 'fitv' );
	$columns['staff_comments']    = __( 'Staff Comments', 'fitv' );
	// $columns['titles_on_reel']    = __( 'Titles on Reel', 'fitv' );
	// $columns['video_start_point']    = __( 'Video Start Point', 'fitv' );
	$columns['wpzoom_post_embed_code']    = __( 'Embedded Video', 'fitv' );

	return $columns;
}
 

function mbr_document_manage_sortable_columns( $columns ) {
	$columns['control_number']		= 'control_number';
	// $columns['publication_date']	= 'publication_date';
	// $columns['document_type']		= 'document_type';

	return $columns;
}


function mbr_document_manage_posts_columns( $columns ) {
	$columns['control_number']		= __( 'Control Number', 'fitv' );
	$columns['document_type']		= __( 'Type', 'fitv' );

	// $columns['language']			= __( 'Language', 'fitv' );
	$columns['genre']				= __( 'Genre', 'fitv' );
	$columns['collection']			= __( 'Collection', 'fitv' );
	$columns['producer']			= __( 'Producer', 'fitv' );
	$columns['publication_date']	= __( 'Publication Date', 'fitv' );

	// $columns['actions']    = __( 'Actions', 'fitv' );
	$columns['additional_copies']    = __( 'Additional Copies', 'fitv' );
	$columns['additional_credits']    = __( 'Additional Credits', 'fitv' );
	// $columns['alternative_titles']    = __( 'Alternative Titles', 'fitv' );
	$columns['collection_name']    = __( 'Collection Name', 'fitv' );
	// $columns['color']				= __( 'Color', 'fitv' );
	$columns['condition']    = __( 'Condition', 'fitv' );
	// $columns['corporate_names']    = __( 'Corporate Names', 'fitv' );
	$columns['date_notation']    = __( 'Date Notation', 'fitv' );
	$columns['general_note']    = __( 'General Note', 'fitv' );
	// $columns['generation']    = __( 'Generation', 'fitv' );
	// $columns['location']    = __( 'Location', 'fitv' );
	// $columns['location_of_production']    = __( 'Location of Production', 'fitv' );
	// $columns['main_contributors']    = __( 'Main Contributors', 'fitv' );
	$columns['main_credits']    = __( 'Main Credits', 'fitv' );
	// $columns['not_for_sale']    = __( 'Not For Sale', 'fitv' );
	$columns['number_of_pages']    = __( 'Number Of Pages', 'fitv' );
	$columns['size']    = __( 'Size', 'fitv' );
	$columns['staff_comments']    = __( 'Staff Comments', 'fitv' );
	// $columns['title_list']    = __( 'Title List', 'fitv' );

	return $columns;
}


function mbr_manage_posts_custom_column( $column, $post_id, $echo = true ) {
	// This function is ACF get_field specific than get_post_meta
	switch ( $column ) {
		case 'collection' :
		case 'genre' :
		case 'language' :
		case 'production_date' :
		case 'producer' :
		case 'publication_date' :
			$taxonomy			= $column;
			$post_type			= get_post_type($post_id);
			$terms				= get_the_terms($post_id, $taxonomy);

			if ( ! empty($terms) ) {
				foreach ( $terms as $term ) {
					$post_terms[]	="<a href='edit.php?post_type={$post_type}&{$taxonomy}={$term->slug}'> " .esc_html(sanitize_term_field('name', $term->name, $term->term_id, $taxonomy, 'edit')) . "</a>";
				}
				$text			= join(',', $post_terms );
			} else {
				$text			= '';
			}

			break;

		case 'color' :
			$data				=                 array (
				1 => 'Color',
				2 => 'Black & White',
				3 => 'Grey scale',
			);
			$values				= get_post_meta($post_id, $column, true);
			// $values				= get_field($column, $post_id);
			if ( $values ) {
				$values			= explode( ',', $values );
				$result			= array();
				foreach( $values as $key => $value ) {
					$value		= trim( $value );
					$result[]	= isset( $data[ $value ] ) ? $data[ $value ] : 'Not Defined';
				}

				$text			= implode( ', ', $result );
			} else {
				$text			= '';
			}
			break;

		case 'sound' :
			$data				= array(
				1 => 'Mono',
				3 => 'Silent',
				2 => 'Stereo',
				4 => 'Unknown',
			);
			$id				= get_post_meta($post_id, $column, true);
			// $id					= get_field($column, $post_id);
			if ( $id ) {
				$text			= isset( $data[ $id ] ) ? $data[ $id ] : 'Not Defined';
			} else {
				$text			= '';
			}
			break;

		case 'not_for_sale' :
			$data				= array(
				0 => 'For sale',
				1 => 'Not for sale',
			);
			$id				= get_post_meta($post_id, $column, true);
			// $id					= get_field($column, $post_id);
			if ( $id ) {
				$text			= isset( $data[ $id ] ) ? $data[ $id ] : 'Not Defined';
			} else {
				$text			= '';
			}
			break;

		case 'document_type' :
			$data				= array(
				1	=> 'Photograph',
				2	=> 'Artwork',
				3	=> 'Press',
				4	=> 'Correspondence',
				5	=> 'Financial',
				6	=> 'Notes',
				7	=> 'Other',
				8	=> 'Newsletter',
				9	=> 'Program',
				10	=> 'Proposal',
				11	=> 'Cartoon',
				12	=> 'Magazine Article',
				13	=> 'Newspaper Article',
				14	=> 'Memo',
			);
			$id				= get_post_meta($post_id, $column, true);
			// $id					= get_field($column, $post_id);
			if ( $id ) {
				$text			= isset( $data[ $id ] ) ? $data[ $id ] : 'Not Defined';
			} else {
				$text			= '';
			}
			break;

		case 'generation' :
			$post = &get_post($post_id);
			$post_type = $post->post_type;
			if ( 'video' == $post_type ) {
				$data				= array(
					1 => 'Camera Original',
					5 => 'Listening Copy',
					2 => 'Master',
					3 => 'Submaster',
					4 => 'Viewing Copy',
				);
			} else {
				$data				= array( 
					1 => 'original',
					2 => 'photocopy',
					3 => 'enlargement',
				);
			}
			$id				= get_post_meta($post_id, $column, true);
			// $id					= get_field($column, $post_id);
			if ( $id ) {
				$text			= isset( $data[ $id ] ) ? $data[ $id ] : '';
			} else {
				$text			= '';
			}
			break;

		case 'film_format' :
			$data				= array(
				2 => '16mm',
				1 => '35mm',
				4 => '8mm',
				3 => 'Super-8mm',
			);
			$id				= get_post_meta($post_id, $column, true);
			// $id					= get_field($column, $post_id);
			if ( $id ) {
				$text			= isset( $data[ $id ] ) ? $data[ $id ] : '';
			} else {
				$text			= '';
			}
			break;

		case 'audio_format' :
			$data				= array(
				1 => '1/4 in. reel-to-reel',
				12 => '33 1/3 RPM Vinyl Record',
				13 => '78 RPM Vinyl Record',
				2 => 'Audio cassette',
				3 => 'CD',
				4 => 'CD-R',
				14 => 'DAT',
				5 => 'DVD-A',
				6 => 'Floppy Disk',
				7 => 'Hard Drive',
				8 => 'LP',
				9 => 'SACD',
				10 => 'Sound Disk',
				11 => 'Zip Disk',
			);
			$id				= get_post_meta($post_id, $column, true);
			// $id					= get_field($column, $post_id);
			if ( $id ) {
				$text			= isset( $data[ $id ] ) ? $data[ $id ] : '';
			} else {
				$text			= '';
			}
			break;

		case 'sound' :
			$data				= array(
				1 => 'Mono',
				3 => 'Silent',
				2 => 'Stereo',
				4 => 'Unknown',
			);
			$id				= get_post_meta($post_id, $column, true);
			// $id					= get_field($column, $post_id);
			if ( $id ) {
				$text			= isset( $data[ $id ] ) ? $data[ $id ] : '';
			} else {
				$text			= '';
			}
			break;

		case 'video_tape_format' :
			$data				= array(
				1	=> 'Betacam',
				4	=> 'Betamax',
				5	=> 'D1',
				6	=> 'D2',
				7	=> 'D3',
				8	=> 'D5',
				9	=> 'DV',
				10	=> 'DVCAM',
				11	=> 'DVCPRO',
				12	=> 'Hi 8 mm',
				13	=> 'Video 8',
				14	=> 'VHS',
				15	=> 'VHS-C',
				16	=> 'S-VHS',
				17	=> '2 in.',
				18	=> '1 in.',
				20	=> 'U-matic',
				21	=> '1/2 in. reel-to-reel',
				22	=> 'Betacam SP',
				23	=> 'Betacam SX',
				26	=> 'D8',
				27	=> 'DVD',
				28	=> 'SVHSC',
				29	=> 'Laserdisc',
				32	=> 'Mini-DV',
				33	=> 'Digital Betacam',
				35	=> 'U-matic SP',
				36	=> 'Digital S',
				37	=> 'DVD-R',
				38	=> 'Digital file',
			);
			$id				= get_post_meta($post_id, $column, true);
			// $id					= get_field($column, $post_id);
			if ( $id ) {
				$text			= isset( $data[ $id ] ) ? $data[ $id ] : 'Not Defined';
			} else {
				$text			= '';
			}
			break;

		case 'performers':
			$text				= get_post_meta($post_id, $column, true);
			// $text				= get_field($column, $post_id);
			// $text				= str_replace( '<br />', '', $text );
			// $text				= str_replace( chr( 13 ), ', ', $text );
			break;

		case 'wpzoom_post_embed_code':
			$data				= get_post_meta($post_id, $column, true);
			// $data				= get_field($column, $post_id);
			$text				= ! empty( $data ) ? __( 'Yes', 'custom' ) : __( 'No', 'custom' );
			break;

		default:
			$text				= get_post_meta($post_id, $column, true);
			// $text				= get_field($column, $post_id);
			break;
	}

	if ( $echo )
		echo $text;
	else
		return $text;
}
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
